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

}


