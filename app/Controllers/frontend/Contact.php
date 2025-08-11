<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\ContactUsModel;

class Contact extends BaseController
{
    public function _construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function Index()
    {
        $model = new ContactUsModel();

        $data = [
            'hero'    => $model->where('section_type', 'hero')->first(),
            'contact' => $model->where('section_type', 'contact')->findAll()
        ];
            return view('frontend/contact', $data);
    }
}