<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class IqacModel extends Model
{
    protected $table = 'iqac_page';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'name', 'designation', 'image'
    ];
    protected $useTimestamps = true;
}