<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\LibraryNepModel;
use App\Models\Home\InfrastructurePageModel;


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

            return view('admin/facilities\LIBRARY_REFERENCE', $data);
           
        }

        public function INFRASTRUCTURES()
        {
            $model = new InfrastructurePageModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['gallery'] = $model->where('section_type', 'gallery')->findAll();

            return view('admin/facilities\INFRASTRUCTURES', $data);
            
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







    }