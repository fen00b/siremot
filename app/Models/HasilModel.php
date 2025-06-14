<?php

namespace App\Models;

use CodeIgniter\Model;
use Reflector;

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
        // dd($filtered);

        // Logika filter awal berdasarkan 'id_rekom' dan 'jenis'
        if ($filtered['id_rekom'] == 'list') {
            if (!empty($filtered['jenis'])) {
                $builder->where('jenis', $filtered['jenis']);
            }
        } else {
            $builder->where('jenis', $filtered['id_rekom']);
        }

        // Filter berdasarkan manufaktur jika diberikan
        if (!empty($filtered['manufaktur'])) {
            $builder->where('manufaktur', $filtered['manufaktur']);
        }

        // Filter berdasarkan harga jika diberikan
        if (!empty($filtered['harga'])) {
            $builder->where('harga <=', $filtered['harga']);
        }

        // Fetch all data based on initial filters
        $results = $builder->get()->getResultArray();

        // Reference features vector
        $reference_features = [
            'abs' => !empty($filtered['abs']) ? 1 : 0,
            'tc' => !empty($filtered['tc']) ? 1 : 0,
            'keyless' => !empty($filtered['keyless']) ? 1 : 0,
            'power_socket' => !empty($filtered['power_socket']) ? 1 : 0,
            'harga' => !empty($filtered['harga']) ? $filtered['harga'] : 0  // Harga ditambahkan di sini
        ];




        // Normalisasi harga pada reference features
        $max_harga = max(array_column($results, 'harga'));
        $reference_features['harga'] = $reference_features['harga'] / $max_harga;


        // Fungsi Hitung Cosine Similarity
        function calculateCosineSimilarity($item_features, $reference_features)
        {
            $dot_product = 0;
            $item_magnitude = 0;
            $reference_magnitude = 0;

            foreach ($reference_features as $feature => $ref_value) {
                $item_value = $item_features[$feature];

                $dot_product += $item_value * $ref_value;
                $item_magnitude += $item_value ** 2;
                $reference_magnitude += $ref_value ** 2;
            }

            $item_magnitude = sqrt($item_magnitude);
            $reference_magnitude = sqrt($reference_magnitude);

            if ($item_magnitude * $reference_magnitude == 0) {
                return 0; // to avoid division by zero
            }

            return $dot_product / ($item_magnitude * $reference_magnitude);
        }

        // Menghitung Kesamaan/Similarity Tiap item
        foreach ($results as &$item) {
            $item_features = [
                'abs' => strpos($item['other'], 'abs') !== false ? 1 : 0,
                'tc' => strpos($item['other'], 'tc') !== false ? 1 : 0,
                'keyless' => strpos($item['other'], 'keyless') !== false ? 1 : 0,
                'power_socket' => (strpos($item['other'], 'Power Socket') !== false || strpos($item['other'], 'USB Charger') !== false) ? 1 : 0,
                'harga' => $item['harga'] / $max_harga  // Harga juga dinormalisasi
            ];



            $cosine_similarity = calculateCosineSimilarity($item_features, $reference_features);
            $item['cosine_similarity'] = $cosine_similarity;
        }

        // Sort by cosine similarity in descending order
        usort($results, function ($a, $b) {
            return $b['cosine_similarity'] <=> $a['cosine_similarity'];
        });
        // dd($results);

        // Hasil akan tetap menampilkan cosine similarity
        return $results;
    }
}
