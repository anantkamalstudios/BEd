<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class Board_of_director_model extends Model
{
    protected $table = 'board_of_director';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'subtitle', 'image'];
    protected $useTimestamps = true;
}