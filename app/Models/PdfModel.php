<?php

namespace App\Models;

use CodeIgniter\Model;

class PdfModel extends Model
{
    protected $table = 'pdf_files';
    protected $primaryKey = 'id';
    protected $allowedFields = ['brochure', 'syllabus'];
}
