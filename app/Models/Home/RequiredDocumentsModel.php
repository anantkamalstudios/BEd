<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class RequiredDocumentsModel extends Model
{
    protected $table = 'required_documents_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'image', 'name'];
}