<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class DivyangCellModel extends Model
{
    protected $table = 'divyang_cell'; // Table name
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

    protected $useTimestamps = true; // created_at & updated_at
}