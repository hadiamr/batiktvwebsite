<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Setelan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment' => true,
                'unique'        => true
            ],
            'judul' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'deskripsi' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'tentang1' => [
                'type'          => 'VARCHAR',
                'constraint'    => 1000,
            ],
            'tentang2' => [
                'type'          => 'VARCHAR',
                'constraint'    => 1000,
            ],
            'alamat' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'operasional' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'jangkauan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'facebook' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'twitter' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'instagram' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'youtube' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('setelan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('setelan');
    }
}
