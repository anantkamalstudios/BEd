<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\LibraryNepModel;
use App\Models\Home\InfrastructurePageModel;
use App\Models\Home\LibraryPageModel;
use App\Models\Home\LaboratoryPageModel;
use App\Models\Home\GymnasiumsSportsModel;
use App\Models\Home\TransportsModel;


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
    
    public function library()
    {
        $model = new LibraryPageModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'library')->first();
        
            return view('frontend/facilities/library', $data);
    }
    
    public function laboratary()
    {
        $model = new LaboratoryPageModel();
        $hero = $model->where('section_type', 'hero')->first();
        $desk = $model->where('section_type', 'lab')->first();
        return view('frontend/facilities/laboratary', ['hero' => $hero, 'desk' => $desk]);
    }
    
    public function gymnasium_sport()
    {
         $model = new GymnasiumsSportsModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'overview')->first();

            return view('frontend/facilities/gymnasium_sport', $data);
    }
    
    public function transport()
    {
        $model = new TransportsModel();

            $hero = $model->where('section_type', 'hero')->first();
            $desk = $model->where('section_type', 'lab')->first();

            return view('frontend/facilities/transport', [
                'hero' => $hero,
                'desk' => $desk
            ]);
    }
}