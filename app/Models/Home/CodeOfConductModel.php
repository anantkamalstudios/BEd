<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class CodeOfConductModel extends Model
{
    protected $table = 'code_of_conduct';
    protected $primaryKey = 'id';
    protected $allowedFields = ['file_name'];
    protected $useTimestamps = true;
}