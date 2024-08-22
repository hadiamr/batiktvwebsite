<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Hari extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_hari' => 'Senin'
            ], [
                'nama_hari' => 'Selasa'
            ], [
                'nama_hari' => 'Rabu'
            ], [
                'nama_hari' => 'Kamis'
            ], [
                'nama_hari' => 'Jumat'
            ], [
                'nama_hari' => 'Sabtu'
            ], [
                'nama_hari' => 'Minggu'
            ]
        ];
        $this->db->table('hari')->insertBatch($data);
    }
}
