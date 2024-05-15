<?php

namespace App\Models;

use CodeIgniter\Model;

class PelanganModel extends Model
{
    protected $table = 'pelanggan';
    protected $allowedFields = ['nama_pelanggan', 'no_hp'];
}
