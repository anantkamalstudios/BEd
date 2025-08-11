<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\RequiredDocumentsModel;


    class Admission extends BaseController
    {
        public function _construct()
        {
            parent::__construct();
            $db = \Config\Database::connect();
        }

    public function index()
    {
        $model = new RequiredDocumentsModel();
        $hero = $model->where('section_type', 'hero')->first();
        $documents = $model->where('section_type', 'document')->findAll();
    
        $editDoc = null;
        if ($this->request->getGet('edit_id')) {
            $editId = $this->request->getGet('edit_id');
            $editDoc = $model->find($editId);
        }
    
        return view('admin/admission/req_doc', [
            'hero' => $hero,
            'documents' => $documents,
            'editDoc' => $editDoc
        ]);
    }
    
    public function save_hero_req_doc()
    {
        $model = new RequiredDocumentsModel();

        $data = [
            'section_type' => 'hero',
            'title' => $this->request->getPost('hero_title'),
            'subtitle' => $this->request->getPost('button_name')
        ];

        // Handle image upload
        $image = $this->request->getFile('hero_image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move('public/uploads', $newName);
            $data['image'] = $newName;
        }

        // Check if hero exists
        $existing = $model->where('section_type', 'hero')->first();

        if ($existing) {
            $model->update($existing['id'], $data);
        } else {
            $model->insert($data);
        }

        return redirect()->back()->with('success', 'Hero section saved successfully.');
    }

    
    public function save()
    {
        $model = new RequiredDocumentsModel();
        $data = [
            'section_type' => 'document',
            'name' => $this->request->getPost('name'),
        ];
        $model->save($data);
        return redirect()->to('req_doc')->with('success', 'Document added');
    }
    
    public function update()
    {
        $model = new RequiredDocumentsModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
        ];
        $model->update($id, $data);
        return redirect()->to('req_doc')->with('success', 'Document updated');
    }
    
    public function delete($id)
    {
        $model = new RequiredDocumentsModel();
        $model->delete($id);
        return redirect()->to('req_doc')->with('success', 'Document deleted');
    }


       

    }