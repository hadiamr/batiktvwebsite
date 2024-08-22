<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'hadi',
                'password' => password_hash('Hadi123*', PASSWORD_DEFAULT),
                'nama_lengkap' => 'Hadi Amrullah',
                'email' => 'hadiamr29@gmail.com',
                'role' => 'superadmin'
            ],
        ];
        $this->db->table('admin')->insertBatch($data);
    }
}
