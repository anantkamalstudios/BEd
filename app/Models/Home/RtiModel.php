<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class RtiModel extends Model
{
    protected $table = 'right_to_information';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'name', 'designation', 'contact', 'pdf'
    ];
}