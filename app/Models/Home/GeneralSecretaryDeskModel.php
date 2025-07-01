<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class GeneralSecretaryDeskModel extends Model
{
    protected $table = 'general_secretary_desk';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'overview', 'name', 'designation', 'address', 'mobile'
    ];

    protected $useTimestamps = true;
}