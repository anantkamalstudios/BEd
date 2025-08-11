<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\AboutUsContentModel;
use App\Models\Home\VisionMissionModel;
use App\Models\Home\PresidentDeskModel;
use App\Models\Home\GeneralSecretaryDeskModel;
use App\Models\Home\CampusDirectorDeskModel;
use App\Models\Home\PrincipalDeskModel;
use App\Models\Home\TeachingFacultyModel;
use App\Models\Home\SalientFeaturesModel;
use App\Models\Home\BramhaValleyModel;
use App\Models\Home\BoardContentModel;
use App\Models\Home\Government_permission_model;
use App\Models\Home\Award_received_model;


class About_us extends BaseController
{
    public function _construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function Index()
    {
        $model = new AboutUsContentModel();
        $hero = $model->where('section_type', 'hero')->first();
        $data['hero_board_member'] = $hero ?? [];
        $data['about'] = $model->where('section_type', 'about')->first() ?? [];
        $data['faculty_members'] = $model->where('section_type', 'faculty')->findAll();
        return view('frontend/about_us/NGSPMS_BVCOE', $data);
    }

    public function vision_mission()
    {
         $model = new VisionMissionModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['vision_mission'] = $model->where('section_type', 'content')->first();
       
        return view('frontend/about_us/vision_mission', $data);
    }

    public function president()
    {
        $model = new PresidentDeskModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['desk'] = $model->where('section_type', 'desk')->first();

        return view('frontend/about_us/president', $data);
        
    }

    public function general_secretary()
    {
        $model = new GeneralSecretaryDeskModel();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['desk'] = $model->where('section_type', 'desk')->first();

        return view('frontend/about_us/general_secretary', $data); 
    }

    public function campus_director()
    {
        $model = new CampusDirectorDeskModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['desk'] = $model->where('section_type', 'desk')->first();

        return view('frontend/about_us/campus_director', $data);
    }

    public function principal()
    {
        $model = new PrincipalDeskModel();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['desk'] = $model->where('section_type', 'desk')->first();

        return view('frontend/about_us/principal', $data);

    }

    public function faculty()
    {
        $model = new TeachingFacultyModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['teaching'] = $model->where('section_type', 'teaching')->findAll();
        $data['nonteaching'] = $model->where('section_type', 'nonteaching')->findAll();

        return view('frontend/about_us/faculty', $data);
    
    }
    
    public function board_director()
    {
        $model = new BoardContentModel();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
    
        return view('frontend/about_us/board_director', $data);
    }
    
    public function ncte_recognition_revise_order()
    {
        return view('frontend/about_us/ncte_recognition_revise_order');
    }
    
    public function silent_feature()
    {
        
        $model = new SalientFeaturesModel();

        $hero = $model->where('section_type', 'hero')->first();
        $desk = $model->where('section_type', 'features')->first();
    
        return view('frontend/about_us/silent_feature', compact('hero', 'desk'));
    }
    
    public function bramha_valley_edu()
    {
        $model = new BramhaValleyModel();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['desk'] = $model->where('section_type', 'desk')->first();

        return view('frontend/about_us/bramha_valley_edu', $data);
    }
    
    // public function government_permission()
    // {
    //     $model = new Government_permission_model();
    //     $hero = $model->where('section_type', 'hero')->first();
    //     $desk = $model->where('section_type', 'features')->first();
    //     return view('frontend/about_us/government_permission',compact('hero', 'desk'));
    // }

        public function government_permission()
    {
        $model = new Government_permission_model();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['desk'] = $model->where('section_type', 'desk')->first();

        return view('frontend/about_us/government_permission', $data);

    }

    
    public function award_received()
    {
        // return view('frontend/about_us/award_received');
        $model = new Award_received_model();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['teaching'] = $model->where('section_type', 'teaching')->findAll();
        // $data['nonteaching'] = $model->where('section_type', 'nonteaching')->findAll();
        return view('frontend/about_us/award_received',$data);
    }
    
     public function approvals_affliation()
    {
        return view('frontend/about_us/approvals_affliation');
    }


}


