<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramMod extends Model
{
    protected $table                = 'program';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['nama_program', 'deskripsi', 'host1', 'host2', 'host3', 'cam1', 'cam2', 'cam3', 'editor', 'tim'];
}
