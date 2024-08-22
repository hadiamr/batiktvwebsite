<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $faker = \Faker\Factory::create(20);
            $data = [
                'author' => $faker->name,
                'post_title' => $faker->text,
                'post_title_seo' => $faker->title,
                'post_status' => 'Aktif',
                'post_type' => 'article',
                'post_thumbnail' => "",
                'post_link' => $faker->text,
                'post_content' => $faker->text
            ];
            $this->db->table('news')->insert($data);
        }
    }
}
