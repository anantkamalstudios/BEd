<?php

namespace App\Controllers;

use App\Models\PdfModel;
use CodeIgniter\Controller;

class PdfController extends Controller
{
    public function index()
    {
        $pdfModel = new PdfModel();

        // Get the latest record (admin side will always show this one)
        $data['latest'] = $pdfModel->orderBy('id', 'DESC')->first();

        return view('admin/about_us/Ncte_recognization', $data);
    }

    public function upload()
    {
        $pdfModel = new PdfModel();

        // Get the latest record (so we can keep old files if not replaced)
        $latest = $pdfModel->orderBy('id', 'DESC')->first();
        $latest = $latest ?? ['brochure' => null, 'syllabus' => null]; // default if no record yet

        $data = [];

        $brochureFile = $this->request->getFile('brochure_pdf');
        $syllabusFile = $this->request->getFile('syllabus_pdf');

        // Upload brochure if provided
        if ($brochureFile && $brochureFile->isValid() && !$brochureFile->hasMoved()) {
            if ($brochureFile->getExtension() === 'pdf') {
                $newName = 'brochure_' . time() . '.pdf';
                $brochureFile->move(FCPATH . 'uploads/pdfs', $newName);
                $data['brochure'] = $newName;
            }
        } else {
            // Keep old brochure if no new upload
            $data['brochure'] = $latest['brochure'];
        }

        // Upload syllabus if provided
        if ($syllabusFile && $syllabusFile->isValid() && !$syllabusFile->hasMoved()) {
            if ($syllabusFile->getExtension() === 'pdf') {
                $newName = 'syllabus_' . time() . '.pdf';
                $syllabusFile->move(FCPATH . 'uploads/pdfs', $newName);
                $data['syllabus'] = $newName;
            }
        } else {
            // Keep old syllabus if no new upload
            $data['syllabus'] = $latest['syllabus'];
        }

        // If record exists → update, otherwise insert
        if (!empty($latest['id'])) {
            $pdfModel->update($latest['id'], $data);
        } else {
            $pdfModel->insert($data);
        }

        return redirect()->to('/pdf')->with('success', 'PDF(s) saved successfully.');
    }
}
