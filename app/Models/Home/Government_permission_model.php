<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class Government_permission_model extends Model
{
    // protected $table = 'president_msg';
    protected $table = 'governmentpermission';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'overview', 'name', 'designation', 'address', 'mobile'
    ];

    protected $useTimestamps = true;
}