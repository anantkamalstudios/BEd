<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class AboutUsContentModel extends Model
{
    protected $table = 'about_us_content';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'section_type',
        'hero_title',
        'hero_subtitle',
        'hero_image',
        'overview',
        'about_image',
        'name',
        'designation',
        'department',
        'faculty_image'
    ];
    protected $useTimestamps = true;
}