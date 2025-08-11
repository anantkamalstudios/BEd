<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\AboutUsContentModel;
use App\Models\Home\VisionMissionModel;
use App\Models\Home\PresidentDeskModel;
use App\Models\Home\GeneralSecretaryDeskModel;
use App\Models\Home\CampusDirectorDeskModel;
use App\Models\Home\PrincipalDeskModel;
use App\Models\Home\TeachingFacultyModel;
use App\Models\Home\CodeOfConductModel;
use App\Models\Home\BestPracticesModel;
use App\Models\Home\SalientFeaturesModel;
use App\Models\Home\BoardContentModel;
use App\Models\Home\BramhaValleyModel;
use App\Models\Home\Government_permission_model;
use App\Models\Home\Award_received_model;
use App\Models\Home\Approvals_affliation_models;
// Available_teaching_method_model
use App\Models\Home\Available_teaching_method_model;

    class About_Us extends BaseController
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

            return view('admin/about_us/NGSPMS_BVCOE', $data);
        }

        public function OUR_VISION_MISSION()
        {
            $model = new VisionMissionModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['vision_mission'] = $model->where('section_type', 'content')->first();

            return view('admin/about_us/OUR_VISION_MISSION', $data);
        }

        public function PRESIDENT_MESSAGE()
        {
            $model = new PresidentDeskModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/about_us/PRESIDENT_MESSAGE', $data);
        }

        public function GENERAL_SECRETARY_MESSAGE()
        {
            $model = new GeneralSecretaryDeskModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/about_us/GENERAL_SECRETARY_MESSAGE', $data);
        }

        public function CAMPUS_DIRECTOR_MESSAGE()
        {
            $model = new CampusDirectorDeskModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/about_us/CAMPUS_DIRECTOR_MESSAGE', $data);
        }

        public function PRINCIPAL_MESSAGE()
        {
            $model = new PrincipalDeskModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/about_us/PRINCIPAL_MESSAGE', $data);
        }

        public function FACULTIES()
        {
            $model = new TeachingFacultyModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['teaching'] = $model->where('section_type', 'teaching')->findAll();
            $data['nonteaching'] = $model->where('section_type', 'nonteaching')->findAll();

            return view('admin/about_us/FACULTIES', $data);
        }


        public function CODE_OF_CONDUCT()
        {
            $model = new CodeOfConductModel();
            $data['code_list'] = $model->findAll(); 
            return view('admin/about_us/CODE_OF_CONDUCT', $data);
        }

        public function BEST_PRACTICES()
        {
            $model = new BestPracticesModel();
            $data['best_practices'] = $model->findAll();
            return view('admin/about_us/BEST_PRACTICES', $data);
        }
        
        public function silents_features()
        {
            $model = new SalientFeaturesModel();

            $hero = $model->where('section_type', 'hero')->first();
            $desk = $model->where('section_type', 'features')->first();
        
            return view('admin/about_us/silents_features', compact('hero', 'desk'));
        }
        
        public function save_silents_features_hero()
        {
            $model = new SalientFeaturesModel();
        
            // === Handle Hero Section ===
            $hero = $model->where('section_type', 'hero')->first();
            $dataHero = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];
        
            // Handle Image
            $img = $this->request->getFile('hero_image');
            if ($img && $img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move('public/uploads', $newName);
                $dataHero['image'] = $newName;
            }
        
            if ($hero) {
                $model->update($hero['id'], $dataHero);
            } else {
                $model->insert($dataHero);
            }
        
            // === Handle Features Section ===
            $desk = $model->where('section_type', 'features')->first();
            $dataDesk = [
                'section_type' => 'features',
                'overview' => $this->request->getPost('overview')
            ];
        
            if ($desk) {
                $model->update($desk['id'], $dataDesk);
            } else {
                $model->insert($dataDesk);
            }
        
            return redirect()->back()->with('success', 'Page Saved Successfully');
        }

        public function saveNgspms()
        {
            $model = new AboutUsContentModel();

            // Prepare data from POST
            $data = [
                'section_type' => 'hero',
                'hero_title' => $this->request->getPost('hero_title'),
                'hero_subtitle' => $this->request->getPost('button_name'),
            ];

            // Handle image upload if present
            $image = $this->request->getFile('hero_image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/front_end/assets/img', $newName);
                $data['hero_image'] = $newName;
            }

            // Check if a hero section already exists
            $existing = $model->where('section_type', 'hero')->first();

            if ($existing) {
                // Update
                $model->update($existing['id'], $data);
                session()->setFlashdata('success', 'Hero section updated successfully.');
            } else {
                // Insert
                $model->insert($data);
                session()->setFlashdata('success', 'Hero section saved successfully.');
            }

            return redirect()->back();
        }

        public function save_about_ng()
        {
            $model = new AboutUsContentModel();

            $data = [
                'section_type' => 'about',
                'overview'     => $this->request->getPost('overview'),
            ];

            // Handle image upload
            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['about_image'] = $newName;
            }

            // Check if "about" section already exists
            $existing = $model->where('section_type', 'about')->first();

            if ($existing) {
                $model->update($existing['id'], $data);
                session()->setFlashdata('success', 'About section updated successfully.');
            } else {
                $model->insert($data);
                session()->setFlashdata('success', 'About section saved successfully.');
            }

            return redirect()->back();
        }

        public function saveFaculty()
        {
            $model = new AboutUsContentModel();

            $data = [
                'section_type' => 'faculty',
                'name'         => $this->request->getPost('name'),
                'designation'  => $this->request->getPost('designation'),
                'department'   => $this->request->getPost('department'),
            ];

            // Image Upload
            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['faculty_image'] = $newName;
            }

            $model->insert($data);
            session()->setFlashdata('success', 'Faculty member added successfully.');
            return redirect()->back();
        }

        public function updateFaculty($id)
        {
            $model = new AboutUsContentModel();

            $data = [
                'name'        => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'department'  => $this->request->getPost('department'),
            ];

            // Optional image upload
            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['faculty_image'] = $newName;
            }

            $model->update($id, $data);
            session()->setFlashdata('success', 'Faculty member updated successfully.');
            return redirect()->back();
        }

        public function deleteFaculty($id)
        {
            $model = new AboutUsContentModel();
            $model->delete($id);
            session()->setFlashdata('success', 'Faculty member deleted successfully.');
            return redirect()->back();
        }

        public function vision_mission_page()
        {
            $model = new VisionMissionModel();

            // HERO SECTION: one-time insert/update
            $hero = $model->where('section_type', 'hero')->first();
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $newImage = $heroImage->getRandomName();
                $heroImage->move('public/uploads', $newImage);
                $heroData['image'] = $newImage;
            }

            if ($hero) {
                $model->update($hero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }

            // VISION & MISSION SECTION
            $content = $model->where('section_type', 'content')->first();
            $contentData = [
                'section_type' => 'content',
                'vision' => $this->request->getPost('vision'),
                'mission' => $this->request->getPost('mission'),
                'belief' => $this->request->getPost('belief'),
            ];

            if ($content) {
                $model->update($content['id'], $contentData);
            } else {
                $model->insert($contentData);
            }

            session()->setFlashdata('success', 'Vision & Mission page saved successfully.');
            return redirect()->back();
        }

        public function save_president_desk()
        {
            $model = new PresidentDeskModel();

            // Handle Hero Section
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $newName = $heroImage->getRandomName();
                $heroImage->move('public/uploads', $newName);
                $heroData['image'] = $newName;
            }

            $existingHero = $model->where('section_type', 'hero')->first();
            if ($existingHero) {
                $model->update($existingHero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }

            // Handle Desk Section
            $deskData = [
                'section_type' => 'desk',
                'title' => $this->request->getPost('desk_title'),
                'subtitle' => $this->request->getPost('desk_subtitle'),
                'overview' => $this->request->getPost('overview'),
                'name' => $this->request->getPost('principal_desk_name'),
                'designation' => $this->request->getPost('designation'),
                'address' => $this->request->getPost('address'),
                'mobile' => $this->request->getPost('mobile'),
            ];

            $deskImage = $this->request->getFile('image');
            if ($deskImage && $deskImage->isValid() && !$deskImage->hasMoved()) {
                $newName = $deskImage->getRandomName();
                $deskImage->move('public/uploads', $newName);
                $deskData['image'] = $newName;
            }

            $existingDesk = $model->where('section_type', 'desk')->first();
            if ($existingDesk) {
                $model->update($existingDesk['id'], $deskData);
            } else {
                $model->insert($deskData);
            }

            session()->setFlashdata('success', 'President\'s Page saved successfully.');
            return redirect()->back();
        }

        public function save_general_secretary_desk()
        {
            $model = new GeneralSecretaryDeskModel();

            // Hero section
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name')
            ];

            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $newName = $heroImage->getRandomName();
                $heroImage->move('public/uploads', $newName);
                $heroData['image'] = $newName;
            }

            $existingHero = $model->where('section_type', 'hero')->first();
            if ($existingHero) {
                $model->update($existingHero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }

            // Desk section
            $deskData = [
                'section_type' => 'desk',
                'title' => $this->request->getPost('desk_title'),
                'subtitle' => $this->request->getPost('desk_subtitle'),
                'overview' => $this->request->getPost('overview'),
                'name' => $this->request->getPost('general_desk_name'),
                'designation' => $this->request->getPost('designation'),
                'address' => $this->request->getPost('address'),
                'mobile' => $this->request->getPost('mobile')
            ];

            $deskImage = $this->request->getFile('image');
            if ($deskImage && $deskImage->isValid() && !$deskImage->hasMoved()) {
                $newName = $deskImage->getRandomName();
                $deskImage->move('public/uploads', $newName);
                $deskData['image'] = $newName;
            }

            $existingDesk = $model->where('section_type', 'desk')->first();
            if ($existingDesk) {
                $model->update($existingDesk['id'], $deskData);
            } else {
                $model->insert($deskData);
            }

            session()->setFlashdata('success', 'General Secretary\'s Message Page saved successfully.');
            return redirect()->back();
        }

        public function save_campus_director()
        {
            $model = new CampusDirectorDeskModel();

            // Hero Section
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $newName = $heroImage->getRandomName();
                $heroImage->move('public/uploads', $newName);
                $heroData['image'] = $newName;
            }

            $existingHero = $model->where('section_type', 'hero')->first();
            if ($existingHero) {
                $model->update($existingHero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }

            // Desk Section
            $deskData = [
                'section_type' => 'desk',
                'title' => $this->request->getPost('desk_title'),
                'subtitle' => $this->request->getPost('desk_subtitle'),
                'overview' => $this->request->getPost('overview'),
                'name' => $this->request->getPost('campus_director_desk_name'),
                'designation' => $this->request->getPost('designation'),
                'address' => $this->request->getPost('address'),
                'mobile' => $this->request->getPost('mobile'),
            ];

            $deskImage = $this->request->getFile('image');
            if ($deskImage && $deskImage->isValid() && !$deskImage->hasMoved()) {
                $newName = $deskImage->getRandomName();
                $deskImage->move('public/uploads', $newName);
                $deskData['image'] = $newName;
            }

            $existingDesk = $model->where('section_type', 'desk')->first();
            if ($existingDesk) {
                $model->update($existingDesk['id'], $deskData);
            } else {
                $model->insert($deskData);
            }

            session()->setFlashdata('success', 'Campus Director\'s Message Page saved successfully.');
            return redirect()->back();
        }

        public function save_principal_desk()
        {
            $model = new PrincipalDeskModel();

            // === Hero Section ===
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $newName = $heroImage->getRandomName();
                $heroImage->move('public/uploads', $newName);
                $heroData['image'] = $newName;
            }

            $existingHero = $model->where('section_type', 'hero')->first();
            if ($existingHero) {
                $model->update($existingHero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }

            // === Desk Section ===
            $deskData = [
                'section_type' => 'desk',
                'title' => $this->request->getPost('desk_title'),
                'subtitle' => $this->request->getPost('desk_subtitle'),
                'overview' => $this->request->getPost('overview'),
                'name' => $this->request->getPost('principal_desk_name'),
                'designation' => $this->request->getPost('designation'),
                'address' => $this->request->getPost('address'),
                'mobile' => $this->request->getPost('mobile'),
            ];

            $deskImage = $this->request->getFile('image');
            if ($deskImage && $deskImage->isValid() && !$deskImage->hasMoved()) {
                $newName = $deskImage->getRandomName();
                $deskImage->move('public/uploads', $newName);
                $deskData['image'] = $newName;
            }

            $existingDesk = $model->where('section_type', 'desk')->first();
            if ($existingDesk) {
                $model->update($existingDesk['id'], $deskData);
            } else {
                $model->insert($deskData);
            }

            session()->setFlashdata('success', 'Principal\'s Desk page saved successfully.');
            return redirect()->back();
        }

        public function save_hero_desk()
        {
            $model = new TeachingFacultyModel();

            $data = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $image = $this->request->getFile('hero_image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('public/uploads', $imageName);
                $data['image'] = $imageName;
            }

            $existing = $model->where('section_type', 'hero')->first();
            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero Section Saved');
        }

        public function save_teaching_faculty()
        {
            $model = new TeachingFacultyModel();

            $data = [
                'section_type' => 'teaching',
                'designation' => $this->request->getPost('designation'),
                'name' => $this->request->getPost('name'),
                'qualification' => $this->request->getPost('qualification')
            ];

            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('public/uploads', $imageName);
                $data['image'] = $imageName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Teaching Faculty Added');
        }

        public function save_non_teaching_faculty()
        {
            $model = new TeachingFacultyModel();

            $data = [
                'section_type' => 'nonteaching',
                'designation' => $this->request->getPost('designation'),
                'name' => $this->request->getPost('name'),
                'qualification' => $this->request->getPost('qualification')
            ];

            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('public/uploads', $imageName);
                $data['image'] = $imageName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Non-Teaching Faculty Added');
        }

        public function update_teaching_faculty()
        {
            $model = new TeachingFacultyModel();
            $id = $this->request->getPost('id');

            $data = [
                'designation' => $this->request->getPost('designation'),
                'name' => $this->request->getPost('name'),
                'qualification' => $this->request->getPost('qualification'),
            ];

            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('public/uploads', $imageName);
                $data['image'] = $imageName;
            }

            $model->update($id, $data);

            return redirect()->back()->with('success', 'Teaching Faculty Updated Successfully');
        }

        public function delete_faculty($id)
        {
            $model = new TeachingFacultyModel();
            $model->delete($id);
            return redirect()->back()->with('success', 'Faculty Deleted');
        }

        public function update_non_teaching_faculty()
        {
            $model = new TeachingFacultyModel();
            $id = $this->request->getPost('id');

            $data = [
                'designation' => $this->request->getPost('designation'),
                'name' => $this->request->getPost('name'),
                'qualification' => $this->request->getPost('qualification'),
            ];

            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('public/uploads', $imageName);
                $data['image'] = $imageName;
            }

            $model->update($id, $data);

            return redirect()->back()->with('success', 'Non-Teaching Faculty Updated Successfully');
        }

        public function delete_non_faculty($id)
        {
            $model = new TeachingFacultyModel();
            $model->delete($id);
            return redirect()->back()->with('success', 'Faculty Deleted');
        }

        public function insert_coc()
        {
            $model = new CodeOfConductModel();

            $pdf = $this->request->getFile('PDF');

            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads/', $newName);

                $model->insert(['file_name' => $newName]);

                return redirect()->back()->with('success', 'PDF uploaded successfully.');
            }

            return redirect()->back()->with('error', 'PDF upload failed.');
        }

        public function update_coc($id)
        {
            $model = new CodeOfConductModel();
            $record = $model->find($id);

            if (!$record) {
                return redirect()->back()->with('error', 'Record not found.');
            }

            $pdf = $this->request->getFile('PDF');

            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads/', $newName);

                // delete old file
                if (!empty($record['file_name'])) {
                    @unlink('public/uploads/' . $record['file_name']);
                }

                $model->update($id, ['file_name' => $newName]);

                return redirect()->back()->with('success', 'PDF updated successfully.');
            }

            return redirect()->back()->with('error', 'PDF update failed.');
        }

        public function delete_coc($id)
        {
            $model = new CodeOfConductModel();
            $record = $model->find($id);

            if (!$record) {
                return redirect()->back()->with('error', 'Record not found.');
            }

            // Delete PDF file from uploads
            $filePath = 'public/uploads/' . $record['file_name'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // Delete record from database
            $model->delete($id);

            return redirect()->back()->with('success', 'PDF deleted successfully.');
        }

        public function save_best()
        {
            $model = new BestPracticesModel();
            $id = $this->request->getPost('id');

            $file = $this->request->getFile('PDF');
            $fileName = '';

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getRandomName();
                $file->move('public/uploads', $fileName);
            }

            $data = [];
            if (!empty($fileName)) {
                $data['file_name'] = $fileName;
            }

            if ($id) {
                // Update
                $model->update($id, $data);
                session()->setFlashdata('success', 'Updated successfully.');
            } else {
                // Insert
                if (!empty($data)) {
                    $model->insert($data);
                    session()->setFlashdata('success', 'Added successfully.');
                }
            }

            return redirect()->back();
        }

        // Delete
        public function delete_best($id)
        {
            $model = new BestPracticesModel();
            $record = $model->find($id);
            if ($record) {
                @unlink('public/uploads/' . $record['file_name']);
                $model->delete($id);
                session()->setFlashdata('success', 'Deleted successfully.');
            }
            return redirect()->back();
        }
        
        public function board_of_director()
        {
            $model = new BoardContentModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
        
            return view('admin/about_us/board_of_director', $data);
        }
        
        public function bramha_valley_bed_college()
        {
            $model = new BramhaValleyModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/about_us/bramha_valley_bed_college', $data);
        }
        
        public function save_photo_board_of_member()
        {
            $model = new BoardContentModel();
            $image = $this->request->getFile('image');
        
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('title'),
                'subtitle' => $this->request->getPost('subtitle'),
            ];
        
            if ($image && $image->isValid()) {
                $newName = $image->getRandomName();
                $image->move('uploads/board/', $newName);
                $heroData['image'] = $newName;
            }
        
            $existing = $model->where('section_type', 'hero')->first();
        
            if ($existing) {
                $model->update($existing['id'], $heroData);
            } else {
                $model->save($heroData);
            }
        
            return redirect()->back()->with('success', 'Hero section saved successfully!');
        }
        
        // Insert new board member
        public function insert_board_members()
        {
            $model = new BoardContentModel();
            $image = $this->request->getFile('image');
        
            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];
        
            if ($image && $image->isValid()) {
                $newName = $image->getRandomName();
                $image->move('uploads/board/', $newName);
                $data['image'] = $newName;
            }
        
            $model->save($data);
            return redirect()->back()->with('success', 'Member added!');
        }
        
        // Update board member
        public function update_board_members($id)
        {
            $model = new BoardContentModel();
            $image = $this->request->getFile('image');
        
            $data = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];
        
            if ($image && $image->isValid()) {
                $newName = $image->getRandomName();
                $image->move('uploads/board/', $newName);
                $data['image'] = $newName;
            }
        
            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated!');
        }
        
        public function delete_board_member($id)
        {
            $model = new BoardContentModel();
        
            if ($model->delete($id)) {
                return redirect()->back()->with('success', 'Board member deleted successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to delete the member.');
            }
        }
        
        public function save_bramha_valley_college()
        {
            $model = new BramhaValleyModel();
        
            // --- Hero Section ---
            $hero = $model->where('section_type', 'hero')->first();
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name')
            ];
        
            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $newName = $heroImage->getRandomName();
                $heroImage->move('public/uploads', $newName);
                $heroData['image'] = $newName;
            }
        
            if ($hero) {
                $model->update($hero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }
        
            // --- Overview Section ---
            $desk = $model->where('section_type', 'desk')->first();
            $deskData = [
                'section_type' => 'desk',
                'overview' => $this->request->getPost('overview'),
            ];
        
            if ($desk) {
                $model->update($desk['id'], $deskData);
            } else {
                $model->insert($deskData);
            }
        
            return redirect()->back()->with('success', 'Content saved successfully!');
        }





        //ncte 


        //  public function save_hero_desk()
        // {
        //     $model = new TeachingFacultyModel();

        //     $data = [
        //         'section_type' => 'hero',
        //         'title' => $this->request->getPost('hero_title'),
        //         'subtitle' => $this->request->getPost('button_name'),
        //     ];

        //     $image = $this->request->getFile('hero_image');
        //     if ($image && $image->isValid() && !$image->hasMoved()) {
        //         $imageName = $image->getRandomName();
        //         $image->move('public/uploads', $imageName);
        //         $data['image'] = $imageName;
        //     }

        //     $existing = $model->where('section_type', 'hero')->first();
        //     if ($existing) {
        //         $model->update($existing['id'], $data);
        //     } else {
        //         $model->insert($data);
        //     }

        //     return redirect()->back()->with('success', 'Hero Section Saved');
        // }

        // public function save_teaching_faculty()
        // {
        //     $model = new TeachingFacultyModel();

        //     $data = [
        //         'section_type' => 'teaching',
        //         'designation' => $this->request->getPost('designation'),
        //         'name' => $this->request->getPost('name'),
        //         'qualification' => $this->request->getPost('qualification')
        //     ];

        //     $image = $this->request->getFile('image');
        //     if ($image && $image->isValid() && !$image->hasMoved()) {
        //         $imageName = $image->getRandomName();
        //         $image->move('public/uploads', $imageName);
        //         $data['image'] = $imageName;
        //     }

        //     $model->insert($data);
        //     return redirect()->back()->with('success', 'Teaching Faculty Added');
        // }

        // public function save_non_teaching_faculty()
        // {
        //     $model = new TeachingFacultyModel();

        //     $data = [
        //         'section_type' => 'nonteaching',
        //         'designation' => $this->request->getPost('designation'),
        //         'name' => $this->request->getPost('name'),
        //         'qualification' => $this->request->getPost('qualification')
        //     ];

        //     $image = $this->request->getFile('image');
        //     if ($image && $image->isValid() && !$image->hasMoved()) {
        //         $imageName = $image->getRandomName();
        //         $image->move('public/uploads', $imageName);
        //         $data['image'] = $imageName;
        //     }

        //     $model->insert($data);
        //     return redirect()->back()->with('success', 'Non-Teaching Faculty Added');
        // }

        // public function update_teaching_faculty()
        // {
        //     $model = new TeachingFacultyModel();
        //     $id = $this->request->getPost('id');

        //     $data = [
        //         'designation' => $this->request->getPost('designation'),
        //         'name' => $this->request->getPost('name'),
        //         'qualification' => $this->request->getPost('qualification'),
        //     ];

        //     $image = $this->request->getFile('image');
        //     if ($image && $image->isValid() && !$image->hasMoved()) {
        //         $imageName = $image->getRandomName();
        //         $image->move('public/uploads', $imageName);
        //         $data['image'] = $imageName;
        //     }

        //     $model->update($id, $data);

        //     return redirect()->back()->with('success', 'Teaching Faculty Updated Successfully');
        // }

        // public function delete_faculty($id)
        // {
        //     $model = new TeachingFacultyModel();
        //     $model->delete($id);
        //     return redirect()->back()->with('success', 'Faculty Deleted');
        // }

        // public function update_non_teaching_faculty()
        // {
        //     $model = new TeachingFacultyModel();
        //     $id = $this->request->getPost('id');

        //     $data = [
        //         'designation' => $this->request->getPost('designation'),
        //         'name' => $this->request->getPost('name'),
        //         'qualification' => $this->request->getPost('qualification'),
        //     ];

        //     $image = $this->request->getFile('image');
        //     if ($image && $image->isValid() && !$image->hasMoved()) {
        //         $imageName = $image->getRandomName();
        //         $image->move('public/uploads', $imageName);
        //         $data['image'] = $imageName;
        //     }

        //     $model->update($id, $data);

        //     return redirect()->back()->with('success', 'Non-Teaching Faculty Updated Successfully');
        // }

        // public function delete_non_faculty($id)
        // {
        //     $model = new TeachingFacultyModel();
        //     $model->delete($id);
        //     return redirect()->back()->with('success', 'Faculty Deleted');
        // }


        public function Ncte_recognation()
        {
            $model = new TeachingFacultyModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['teaching'] = $model->where('section_type', 'teaching')->findAll();
            $data['nonteaching'] = $model->where('section_type', 'nonteaching')->findAll();

            return view('admin/about_us/Ncte_recognization', $data);
        }

        public function Government_permission()
        {
            $model = new Government_permission_model();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/about_us/government_permission', $data);

        }

         public function save_governmentpermission()
        {
            $model = new Government_permission_model();

            // === Hero Section ===
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $newName = $heroImage->getRandomName();
                $heroImage->move('public/uploads', $newName);
                $heroData['image'] = $newName;
            }

            $existingHero = $model->where('section_type', 'hero')->first();
            if ($existingHero) {
                $model->update($existingHero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }

            // === Desk Section ===
            $deskData = [
                'section_type' => 'desk',
                'title' => $this->request->getPost('desk_title'),
                'subtitle' => $this->request->getPost('desk_subtitle'),
                'overview' => $this->request->getPost('overview'),
                'name' => $this->request->getPost('principal_desk_name'),
                'designation' => $this->request->getPost('designation'),
                'address' => $this->request->getPost('address'),
                'mobile' => $this->request->getPost('mobile'),
            ];

            $deskImage = $this->request->getFile('image');
            if ($deskImage && $deskImage->isValid() && !$deskImage->hasMoved()) {
                $newName = $deskImage->getRandomName();
                $deskImage->move('public/uploads', $newName);
                $deskData['image'] = $newName;
            }

            $existingDesk = $model->where('section_type', 'desk')->first();
            if ($existingDesk) {
                $model->update($existingDesk['id'], $deskData);
            } else {
                $model->insert($deskData);
            }

            session()->setFlashdata('success', 'Principal\'s Desk page saved successfully.');
            return redirect()->back();
        }


          public function Award_recive()
        {
            $model = new Award_received_model();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/about_us/Award_received', $data);

        }

        //  public function save_award()
        // {
        //     $model = new Award_received_model();

            
        //     $heroData = [
        //         'section_type' => 'hero',
        //         'title' => $this->request->getPost('hero_title'),
        //         'subtitle' => $this->request->getPost('button_name'),
        //     ];

        //     $heroImage = $this->request->getFile('hero_image');
        //     if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
        //         $newName = $heroImage->getRandomName();
        //         $heroImage->move('public/uploads', $newName);
        //         $heroData['image'] = $newName;
        //     }

        //     $existingHero = $model->where('section_type', 'hero')->first();
        //     if ($existingHero) {
        //         $model->update($existingHero['id'], $heroData);
        //     } else {
        //         $model->insert($heroData);
        //     }


        //     $deskData = [
        //         'section_type' => 'desk',
        //         'title' => $this->request->getPost('desk_title'),
        //         'subtitle' => $this->request->getPost('desk_subtitle'),

        //         'designation' => $this->request->getPost('designation'),
        
        //     ];



        //     $existingDesk = $model->where('section_type', 'desk')->first();
        //     if ($existingDesk) {
        //         $model->update($existingDesk['id'], $deskData);
        //     } else {
        //         $model->insert($deskData);
        //     }

        //     session()->setFlashdata('success', 'Principal\'s Desk page saved successfully.');
        //     return redirect()->back();
        // }


        public function approvals_affliation()
        {
            $model = new Approvals_affliation_models();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/about_us/approvals_affliation', $data);

        }

         public function save_approvals_affliation()
        {
            $model = new Approvals_affliation_models();

            // === Hero Section ===
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $newName = $heroImage->getRandomName();
                $heroImage->move('public/uploads', $newName);
                $heroData['image'] = $newName;
            }

            $existingHero = $model->where('section_type', 'hero')->first();
            if ($existingHero) {
                $model->update($existingHero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }

            // === Desk Section ===
            $deskData = [
                'section_type' => 'desk',
                'title' => $this->request->getPost('desk_title'),
                'subtitle' => $this->request->getPost('desk_subtitle'),
                'overview' => $this->request->getPost('overview'),
                'name' => $this->request->getPost('principal_desk_name'),
                'designation' => $this->request->getPost('designation'),
                'address' => $this->request->getPost('address'),
                'mobile' => $this->request->getPost('mobile'),
            ];

            $deskImage = $this->request->getFile('image');
            if ($deskImage && $deskImage->isValid() && !$deskImage->hasMoved()) {
                $newName = $deskImage->getRandomName();
                $deskImage->move('public/uploads', $newName);
                $deskData['image'] = $newName;
            }

            $existingDesk = $model->where('section_type', 'desk')->first();
            if ($existingDesk) {
                $model->update($existingDesk['id'], $deskData);
            } else {
                $model->insert($deskData);
            }

            session()->setFlashdata('success', 'Principal\'s Desk page saved successfully.');
            return redirect()->back();
        }



        public function Available_teaching_method()
        {
            $model = new Available_teaching_method_model();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['teaching'] = $model->where('section_type', 'teaching')->findAll();
            $data['nonteaching'] = $model->where('section_type', 'nonteaching')->findAll();

            return view('admin/about_us/available_teaching_method', $data);
        }


         public function save_teaching_method()
        {
            $model = new Available_teaching_method_model();

            $data = [
                'section_type' => 'teaching',
                'designation' => $this->request->getPost('designation'),
                // 'name' => $this->request->getPost('name'),
                // 'qualification' => $this->request->getPost('qualification')
            ];

            // $image = $this->request->getFile('image');
            // if ($image && $image->isValid() && !$image->hasMoved()) {
            //     $imageName = $image->getRandomName();
            //     $image->move('public/uploads', $imageName);
            //     $data['image'] = $imageName;
            // }

            $model->insert($data);
            return redirect()->back()->with('success', 'Teaching Faculty Added');
        }


        public function update_teaching_method()
        {
            $model = new Available_teaching_method_model();
            $id = $this->request->getPost('id');

            $data = [
                'designation' => $this->request->getPost('designation'),
                // 'name' => $this->request->getPost('name'),
                // 'qualification' => $this->request->getPost('qualification'),
            ];

            // $image = $this->request->getFile('image');
            // if ($image && $image->isValid() && !$image->hasMoved()) {
            //     $imageName = $image->getRandomName();
            //     $image->move('public/uploads', $imageName);
            //     $data['image'] = $imageName;
            // }

            $model->update($id, $data);

            return redirect()->back()->with('success', 'Teaching Faculty Updated Successfully');
        }

        public function delete_teaching_method($id)
        {
            $model = new Available_teaching_method_model();
            $model->delete($id);
            return redirect()->back()->with('success', 'Faculty Deleted');
        }


         public function award_recived()
        {
            $model = new Award_received_model();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['teaching'] = $model->where('section_type', 'teaching')->findAll();
            $data['nonteaching'] = $model->where('section_type', 'nonteaching')->findAll();

            return view('admin/about_us/award_received', $data);
        }


         public function save_award()
        {
            $model = new Award_received_model();

            $data = [
                'section_type' => 'teaching',
                'designation' => $this->request->getPost('designation'),
                'name' => $this->request->getPost('name'),
                // 'qualification' => $this->request->getPost('qualification')
            ];

            // $image = $this->request->getFile('image');
            // if ($image && $image->isValid() && !$image->hasMoved()) {
            //     $imageName = $image->getRandomName();
            //     $image->move('public/uploads', $imageName);
            //     $data['image'] = $imageName;
            // }

            $model->insert($data);
            return redirect()->back()->with('success', 'Award Added');
        }


        public function update_award()
        {
            $model = new Award_received_model();
            $id = $this->request->getPost('id');

            $data = [
                'designation' => $this->request->getPost('designation'),
                'name' => $this->request->getPost('name'),
                // 'qualification' => $this->request->getPost('qualification'),
            ];

            // $image = $this->request->getFile('image');
            // if ($image && $image->isValid() && !$image->hasMoved()) {
            //     $imageName = $image->getRandomName();
            //     $image->move('public/uploads', $imageName);
            //     $data['image'] = $imageName;
            // }

            $model->update($id, $data);

            return redirect()->back()->with('success', 'Teaching Faculty Updated Successfully');
        }

        public function delete_award($id)
        {
            $model = new Award_received_model();
            $model->delete($id);
            return redirect()->back()->with('success', 'Faculty Deleted');
        }


        












    }