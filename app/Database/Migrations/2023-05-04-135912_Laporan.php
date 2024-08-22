<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Laporan extends Migration
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
            'nama_program' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'minggu1' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'minggu2' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'minggu3' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'minggu4' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
            'minggu5' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('laporan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('laporan');
    }
}
