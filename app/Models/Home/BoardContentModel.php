<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class BoardContentModel extends Model
{
    protected $table = 'board_content';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'name', 'designation', 'image'
    ];
    protected $useTimestamps = true;
}