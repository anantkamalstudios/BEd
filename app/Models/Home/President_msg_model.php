<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class President_msg_model extends Model
{
    protected $table = 'president_msg';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'overview', 'name', 'designation', 'address', 'mobile'
    ];

    protected $useTimestamps = true;
}