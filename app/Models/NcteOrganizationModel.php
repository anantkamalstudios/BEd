<?php

namespace App\Models;

use CodeIgniter\Model;

class NcteOrganizationModel extends Model
{
    protected $table = 'ncte_organization';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'hero_title',
        'button_name',
        'hero_image',
        'pdf_file'
    ];
}
