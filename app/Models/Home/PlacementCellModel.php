<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class PlacementCellModel extends Model
{
    protected $table = 'placement_cell_content';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle',
        'name', 'designation', 'image', 'pdf'
    ];

    protected $useTimestamps = true;
}