<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\HeroModel;
use App\Models\Home\AdmissionModel;
use App\Models\Home\AboutUsModel;
use App\Models\Home\WhyJoinBvceModel;
use App\Models\Home\InfrastructureModel;
use App\Models\Home\FaqTestimonialModel;
use App\Models\Home\GalleryModel;

class Index extends BaseController
{
    public function _construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function index()
    {
        $heroModel = new HeroModel(); 
        $data['carouselData'] = $heroModel->findAll();

        $admissionModel = new AdmissionModel(); 
        $data['aboutsection'] = $admissionModel->first();

        $aboutModel = new AboutUsModel();
        $data['about'] = $aboutModel->first();

        $model = new WhyJoinBvceModel();
        $data['accordionData'] = $model->where('section_type','content')->findAll(); 
        $data['image'] = $model->where('section_type', 'image')->first();

        $model = new InfrastructureModel();
        $data['infrastructure'] = $model->findAll();

        $model = new FaqTestimonialModel();
        $data['faqs'] = $model->where('section_type', 'faq')->findAll();
        $data['testimonials'] = $model->where('section_type', 'testimonial')->findAll(); 

        $model = new GalleryModel();
        $data['gallery'] = $model->findAll();
    
        return view('frontend/index', $data);
    }




}


