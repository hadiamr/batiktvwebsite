<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Program extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_program' => 'Besti'
            ],
            [
                'nama_program' => 'Serial'
            ],
            [
                'nama_program' => 'Inspirasi Prestasi'
            ],
            [
                'nama_program' => 'Creative Talk (VOA)'
            ],
            [
                'nama_program' => 'Indonesiana'
            ],
            [
                'nama_program' => 'Peluang'
            ],
            [
                'nama_program' => 'Wakil Rakyat'
            ],
            [
                'nama_program' => 'Mutiara Hikmah'
            ],
            [
                'nama_program' => 'Anjang Desa'
            ],
            [
                'nama_program' => 'Icip-icip'
            ],
            [
                'nama_program' => 'Opini'
            ],
            [
                'nama_program' => 'Expose'
            ],
            [
                'nama_program' => 'Dolan Paud'
            ],
            [
                'nama_program' => 'Kajian Islam'
            ],
            [
                'nama_program' => 'Before After'
            ],
            [
                'nama_program' => 'Karangkoeo'
            ],
            [
                'nama_program' => 'Cerita Rempah'
            ],
            [
                'nama_program' => 'Warung VOA'
            ],
            [
                'nama_program' => 'Narasehat'
            ],
            [
                'nama_program' => 'Pojok Terampil'
            ],
            [
                'nama_program' => 'Pranggok'
            ],
            [
                'nama_program' => 'On The Screen'
            ],
            [
                'nama_program' => 'Sportframe'
            ],
            [
                'nama_program' => 'Iqro'
            ],
            [
                'nama_program' => 'Gerak dan Gaya'
            ],
            [
                'nama_program' => 'Komunitas Tanpa Batas'
            ],
            [
                'nama_program' => 'Kalongan Bae'
            ],
            [
                'nama_program' => 'Cahaya Rohani'
            ],
            [
                'nama_program' => 'Podcast Putih Abu'
            ],
            [
                'nama_program' => 'Musiklopedia'
            ],
            [
                'nama_program' => 'Healing'
            ],
            [
                'nama_program' => 'Satwa Kita'
            ],
            [
                'nama_program' => 'She Magazine (VOA)'
            ],
            [
                'nama_program' => 'Matari'
            ],
            [
                'nama_program' => 'Kominfo Newsroom'
            ],
            [
                'nama_program' => 'Berita Daerah (siang)'
            ],
            [
                'nama_program' => 'Berita Daerah (malam)'
            ]
        ];
        $this->db->table('program')->insertBatch($data);
    }
}
