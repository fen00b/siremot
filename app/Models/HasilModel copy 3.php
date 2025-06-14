<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilModel extends Model
{
    protected $table = 'tb_spek';
    protected $primaryKey = 'id';

    // field yang boleh di isi
    protected $allowedFields =
    [
        'id',
        'manufaktur',
        'nama',
        'harga',
        'jenis',
        'jenis_detail',
        'replacement',
        'transmisi',
        'tank_size',
        'bagasi_size',
        'other',
        'image',
        'deskripsi'
    ];

    public function filter($filtered)
    {
        $builder = $this->db->table('tb_spek');

        // Filter berdasarkan jenis
        if ($filtered['id_rekom'] == 'list') {
            if (!empty($filtered['jenis'])) {
                $builder->where('jenis', $filtered['jenis']);
            }
        } else {
            $builder->where('jenis', $filtered['id_rekom']);
        }

        // Filter berdasarkan manufaktur
        if (!empty($filtered['manufaktur'])) {
            $builder->where('manufaktur', $filtered['manufaktur']);
        }

        //filter harga

        if (!empty($filtered['harga'])) {
            $harga = $filtered['harga'];
        }
        $fitur = [
            'abs' => !empty($filtered['abs']),
            'tc' => !empty($filtered['tc']),
            'keyless' => !empty($filtered['keyless']),
            'power_socket' => !empty($filtered['power_socket'])
        ];

        $similarity_treshold = 0.1;

        function HitungSimilarity($item, $harga, $fitur)
        {
            $similarity = 0;
            $fitur_similarity = 0;
            $feature_count = count($fitur);
            if ($harga !== null) {
                $similarity += 1 / (1 + abs($item['harga'] - $harga)); // Inverse of absolute difference
            }
        };

        //=----------------------===================================------------------------------=-=-=-=-


        // Fetch all data before applying custom similarity sorting
        $results = $builder->get()->getResultArray();

        // Reference values
        $reference_price = !empty($filtered['harga']) ? $filtered['harga'] : null;
        $reference_features = [
            'abs' => !empty($filtered['abs']),
            'tc' => !empty($filtered['tc']),
            'keyless' => !empty($filtered['keyless']),
            'power_socket' => !empty($filtered['power_socket'])
        ];

        // Similarity threshold for features
        $feature_similarity_threshold = 0.1; // Adjust this value as needed

        // Function to calculate similarity
        function calculateSimilarity($item, $reference_price, $reference_features)
        {
            $similarity = 0;
            $feature_similarity = 0;
            $feature_count = count($reference_features);

            // Calculate price similarity
            if ($reference_price !== null) {
                $similarity += 1 / (1 + abs($item['harga'] - $reference_price)); // Inverse of absolute difference
            }

            // Calculate feature similarity
            $item_features = [
                'abs' => strpos($item['other'], 'abs') !== false,
                'tc' => strpos($item['other'], 'tc') !== false,
                'keyless' => strpos($item['other'], 'keyless') !== false,
                'power_socket' => strpos($item['other'], 'power socket') !== false || strpos($item['other'], 'USB Charger') !== false
            ];

            $matching_features = 0;
            foreach ($reference_features as $feature => $is_present) {
                if ($is_present) {
                    $matching_features += $item_features[$feature] ? 1 : 0;
                }
            }

            if ($feature_count > 0) {
                $feature_similarity = $matching_features / $feature_count;
            }

            // Adding feature similarity to total similarity
            $similarity += $feature_similarity;

            return [$similarity, $feature_similarity];
        }

        // Calculate similarity for each item and filter by feature similarity threshold
        $filtered_results = [];
        foreach ($results as $item) {
            list($similarity, $feature_similarity) = calculateSimilarity($item, $reference_price, $reference_features);
            if ($feature_similarity >= $feature_similarity_threshold) {
                $item['similarity'] = $similarity;
                $filtered_results[] = $item;
            }
        }


        // Sort filtered results by similarity in descending order
        usort($filtered_results, function ($a, $b) {
            return $b['similarity'] <=> $a['similarity'];
        });

        // Remove similarity score before returning results
        foreach ($filtered_results as &$item) {
            unset($item['similarity']);
        }



        return $filtered_results;
    }
}
