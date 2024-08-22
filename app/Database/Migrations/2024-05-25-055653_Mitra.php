<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mitra extends Migration
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
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'logo' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('mitra', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('mitra');
    }
}
