<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class TeachingFacultyModel extends Model
{
    protected $table = 'teaching_faculty_page';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'name', 'designation', 'qualification', 'image'
    ];

    protected $useTimestamps = true;
}