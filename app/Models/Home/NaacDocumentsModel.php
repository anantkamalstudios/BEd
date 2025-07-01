<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class NaacDocumentsModel extends Model
{
    protected $table = 'naac_documents';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'image', 'pdf'];
}