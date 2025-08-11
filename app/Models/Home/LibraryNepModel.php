<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class LibraryNepModel extends Model
{
    protected $table = 'library_nep_2020';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'image', 'pdf'];
    protected $useTimestamps = true;
}