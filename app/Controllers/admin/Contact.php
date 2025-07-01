<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\ContactUsModel;


    class Contact extends BaseController
    {
        public function _construct()
        {
            parent::__construct();
            $db = \Config\Database::connect();
        }

        public function Index()
        {
            $model = new ContactUsModel();

            $data = [
                'hero'    => $model->where('section_type', 'hero')->first(),
                'contact' => $model->where('section_type', 'contact')->findAll()
            ];
                return view('admin/contacts', $data);
        }

        public function save_con_Hero()
    {
        $model = new ContactUsModel();

        $image = $this->request->getFile('hero_image');
        $imageName = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('public/uploads/', $imageName);
        }

        $data = [
            'section_type' => 'hero',
            'title'        => $this->request->getPost('hero_title'),
            'subtitle'     => $this->request->getPost('hero_subtitle'),
        ];

        if (!empty($imageName)) {
            $data['image'] = $imageName;
        }

        // check if already exists
        $existing = $model->where('section_type', 'hero')->first();
        if ($existing) {
            $model->update($existing['id'], $data);
        } else {
            $model->insert($data);
        }

        return redirect()->back()->with('success', 'Hero section saved successfully.');
    }

    public function saveContact()
    {
        $model = new ContactUsModel();

        $data = [
            'section_type' => 'contact',
            'map'          => $this->request->getPost('map'),
            'address'      => $this->request->getPost('address'),
            'mobile'       => $this->request->getPost('mobile'),
            'email'        => $this->request->getPost('email'),
        ];

        $model->insert($data);

        return redirect()->back()->with('success', 'Contact info added successfully.');
    }

    public function deleteContact($id)
    {
        $model = new ContactUsModel();
        $model->delete($id);
        return redirect()->back()->with('success', 'Contact deleted.');
    }

    public function updateContact()
    {
        $model = new ContactUsModel();
        $id = $this->request->getPost('id');
        
        $data = [
            'map'     => $this->request->getPost('map'),
            'address' => $this->request->getPost('address'),
            'mobile'  => $this->request->getPost('mobile'),
            'email'   => $this->request->getPost('email'),
        ];

        $model->update($id, $data);

        return redirect()->back()->with('success', 'Contact updated successfully.');
    }

    }