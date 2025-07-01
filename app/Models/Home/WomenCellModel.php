<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class WomenCellModel extends Model
{
    protected $table = 'womens_cell';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 
        'title',        
        'subtitle',  
        'image',        
        'name',         
        'designation',  
        'contact',   
        'pdf'      
    ];

    protected $useTimestamps = true;
}