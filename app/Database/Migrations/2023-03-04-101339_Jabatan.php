<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jabatan extends Migration
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
            'nama_jabatan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('jabatan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('jabatan');
    }
}
