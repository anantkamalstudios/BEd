<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class AdmissionModel extends Model
{
    protected $table = 'admission_info';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'overview', 'image'];
    protected $useTimestamps = true;
}