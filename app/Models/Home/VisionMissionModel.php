<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class VisionMissionModel extends Model
{
    protected $table = 'vision_mission_page';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'vision', 'mission', 'belief'
    ];

    protected $useTimestamps = true;
}