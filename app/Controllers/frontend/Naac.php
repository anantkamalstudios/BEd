<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\NaacDocumentsModel;

class Naac extends BaseController
{
    public function _construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function Index()
    {
        $model = new NaacDocumentsModel();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/naac/naac_documents', $data);
        
    }
}