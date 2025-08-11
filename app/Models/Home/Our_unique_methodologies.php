<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class Our_unique_methodologies extends Model
{
    protected $table = 'our_u_methodology';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'subtitle', 'image'];
    protected $useTimestamps = true;
}