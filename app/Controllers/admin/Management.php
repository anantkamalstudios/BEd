<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\President_msg_model;
use App\Models\Home\General_secretary_model;
use App\Models\Home\Voice_president_desk_model;
use App\Models\Home\Board_of_director_model;
// use App\Models\Home\PresidentDeskModel;
// use App\Models\Home\GeneralSecretaryDeskModel;
// use App\Models\Home\CampusDirectorDeskModel;
// use App\Models\Home\PrincipalDeskModel;
// use App\Models\Home\TeachingFacultyModel;
// use App\Models\Home\CodeOfConductModel;
// use App\Models\Home\BestPracticesModel;
// use App\Models\Home\SalientFeaturesModel;
// use App\Models\Home\BoardContentModel;
// use App\Models\Home\BramhaValleyModel;

    class Management extends BaseController
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

            return view('admin/management/president_msg', $data);
        }

        public function President_msg()
        {
            $model = new President_msg_model();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/management/president_msg', $data);
        }

        public function Save_president()
        {
            $model = new President_msg_model();

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

            session()->setFlashdata('success', 'President page saved successfully.');
            return redirect()->back();
        }


        // general secretary


        public function General_secretary()
        {
            $model = new General_secretary_model();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/management/general_secretary_msg', $data);
        }

        public function save_general_secretary()
        {
            $model = new General_secretary_model();

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

            session()->setFlashdata('success', 'President page saved successfully.');
            return redirect()->back();
        }


        //voice president msg


        public function voice_president_desk()
        {
            $model = new Voice_president_desk_model();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'desk')->first();

            return view('admin/management/voice_president_desk', $data);
        }

        public function save_voice_president_desk()
        {
            $model = new Voice_president_desk_model();

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

            session()->setFlashdata('success', 'President page saved successfully.');
            return redirect()->back();
        }

        public function board_of_director()
        {
            $model = new Board_of_director_model();
            $data['items'] = $model->findAll();
            return view('admin/management/board_of_director', $data);
        }


    public function save_board_of_director()
    {
        $model = new Board_of_director_model();
        $img = $this->request->getFile('image');
        $imgName = null;

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $imgName = $img->getRandomName();
            $img->move('front_end/assets/img', $imgName);
        }

        $model->insert([
            'title'    => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'image'    => $imgName,
        ]);

        return redirect()->back()->with('success', 'Infrastructure item added.');
    }

    public function update_board_of_director($id)
    {
        $model = new Board_of_director_model();
        $item  = $model->find($id);

        if (! $item) {
            return redirect()->back()->with('errors', ['Item not found.']);
        }

        $img     = $this->request->getFile('image');
        $imgName = $item['image'];

        if ($img && $img->isValid() && !$img->hasMoved()) {
            // delete old file
            if (! empty($imgName) && file_exists(FCPATH . 'front_end/assets/img/' . $imgName)) {
                unlink(FCPATH . 'front_end/assets/img/' . $imgName);
            }
            $imgName = $img->getRandomName();
            $img->move('front_end/assets/img', $imgName);
        }

        $model->update($id, [
            'title'    => $this->request->getPost('title'),
            'subtitle' => $this->request->getPost('subtitle'),
            'image'    => $imgName,
        ]);

        return redirect()->back()->with('success', 'Infrastructure item updated.');
    }

    public function delete_board_of_director($id)
    {
        $model = new Board_of_director_model();
        $item  = $model->find($id);

        if ($item && ! empty($item['image'])) {
            $path = FCPATH . 'front_end/assets/img/' . $item['image'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $model->delete($id);
        return redirect()->back()->with('success', 'Infrastructure item deleted.');
    }



       
















    }