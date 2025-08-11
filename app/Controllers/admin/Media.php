<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\NaacDocumentsModel;
use App\Models\Home\PhotoGalleryModel;
use App\Models\Home\VidioModel;


    class Media extends BaseController
    {
        public function _construct()
        {
            parent::__construct();
            $db = \Config\Database::connect();
        }

        public function Index()
        {
            $model = new VidioModel();

            $hero = $model->where('section_type', 'hero')->first();
            $videos = $model->where('section_type', 'vidio')->findAll();

            return view('admin/media/vidioes', compact('hero', 'videos'));
        }
        
        public function photoes()
        {
            $model = new PhotoGalleryModel();
            $hero = $model->where('section_type', 'hero')->first();

        
            $images = $model->where('section_type', 'image')->findAll();

            return view('admin/media/photoes', compact('hero', 'images'));
        }
        
        public function save_photo_Hero()
        {
            $model = new PhotoGalleryModel();
    
            $hero = $model->where('section_type', 'hero')->first();
            $imageName = $hero['image'] ?? null;
    
            $file = $this->request->getFile('hero_image');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $file->move('public/uploads', $imageName);
            }
    
            $data = [
                'section_type' => 'hero',
                'title'        => $this->request->getPost('hero_title'),
                'subtitle'     => $this->request->getPost('hero_subtitle'),
                'image'        => $imageName
            ];
    
            if ($hero) {
                $model->update($hero['id'], $data);
                session()->setFlashdata('success', 'Hero section updated successfully.');
            } else {
                $model->insert($data);
                session()->setFlashdata('success', 'Hero section created successfully.');
            }
    
            return redirect()->back();
        }
    
        public function save_image()
        {
            $model = new PhotoGalleryModel();
            $file = $this->request->getFile('image');
    
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $file->move('public/uploads', $imageName);
    
                $model->insert([
                    'section_type' => 'image',
                    'image'        => $imageName
                ]);
                session()->setFlashdata('success', 'Image added successfully.');
            }
    
            return redirect()->back();
        }
    
        public function delete_image($id)
        {
            $model = new PhotoGalleryModel();
            $record = $model->find($id);
    
            if ($record && $record['section_type'] == 'image') {
                $imagePath = FCPATH . 'public/uploads/' . $record['image'];
                if (is_file($imagePath)) {
                    unlink($imagePath);
                }
    
                $model->delete($id);
                session()->setFlashdata('success', 'Image deleted successfully.');
            }
    
            return redirect()->back();
        }
        
        public function updatePhoto($id)
        {
            $photoModel = new PhotoGalleryModel(); // Adjust model name as needed
            $photo      = $photoModel->find($id);
        
            if (!$photo) {
                return redirect()->back()->with('error', 'Photo not found.');
            }
        
            $imageFile = $this->request->getFile('image');
        
            if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                $newName = $imageFile->getRandomName();
                $imageFile->move('public/uploads', $newName);
        
                // Delete old image file
                if (!empty($photo['image']) && file_exists(FCPATH . 'public/uploads/' . $photo['image'])) {
                    unlink(FCPATH . 'public/uploads/' . $photo['image']);
                }
        
                // Update DB
                $photoModel->update($id, [
                    'image' => $newName
                ]);
            }
        
            return redirect()->back()->with('success', 'Image updated successfully.');
        }
        
        public function save_vidioes_Hero()
        {
            $model = new VidioModel();
            $existing = $model->where('section_type', 'hero')->first();
        
            $data = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('hero_subtitle')
            ];
        
            // Handle image upload
            $file = $this->request->getFile('hero_image');
            if ($file && $file->isValid()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads', $newName);
                $data['image'] = $newName;
            }
        
            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }
        
            return redirect()->back()->with('success', 'Hero section saved successfully!');
        }
        
        public function save_vidio()
        {
            $model = new VidioModel();
        
            $data = [
                'section_type' => 'vidio',
                'vidio' => $this->request->getPost('vidio')
            ];
        
            $model->insert($data);
        
            return redirect()->back()->with('success', 'Video added successfully!');
        }

        
    }