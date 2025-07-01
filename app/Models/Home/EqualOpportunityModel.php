<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class EqualOpportunityModel extends Model
{
    protected $table = 'equal_opportunity';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type',
        'title',
        'subtitle',
        'name',
        'designation',
        'contact',
        'image',
        'pdf',
    ];

    protected $useTimestamps = true;
}