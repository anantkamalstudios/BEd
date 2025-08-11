<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class PhotoGalleryModel extends Model
{
    protected $table = 'photo_gallery_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'image'];
}