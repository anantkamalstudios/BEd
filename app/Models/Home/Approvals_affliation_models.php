<?php

// namespace App\Models\Home;

// use CodeIgniter\Model;

// class Approvals_affliation_models extends Model
// {
//     // protected $table = 'president_msg';
//     protected $table = 'approvalsaffliation';
//     protected $primaryKey = 'id';

//     protected $allowedFields = [
//         'section_type', 'title', 'subtitle', 'image',
//         'overview', 'name', 'designation', 'address', 'mobile'
//     ];

//     protected $useTimestamps = true;
// }

namespace App\Models\Home;

use CodeIgniter\Model;

class Approvals_affliation_models extends Model
{
    protected $table = 'approvals_affliation_table';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'image',
        'vision', 'mission'
    ];

    protected $useTimestamps = true;
}