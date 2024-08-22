<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
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
            'nama_lengkap' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ],
            'username' => [
                'type'          => 'VARCHAR',
                'constraint'    => 25,
                'unique'        => true
            ],
            'phone' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'jabatan1' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'jabatan2' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'jabatan3' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('karyawan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('karyawan');
    }
}
