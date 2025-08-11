<?php

namespace App\Controllers\Frontend;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\IqacModel;
use App\Models\Home\RtiModel;
use App\Models\Home\EqualOpportunityModel;
use App\Models\Home\StudentDevelopmentModel;
use App\Models\Home\GrievanceModel;
use App\Models\Home\DivyangCellModel;
use App\Models\Home\WomenCellModel;
use App\Models\Home\GrievanceCellModel;
use App\Models\Home\PlacementCellModel;
use App\Models\Home\StudentCouncilModel;
use App\Models\Home\AntiRaggingModel;

class Governance extends BaseController
{
    public function _construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }

    public function Index()
    {
         $model = new IqacModel();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        return view('frontend/governance/internal_quality', $data);
    }

    public function rti()
    {
         $model = new RtiModel();

        $data['hero']    = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        $data['pdfs']    = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/governance/rti', $data);
    }

    public function equal_cell()
    {
        $model = new EqualOpportunityModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/governance/equal_cell', $data);
    }

    public function stu_dev_com()
    {
        $model = new StudentDevelopmentModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/governance/stu_dev_com', $data);
    }

    public function grievance_redressal()
    {
        $model = new GrievanceModel();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/governance/grievance_redressal', $data);
        
    }

    public function divyang_cell()
    {
        $model = new DivyangCellModel();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/governance/divyang_cell', $data);
    }

    public function womens_cell()
    {
        $model = new WomenCellModel();
        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/governance/womens_cell', $data);
        return view('frontend/governance/womens_cell');
    }

    public function sc_st_cell()
    {
        $model = new GrievanceCellModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/governance/sc_st_cell', $data);
    }

    public function placement_cell()
    {
        
        $model = new PlacementCellModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/governance/placement_cell', $data);
        
    }

    public function student_council()
    {
        $model = new StudentCouncilModel();

        $data['hero'] = $model->where('section_type', 'hero')->first();
        $data['members'] = $model->where('section_type', 'member')->findAll();
        $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

        return view('frontend/governance/student_council', $data);
    }

    public function anti_ragging()
    {
         $model = new AntiRaggingModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('frontend/governance/anti_ragging', $data);
    }
}