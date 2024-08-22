<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanMod extends Model
{
    protected $table                = 'jabatan';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_jabatan'];
}
