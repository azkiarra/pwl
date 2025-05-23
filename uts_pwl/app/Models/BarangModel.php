<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'stok', 'keterangan'];
    protected $useTimestamps = false;
}
