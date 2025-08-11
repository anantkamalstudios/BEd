<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class LaboratoryPageModel extends Model
{
    protected $table = 'laboratory_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'overview', 'image'];
}