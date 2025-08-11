<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\RequiredDocumentsModel;
use App\Models\Home\Available_teaching_method_model;

class Academics extends BaseController
{
    public function _construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function Index()
    {
        $model = new Available_teaching_method_model();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['teaching'] = $model->where('section_type', 'teaching')->findAll();
        // $data['nonteaching'] = $model->where('section_type', 'nonteaching')->findAll();
        return view('frontend/academic/available_teaching_method',$data);
    }


    //     public function Available_methods()
    // {


    //     return view('frontend/about_us/faculty', $data);
    
    // }


}


