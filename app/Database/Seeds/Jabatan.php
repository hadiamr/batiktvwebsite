<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jabatan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_jabatan' => 'Direktur Operasional'
            ],
            [
                'nama_jabatan' => 'Koordinator News'
            ],
            [
                'nama_jabatan' => 'Koordinator Feature'
            ],
            [
                'nama_jabatan' => 'Koordinator MCO'
            ],
            [
                'nama_jabatan' => 'Koordinator Administrasi'
            ],
            [
                'nama_jabatan' => 'Peralatan/Artistik'
            ],
            [
                'nama_jabatan' => 'MCO'
            ],
            [
                'nama_jabatan' => 'Kameramen'
            ],
            [
                'nama_jabatan' => 'Editor'
            ],
            [
                'nama_jabatan' => 'Host'
            ],
            [
                'nama_jabatan' => 'Presenter'
            ],
            [
                'nama_jabatan' => 'Wartawan'
            ],
            [
                'nama_jabatan' => 'Administrasi'
            ],
            [
                'nama_jabatan' => 'Marketing'
            ],
            [
                'nama_jabatan' => 'Medsos'
            ],
            [
                'nama_jabatan' => 'Driver'
            ],
            [
                'nama_jabatan' => 'OB/PU'
            ],
            [
                'nama_jabatan' => 'Security'
            ],
            [
                'nama_jabatan' => 'Desain Grafis'
            ]
        ];
        $this->db->table('jabatan')->insertBatch($data);
    }
}
