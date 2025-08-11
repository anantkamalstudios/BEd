<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class GymnasiumsSportsModel extends Model
{
    protected $table = 'gymnasiums_sports_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'overview', 'image'];
    protected $useTimestamps = true;
}