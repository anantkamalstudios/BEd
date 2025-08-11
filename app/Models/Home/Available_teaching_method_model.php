<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class Available_teaching_method_model extends Model
{
    protected $table = 'teaching_method';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'designation'
    ];

    protected $useTimestamps = true;
}