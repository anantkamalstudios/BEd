<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class BramhaValleyModel extends Model
{
    protected $table = 'bramha_valley_bed_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'image', 'overview'];
}