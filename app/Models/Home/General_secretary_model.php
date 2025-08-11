<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class General_secretary_model extends Model
{
    protected $table = 'general_secretary_msg';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'overview', 'name', 'designation', 'address', 'mobile'
    ];

    protected $useTimestamps = true;
}