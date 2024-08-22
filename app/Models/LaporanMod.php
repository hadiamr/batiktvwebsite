<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanMod extends Model
{
    protected $table                = 'laporan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_program', 'minggu1', 'minggu2', 'minggu3', 'minggu4', 'minggu5'];
}
