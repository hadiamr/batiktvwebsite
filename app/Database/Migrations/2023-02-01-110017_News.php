<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'post_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'author' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'post_title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => TRUE
            ],
            'post_title_seo' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'post_status' => [
                'type' => 'ENUM',
                'constraint' => ['Aktif', 'Tidak Aktif'],
                'default' => 'Aktif'
            ],
            'post_type' => [
                'type' => 'ENUM',
                'constraint' => ['article', 'page'],
                'default' => 'article'
            ],
            'post_thumbnail' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'post_description' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'post_content' => [
                'type' => 'LONGTEXT',
            ],
            'post_time timestamp default now()'
        ]);
        $this->forge->addKey('post_id', TRUE);
        $this->forge->createTable('news', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}
