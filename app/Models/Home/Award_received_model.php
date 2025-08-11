<?php

// namespace App\Models\Home;

// use CodeIgniter\Model;

// class Award_received_model extends Model
// {
  
//     protected $table = 'award_recived';
//     protected $primaryKey = 'id';



//     protected $allowedFields = [
//         'section_type', 'title', 'subtitle',
//         'designation'
//     ];

//     protected $useTimestamps = true;
// }


namespace App\Models\Home;

use CodeIgniter\Model;

class Award_received_model extends Model
{
    protected $table = 'Award_received_table';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'title', 'subtitle', 'designation','name'
    ];

    protected $useTimestamps = true;
}