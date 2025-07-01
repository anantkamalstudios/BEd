<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class AntiRaggingModel extends Model
{
    protected $table = 'anti_ragging_cell';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type',
        'title',
        'subtitle',
        'image',
        'name',
        'designation',
        'member_image',
        'pdf'
    ];

    protected $useTimestamps = true;
}