<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tim extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment' => true
            ],
            'nama_tim' => [
                'type'          => 'VARCHAR',
                'constraint'    => 25,
                'unique'        => true
            ],
            'program' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('tim', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tim');
    }
}
