<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class StudentCouncilModel extends Model
{
    protected $table = 'student_council';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'name', 'designation', 'image', 'pdf'
    ];
    protected $useTimestamps = true;
}