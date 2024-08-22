<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TayangHarian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment' => true
            ],
            'jam'          => [
                'type'          => 'VARCHAR',
                'constraint'    => 5,
            ],
            'minggu'          => [
                'type'          => 'INT',
                'constraint'    => 11,
            ],
            'bulan'          => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'episode'          => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'nama_program'          => [
                'type'          => 'VARCHAR',
                'constraint'    => 50,
            ],
            'tanggal'          => [
                'type'          => 'VARCHAR',
                'constraint'    => 25,
            ],
        ]);
        $this->forge->addKey('id_tayangan', TRUE);
        $this->forge->createTable('tayangan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tayangan');
    }
}
