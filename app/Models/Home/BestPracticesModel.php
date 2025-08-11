<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class BestPracticesModel extends Model
{
    protected $table = 'best_practices';
    protected $primaryKey = 'id';
    protected $allowedFields = ['file_name'];
    protected $useTimestamps = true;
}