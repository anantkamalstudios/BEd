<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'image'];
    protected $useTimestamps = true;
}