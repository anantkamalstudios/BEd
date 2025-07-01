<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\LibraryNepModel;
use App\Models\Home\InfrastructurePageModel;


class Facilities extends BaseController
{
    public function _construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function Index()
    {
        $model = new LibraryNepModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/facilities/library_nep', $data);
    }

    public function infrastructure()
    {
        $model = new InfrastructurePageModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['gallery'] = $model->where('section_type', 'gallery')->findAll();

            return view('frontend/facilities/infrastructure', $data);
    }
}