<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class CampusDirectorDeskModel extends Model
{
    protected $table = 'campus_director_desk';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'overview', 'name', 'designation', 'address', 'mobile'
    ];

    protected $useTimestamps = true;
}