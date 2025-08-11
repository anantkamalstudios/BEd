<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class InfrastructurePageModel extends Model
{
    protected $table = 'infrastructure_page';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'name', 'image'];
}