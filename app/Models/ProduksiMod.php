<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduksiMod extends Model
{
    protected $table                = 'jadwalprod';
    protected $primaryKey           = 'id_prod';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['waktu', 'driver', 'program_id', 'episode', 'tempat'];

    function getProduksi()
    {
        return $this->db->table('jadwalprod')
            ->join('program', 'program.id=jadwalprod.program_id', 'left')
            ->orderBy('waktu', 'ASC')
            ->get()->getResultArray();
    }
}
