<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class Admin extends Migration
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
            'username' => [
                'type'          => 'VARCHAR',
                'constraint'    => 25,
                'unique'        => true
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'nama_lengkap' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 25,
                'unique'        => true
            ],
            'foto' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'token' => [
                'type'          => 'VARCHAR',
                'constraint'    => 25
            ],
            'role' => [
                'type'          => 'VARCHAR',
                'constraint'    => 25
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('admin', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}
