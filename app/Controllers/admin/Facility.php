<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\LibraryNepModel;
use App\Models\Home\InfrastructurePageModel;
use App\Models\Home\LibraryPageModel;
use App\Models\Home\LaboratoryPageModel;
use App\Models\Home\GymnasiumsSportsModel;
use App\Models\Home\TransportsModel;


    class Facility extends BaseController
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

            return view('admin/facilities/LIBRARY_REFERENCE', $data);
           
        }

        public function INFRASTRUCTURES()
        {
            $model = new InfrastructurePageModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['gallery'] = $model->where('section_type', 'gallery')->findAll();

            return view('admin/facilities/INFRASTRUCTURES', $data);
            
        }

         public function save_hero_library()
        {
            $model = new LibraryNepModel();

            $existing = $model->where('section_type', 'hero')->first();

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

            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved.');
        }

        public function save_library()
        {
            $model = new LibraryNepModel();

            // Only proceed if file is uploaded and valid
            $file = $this->request->getFile('PDF');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $pdfName = $file->getRandomName();
                $file->move('public/uploads', $pdfName);

                $data = [
                    'section_type' => 'pdf',
                    'pdf' => $pdfName,
                ];

                $model->insert($data);

                return redirect()->back()->with('success', 'PDF inserted successfully.');
            }

            return redirect()->back()->with('error', 'Please select a valid PDF file.');
        }

        public function update_library_pdf()
        {
            $model = new LibraryNepModel();

            $id = $this->request->getPost('id');
            if (!$id) {
                return redirect()->back()->with('error', 'Invalid ID');
            }

            $data = [];

            // Handle PDF upload
            $file = $this->request->getFile('PDF');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $pdfName = $file->getRandomName();
                $file->move('public/uploads', $pdfName);
                $data['pdf'] = $pdfName;

                // Optional: Delete old PDF
                $existing = $model->find($id);
                if ($existing && !empty($existing['pdf']) && file_exists('public/uploads/' . $existing['pdf'])) {
                    unlink('public/uploads/' . $existing['pdf']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'PDF updated successfully.');
        }

        public function delete_pdf($id)
        {
            $model = new LibraryNepModel();

            $pdf = $model->find($id);
            if ($pdf && file_exists('public/uploads/' . $pdf['pdf'])) {
                unlink('public/uploads/' . $pdf['pdf']);
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'PDF deleted successfully.');
        }

        public function save_hero_infrestructure()
        {
            $model = new InfrastructurePageModel();
            $hero = $model->where('section_type', 'hero')->first();

            $data = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            // File Upload
            $file = $this->request->getFile('hero_image');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads/', $newName);
                $data['image'] = $newName;
            }

            if ($hero) {
                $model->update($hero['id'], $data);
            } else {
                $model->save($data);
            }

            return redirect()->back()->with('success', 'Hero section saved.');
        }

        public function save_infra()
        {
            $model = new InfrastructurePageModel();

            $name = $this->request->getPost('name');

            $data = [
                'section_type' => 'gallery',
                'name' => $name
            ];

            // Handle image upload
            $file = $this->request->getFile('PDF');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads/', $newName);
                $data['image'] = $newName;
            }

            $model->save($data);

            return redirect()->back()->with('success', 'Infrastructure entry inserted successfully.');
        }

        public function update_infra($id)
        {
            $model = new InfrastructurePageModel();

            $data = [
                'name' => $this->request->getPost('name')
            ];

            // Handle image upload
            $file = $this->request->getFile('image');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads/', $newName);
                $data['image'] = $newName;
            }

            $model->update($id, $data);

            return redirect()->back()->with('success', 'Infrastructure updated successfully.');
        }

        public function delete_infra($id)
        {
            $model = new InfrastructurePageModel();

            // Optional: Check if record exists before deleting
            $record = $model->find($id);
            if (!$record) {
                return redirect()->back()->with('error', 'Record not found.');
            }

            // Optional: Delete the image file from storage
            if (!empty($record['image']) && file_exists('public/uploads/' . $record['image'])) {
                unlink('public/uploads/' . $record['image']);
            }

            // Delete from database
            $model->delete($id);

            return redirect()->back()->with('success', 'Infrastructure entry deleted successfully.');
        }
        
        public function librari()
        {
            $model = new LibraryPageModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'library')->first();
        
            return view('admin/facilities/librari', $data);
        }
        
        public function transports()
        {
            $model = new TransportsModel();

            $hero = $model->where('section_type', 'hero')->first();
            $desk = $model->where('section_type', 'lab')->first();

            return view('admin/facilities/transports', [
                'hero' => $hero,
                'desk' => $desk
            ]);
            
        }
        
        public function gymnasiums_sports()
        {
            $model = new GymnasiumsSportsModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['desk'] = $model->where('section_type', 'overview')->first();

            return view('admin/facilities/gymnasiums_sports', $data);
            
        }
        
        public function laboratari()
        {
            $model = new LaboratoryPageModel();
            $hero = $model->where('section_type', 'hero')->first();
            $desk = $model->where('section_type', 'lab')->first();
            return view('admin/facilities/laboratari', ['hero' => $hero, 'desk' => $desk]);
        }

        public function save_libraries_hero_section()
        {
            $model = new LibraryPageModel();
        
            // Handle hero section
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];
        
            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid()) {
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
        
            // Handle library section
            $libraryData = [
                'section_type' => 'library',
                'overview' => $this->request->getPost('overview'),
            ];
        
            $libImage = $this->request->getFile('image');
            if ($libImage && $libImage->isValid()) {
                $newName = $libImage->getRandomName();
                $libImage->move('public/uploads', $newName);
                $libraryData['image'] = $newName;
            }
        
            $existingLib = $model->where('section_type', 'library')->first();
            if ($existingLib) {
                $model->update($existingLib['id'], $libraryData);
            } else {
                $model->insert($libraryData);
            }
        
            return redirect()->back()->with('success', 'Library Page saved successfully!');
        }
        
        public function save_laborataries_hero_section()
        {
            $model = new LaboratoryPageModel();
        
            // --- Handle Hero Section ---
            $heroData = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];
        
            $heroImage = $this->request->getFile('hero_image');
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $newName = $heroImage->getRandomName();
                $heroImage->move('public/uploads/', $newName);
                $heroData['image'] = $newName;
            }
        
            $existingHero = $model->where('section_type', 'hero')->first();
            if ($existingHero) {
                $model->update($existingHero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }
        
            // --- Handle Lab Section ---
            $labData = [
                'section_type' => 'lab',
                'overview' => $this->request->getPost('overview'),
            ];
        
            $labImage = $this->request->getFile('image');
            if ($labImage && $labImage->isValid() && !$labImage->hasMoved()) {
                $newLabImage = $labImage->getRandomName();
                $labImage->move('public/uploads/', $newLabImage);
                $labData['image'] = $newLabImage;
            }
        
            $existingLab = $model->where('section_type', 'lab')->first();
            if ($existingLab) {
                $model->update($existingLab['id'], $labData);
            } else {
                $model->insert($labData);
            }
        
            return redirect()->back()->with('success', 'Page content saved successfully!');
        }
        
        public function save_gymnasiums_sports_hero_section()
        {
            $model = new GymnasiumsSportsModel();
        
            // === Hero Section ===
            $hero = $model->where('section_type', 'hero')->first();
        
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
        
            if ($hero) {
                $model->update($hero['id'], $heroData);
            } else {
                $model->save($heroData);
            }
        
            // === Overview Section ===
            $overview = $model->where('section_type', 'overview')->first();
        
            $overviewData = [
                'section_type' => 'overview',
                'overview' => $this->request->getPost('overview'),
            ];
        
            $overviewImage = $this->request->getFile('image');
            if ($overviewImage && $overviewImage->isValid() && !$overviewImage->hasMoved()) {
                $newName = $overviewImage->getRandomName();
                $overviewImage->move('public/uploads', $newName);
                $overviewData['image'] = $newName;
            }
        
            if ($overview) {
                $model->update($overview['id'], $overviewData);
            } else {
                $model->save($overviewData);
            }
        
            return redirect()->back()->with('success', 'Gymnasiums Sports page saved successfully.');
        }
        
        public function save_transports_hero_section()
        {
            $model = new TransportsModel();
        
            // --- HERO SECTION ---
            $heroTitle = $this->request->getPost('hero_title');
            $buttonName = $this->request->getPost('button_name');
        
            $heroImage = $this->request->getFile('hero_image');
            $heroImageName = null;
        
            if ($heroImage && $heroImage->isValid() && !$heroImage->hasMoved()) {
                $heroImageName = $heroImage->getRandomName();
                $heroImage->move('public/uploads', $heroImageName);
            }
        
            $existingHero = $model->where('section_type', 'hero')->first();
        
            $heroData = [
                'section_type' => 'hero',
                'title' => $heroTitle,
                'subtitle' => $buttonName,
            ];
        
            if ($heroImageName) {
                $heroData['image'] = $heroImageName;
            }
        
            if ($existingHero) {
                $model->update($existingHero['id'], $heroData);
            } else {
                $model->insert($heroData);
            }
        
            // --- LAB SECTION ---
            $overview = $this->request->getPost('overview');
            $labImage = $this->request->getFile('image');
            $labImageName = null;
        
            if ($labImage && $labImage->isValid() && !$labImage->hasMoved()) {
                $labImageName = $labImage->getRandomName();
                $labImage->move('public/uploads', $labImageName);
            }
        
            $existingLab = $model->where('section_type', 'lab')->first();
        
            $labData = [
                'section_type' => 'lab',
                'overview' => $overview,
            ];
        
            if ($labImageName) {
                $labData['image'] = $labImageName;
            }
        
            if ($existingLab) {
                $model->update($existingLab['id'], $labData);
            } else {
                $model->insert($labData);
            }
        
            return redirect()->back()->with('success', 'Transport page saved successfully.');
        }





    }