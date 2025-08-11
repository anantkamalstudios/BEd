<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class InfrastructureModel extends Model
{
    protected $table = 'infrastructure';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'subtitle', 'image'];
    protected $useTimestamps = true;
}