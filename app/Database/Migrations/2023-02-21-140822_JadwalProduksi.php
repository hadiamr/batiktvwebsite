<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalProduksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_prod'          => [
                'type'          => 'INT',
                'constraint'    => 5,
                'auto_increment' => true,
                'unsigned'      => true
            ],
            'waktu' => [
                'type'          => 'DATETIME',
                'constraint'    => 6
            ],
            'driver' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'program_id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true
            ],
            'episode' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'tempat' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'kodestok' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
        ]);
        $this->forge->addKey('id_prod', TRUE);
        $this->forge->createTable('jadwalprod', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('jadwalprod');
    }
}
