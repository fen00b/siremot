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

        // Filter berdasarkan harga
        if (!empty($filtered['harga'])) {
            $builder->where('harga <=', $filtered['harga']);
        }

        // Filter untuk fitur-fitur lainnya
        if (!empty($filtered['abs'])) {
            $builder->like('other', 'abs');
        }

        if (!empty($filtered['tc'])) {
            $builder->like('other', 'tc');
        }

        if (!empty($filtered['keyless'])) {
            $builder->like('other', 'keyless');
        }

        if (!empty($filtered['power_socket'])) {
            $builder->groupStart()
                ->like('other', 'power socket')
                ->orLike('other', 'USB Charger')
                ->groupEnd();
        }


        //filter berdasarkan urutan
        if (!empty($filtered['sort_by'])) {
            if ($filtered['sort_by'] == 'price_hl') {
                $builder->orderBy('harga', 'DESC');
            } elseif ($filtered['sort_by'] == 'price_lh') {
                $builder->orderBy('harga', 'ASC');
            } elseif ($filtered['sort_by'] == 'bagasi_size') {
                $builder->orderBy('bagasi_size', 'DESC');
            } elseif ($filtered['sort_by'] == 'fuel_size') {
                $builder->orderBy('tank_size', 'DESC');
            }
        }

        return $builder->get()->getResultArray();
    }
}
