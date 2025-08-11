<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class Voice_president_desk_model extends Model
{
    protected $table = 'vice_president';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'overview', 'name', 'designation', 'address', 'mobile'
    ];

    protected $useTimestamps = true;
}