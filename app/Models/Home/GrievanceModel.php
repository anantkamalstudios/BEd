<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class GrievanceModel extends Model
{
    protected $table = 'grievance_redressal_cell';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image', 'name', 'designation',
        'contact', 'pdf'
    ];

    protected $useTimestamps = true;
}