<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\RequiredDocumentsModel;

class Admission extends BaseController
{
    public function _construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function Index()
    {
         $model = new RequiredDocumentsModel();
        $hero = $model->where('section_type', 'hero')->first();
        $documents = $model->where('section_type', 'document')->findAll();
    
        $editDoc = null;
        if ($this->request->getGet('edit_id')) {
            $editId = $this->request->getGet('edit_id');
            $editDoc = $model->find($editId);
        }
    
        return view('frontend/admission/required_document', [
            'hero' => $hero,
            'documents' => $documents,
            'editDoc' => $editDoc
        ]);
    }





}


