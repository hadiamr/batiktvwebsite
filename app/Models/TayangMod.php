<?php

namespace App\Models;

use CodeIgniter\Model;

class TayangMod extends Model
{
    protected $table                = 'jadwaltayang';
    protected $primaryKey           = 'id_tayang';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['hari', 'program', 'jam', 'kategori'];
}
