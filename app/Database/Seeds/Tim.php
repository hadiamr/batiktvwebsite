<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tim extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_tim' => 'Tim 1'
            ], [
                'nama_tim' => 'Tim 2'
            ], [
                'nama_tim' => 'Tim 3'
            ], [
                'nama_tim' => 'Tim 4'
            ], [
                'nama_tim' => 'Tim 5'
            ], [
                'nama_tim' => 'Tim 6'
            ], [
                'nama_tim' => 'Tim 7'
            ]
        ];
        $this->db->table('tim')->insertBatch($data);
    }
}
