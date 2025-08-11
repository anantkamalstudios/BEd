<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class AboutUsModel extends Model
{
    protected $table = 'about_us';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'overview', 'image'];
    protected $useTimestamps = true;
}