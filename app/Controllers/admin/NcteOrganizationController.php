<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NcteOrganizationModel;

class NcteOrganizationController extends BaseController
{
    public function index()
    {
        $model = new NcteOrganizationModel();
        $data = [];

        // Fetch latest record to show in form
        $data['record'] = $model->orderBy('id', 'DESC')->first();

        if ($this->request->getMethod() === 'post') {
            $fileImage = $this->request->getFile('hero_image');
            $filePdf   = $this->request->getFile('pdf_file');

            $imageName = $data['record']['hero_image'] ?? null;
            $pdfName   = $data['record']['pdf_file'] ?? null;

            if ($fileImage && $fileImage->isValid()) {
                $imageName = $fileImage->getRandomName();
                $fileImage->move(FCPATH . 'public/uploads', $imageName);
            }

            if ($filePdf && $filePdf->isValid()) {
                $pdfName = $filePdf->getRandomName();
                $filePdf->move(FCPATH . 'public/uploads', $pdfName);
            }

            $saveData = [
                'hero_title'  => $this->request->getPost('hero_title'),
                'button_name' => $this->request->getPost('button_name'),
                'hero_image'  => $imageName,
                'pdf_file'    => $pdfName
            ];

            if ($data['record']) {
                $model->update($data['record']['id'], $saveData);
            } else {
                $model->insert($saveData);
            }

            return redirect()->to(base_url('admin/about_us/Ncte_recognization'))
                ->with('success', 'Data saved successfully.');
        }

        return view('admin/about_us/Ncte_recognization', $data);
    }
}
