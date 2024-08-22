<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stok extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_stok'          => [
                'type'          => 'INT',
                'constraint'    => 5,
                'auto_increment' => true,
                'unsigned'      => true
            ],
            'kodestok'          => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'unique'       => true
            ],
            'episode'          => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ]
        ]);
        $this->forge->addKey('id_stok', TRUE);
        $this->forge->createTable('stokprod', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('stokprod');
    }
}
