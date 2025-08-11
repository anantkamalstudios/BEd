<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class LibraryPageModel extends Model
{
    protected $table = 'library_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'overview', 'image'];
}