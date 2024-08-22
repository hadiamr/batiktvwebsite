<?php

namespace App\Models;

use CodeIgniter\Model;

class SetelanModel extends Model
{
    protected $table            = 'setelan';
    protected $primaryKey       = 'id';

    protected $protectFields    = true;
    protected $allowedFields    = ['judul', 'deskripsi', 'tentang1', 'tentang2', 'alamat', 'operasional', 'jangkauan', 'facebook', 'twitter', 'instagram', 'youtube'];
}
