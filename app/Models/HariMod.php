<?php

namespace App\Models;

use CodeIgniter\Model;

class HariMod extends Model
{
    protected $table                = 'hari';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_hari'];
}
