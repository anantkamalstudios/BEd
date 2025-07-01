<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class ContactUsModel extends Model
{
    protected $table = 'contact_us_page';
    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'section_type',
        'title',
        'subtitle',
        'image',
        'map',
        'address',
        'mobile',
        'email'
    ];

    protected $useTimestamps = true;
}