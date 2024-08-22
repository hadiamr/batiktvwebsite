<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanMod extends Model
{
    protected $table                = 'karyawan';
    protected $primaryKey           = 'username';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_lengkap', 'username', 'phone', 'jabatan1', 'jabatan2', 'jabatan3'];
}
