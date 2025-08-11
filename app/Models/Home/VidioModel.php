<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class VidioModel extends Model
{
    protected $table = 'vidio_section';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'image', 'vidio'];
}