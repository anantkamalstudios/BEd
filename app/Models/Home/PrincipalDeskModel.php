<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class PrincipalDeskModel extends Model
{
    protected $table = 'principal_desk';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'overview', 'name', 'designation', 'address', 'mobile'
    ];

    protected $useTimestamps = true;
}