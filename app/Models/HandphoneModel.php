<?php

namespace App\Models;

use CodeIgniter\Model;

class HandphoneModel extends Model
{
    protected $table            = 'handphone';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['merk', 'tipe', 'spesifikasi'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
