<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class GrievanceCellModel extends Model
{
    protected $table = 'grievance_cell_content';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'name', 'designation', 'image', 'pdf'
    ];

    protected $useTimestamps = true;
}