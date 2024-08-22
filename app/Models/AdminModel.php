<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "admin";
    protected $primaryKey = "username";
    protected $allowedFields = ['id', 'username', 'password', 'nama_lengkap', 'foto', 'email', 'token', 'role'];
    protected $useTimestamps = false;

    public function getAdmin()
    {
        return $this->findAll();
    }

    function getPengguna()
    {
        return $this->db->table('admin')
            ->join('karyawan', 'karyawan.username=admin.username')
            ->orderBy('nama_lengkap', 'ASC')
            ->get()->getResultArray();
    }
}
