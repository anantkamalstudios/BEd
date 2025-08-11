<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class HeroModel extends Model
{
    protected $table = 'hero_sections';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'subtitle', 'banner_image'];
    protected $useTimestamps = true;
}