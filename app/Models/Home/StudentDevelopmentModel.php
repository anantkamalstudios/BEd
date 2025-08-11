<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class StudentDevelopmentModel extends Model
{
    protected $table = 'student_development_committee';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type',
        'title',
        'subtitle',
        'name',
        'designation',
        'contact',
        'image',
        'pdf',
    ];

    protected $useTimestamps = true;
}