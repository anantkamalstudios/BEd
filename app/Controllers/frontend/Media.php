<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\PhotoGalleryModel;

class Media extends BaseController
{
    public function _construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function Index()
    {
        $model = new PhotoGalleryModel();
        $hero = $model->where('section_type', 'hero')->first();
        $images = $model->where('section_type', 'image')->findAll();

        return view('frontend/media/photo', compact('hero', 'images'));
    }

     public function vidio()
    {
        return view('frontend/media/vidio');
    }

}


