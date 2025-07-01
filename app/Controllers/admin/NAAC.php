<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\NaacDocumentsModel;


    class NAAC extends BaseController
    {
        public function _construct()
        {
            parent::__construct();
            $db = \Config\Database::connect();
        }

        public function Index()
        {
            $model = new NaacDocumentsModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('admin/NAAC\NAAC_DOCUMENTS', $data);
        }

        public function save_hero_naac()
        {
            $model = new NaacDocumentsModel();

            $title = $this->request->getPost('hero_title');
            $subtitle = $this->request->getPost('button_name');
            $file = $this->request->getFile('hero_image');

            $hero = $model->where('section_type', 'hero')->first();
            $data = [
                'section_type' => 'hero',
                'title' => $title,
                'subtitle' => $subtitle
            ];

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

        public function save_naac()
        {
            $model = new NaacDocumentsModel();
            $file = $this->request->getFile('PDF');

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads/', $newName);

                $model->save([
                    'section_type' => 'pdf',
                    'pdf' => $newName
                ]);

                return redirect()->back()->with('success', 'PDF uploaded.');
            }

            return redirect()->back()->with('error', 'Invalid file.');
        }

        public function delete_naac_pdf($id)
        {
            $model = new NaacDocumentsModel();
            $row = $model->find($id);

            if ($row && $row['section_type'] === 'pdf') {
                if (!empty($row['pdf']) && file_exists('public/uploads/' . $row['pdf'])) {
                    unlink('public/uploads/' . $row['pdf']);
                }
                $model->delete($id);
            }

            return redirect()->back()->with('success', 'PDF deleted.');
        }


    }