<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class TransportsModel extends Model
{
    protected $table = 'transports_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'overview', 'image'];
}