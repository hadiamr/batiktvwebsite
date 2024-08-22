<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Program extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'auto_increment' => true,
                'unsigned'      => true,
                'unique'        => true
            ],
            'nama_program' => [
                'type'          => 'VARCHAR',
                'constraint'    => 25,
                'unique'        => true
            ],
            'deskripsi' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'host1' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'host2' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'host3' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'cam1' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'cam2' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'cam3' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'editor' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'tim' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('program', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('program');
    }
}
