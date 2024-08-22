<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalTayang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tayang'          => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment' => true
            ],
            'hari' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'program' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'jam' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'kategori' => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
        ]);
        $this->forge->addKey('id_tayang', TRUE);
        $this->forge->createTable('jadwalTayang', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('jadwalTayang');
    }
}
