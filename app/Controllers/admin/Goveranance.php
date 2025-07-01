<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\IqacModel;
use App\Models\Home\RtiModel;
use App\Models\Home\EqualOpportunityModel;
use App\Models\Home\StudentDevelopmentModel;
use App\Models\Home\GrievanceModel;
use App\Models\Home\DivyangCellModel;
use App\Models\Home\WomenCellModel;
use App\Models\Home\GrievanceCellModel;
use App\Models\Home\PlacementCellModel;
use App\Models\Home\StudentCouncilModel;
use App\Models\Home\AntiRaggingModel;


    class Goveranance extends BaseController
    {
        public function _construct()
        {
            parent::__construct();
            $db = \Config\Database::connect();
        }

        public function Index()
        {
            $model = new IqacModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            return view('admin/governance\INTERNAL_QUALITY_ASSURANCE_CELL', $data);
        }

        public function RIGHT_TO_INFORMATION()
        {
            $model = new RtiModel();

            $data['hero']    = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs']    = $model->where('section_type', 'pdf')->findAll();

            return view('admin/governance\RIGHT_TO_INFORMATION', $data);
        }

        public function EQUAL_OPPORTUNITY_CELL()
        {
            $model = new EqualOpportunityModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('admin/governance\EQUAL_OPPORTUNITY_CELL', $data);
           
        }

        public function STUDENTS_DEVELOPMENT_COMMITTEE()
        {
            $model = new StudentDevelopmentModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('admin/governance\STUDENTS_DEVELOPMENT_COMMITTEE', $data);
        }

        public function GRIEVANCE_REDRESSAL_CELL()
        {
            $model = new GrievanceModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('admin/governance\GRIEVANCE_REDRESSAL_CELL', $data);
        }

        public function DIVYANG_CELL()
        {
            $model = new DivyangCellModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('admin/governance\DIVYANG_CELL', $data);
        }

        public function WOMEN_CELLGRIEVANCE_CELL()
        {
            $model = new WomenCellModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('admin/governance\WOMEN_CELL', $data);
        }

        public function GRIEVANCE_CELL()
        {
            $model = new GrievanceCellModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('admin/governance\GRIEVANCE_CELL', $data);
        }

        public function PLACEMENT_CELL()
        {
            $model = new PlacementCellModel();
            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();
            return view('admin/governance\PLACEMENT_CELL', $data);
        }

        public function STUDENT_COUNCIL()
        {
            $model = new StudentCouncilModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('admin/governance\STUDENT_COUNCIL', $data);
            
        }

        public function ANTI_RAGGING_CELL()
        {
            $model = new AntiRaggingModel();

            $data['hero'] = $model->where('section_type', 'hero')->first();
            $data['members'] = $model->where('section_type', 'member')->findAll();
            $data['pdfs'] = $model->where('section_type', 'pdf')->findAll();

            return view('admin/governance\ANTI_RAGGING_CELL', $data);
        }

        public function saveHero()
        {
            $model = new IqacModel();
            $imageName = '';

            // Upload logic
            $image = $this->request->getFile('hero_image');
            if ($image && $image->isValid()) {
                $imageName = $image->getRandomName();
                $image->move('public/uploads', $imageName);
            }

            $existing = $model->where('section_type', 'hero')->first();
            $data = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name')
            ];

            if ($imageName !== '') {
                $data['image'] = $imageName;
            }

            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved successfully.');
        }

        public function addCell()
        {
            $model = new IqacModel();
            $image = $this->request->getFile('PDF');
            $imageName = '';

            if ($image && $image->isValid()) {
                $imageName = $image->getRandomName();
                $image->move('public/uploads', $imageName);
            }

            $model->insert([
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'image' => $imageName
            ]);

            return redirect()->back()->with('success', 'Member added successfully.');
        }

        public function deleteMember($id)
        {
            $model = new IqacModel();
            $model->delete($id);
            return redirect()->back()->with('success', 'Member deleted successfully.');
        }

        public function update_iqac_member($id)
        {
            $model = new IqacModel();
            $member = $model->find($id);

            if (!$member) {
                return redirect()->back()->with('error', 'Member not found.');
            }

            // Get form inputs
            $name = $this->request->getPost('name');
            $designation = $this->request->getPost('designation');

            // Handle image upload
            $imageFile = $this->request->getFile('image');
            $imageName = $member['image']; // Keep old image by default

            if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                $imageName = $imageFile->getRandomName();
                $imageFile->move('public/uploads/', $imageName);

                // Delete old image if exists
                if (!empty($member['image']) && file_exists('public/uploads/' . $member['image'])) {
                    unlink('public/uploads/' . $member['image']);
                }
            }

            // Update record
            $model->update($id, [
                'name'        => $name,
                'designation' => $designation,
                'image'       => $imageName,
            ]);

            return redirect()->back()->with('success', 'Member updated successfully.');
        }

        public function save_rigth_information()
        {
            $model = new RtiModel();
            $existing = $model->where('section_type', 'hero')->first();

            $data = [
                'title'    => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $file = $this->request->getFile('hero_image');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $file->move('public/uploads/', $imageName);
                $data['image'] = $imageName;

                // Delete old image
                if (!empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $data['section_type'] = 'hero';
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved.');
        }

        public function save_assurance_cell()
        {
            $model = new RtiModel();

            $data = [
                'section_type' => 'member',
                'name'         => $this->request->getPost('name'),
                'designation'  => $this->request->getPost('designation'),
                'contact'      => $this->request->getPost('contact'),
            ];

            $file = $this->request->getFile('PDF');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $file->move('public/uploads/', $imageName);
                $data['image'] = $imageName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Member added.');
        }

        public function updateRtiMember($id)
        {
            $model = new RtiModel();

            $data = [
                'name'        => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'contact'     => $this->request->getPost('contact'),
            ];

            // Image handling
            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;

                // Delete old image
                $old = $model->find($id);
                if ($old && !empty($old['image']) && file_exists('public/uploads/' . $old['image'])) {
                    unlink('public/uploads/' . $old['image']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated successfully.');
        }

        public function deleteRtiMember($id)
        {
            $model = new RtiModel();
            $row = $model->find($id);

            if ($row && $row['section_type'] === 'member') {
                if (!empty($row['image']) && file_exists('public/uploads/' . $row['image'])) {
                    unlink('public/uploads/' . $row['image']);
                }
                $model->delete($id);
                return redirect()->back()->with('success', 'Member deleted successfully.');
            }

            return redirect()->back()->with('error', 'Member not found.');
        }

       public function save_Pdf()
        {
            $model = new RtiModel();

            $data = ['section_type' => 'pdf'];

            $pdf = $this->request->getFile('PDF'); // Notice 'PDF' is uppercase to match input

            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);
                $data['pdf'] = $newName;

                $model->insert($data);
                return redirect()->back()->with('success', 'PDF uploaded.');
            }

            return redirect()->back()->with('error', 'No valid PDF selected.');
        }


        public function delete_Pdf($id)
        {
            $model = new RtiModel();
            $row = $model->find($id);

            if ($row && $row['section_type'] === 'pdf') {
                if (!empty($row['pdf']) && file_exists('public/uploads/' . $row['pdf'])) {
                    unlink('public/uploads/' . $row['pdf']);
                }
                $model->delete($id);
                return redirect()->back()->with('success', 'PDF deleted.');
            }

            return redirect()->back()->with('error', 'PDF not found.');
        }

        public function save_opp()
        {
            $model = new EqualOpportunityModel();

            $hero = $model->where('section_type', 'hero')->first();

            $data = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name')
            ];

            $image = $this->request->getFile('hero_image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;

                if ($hero && !empty($hero['image']) && file_exists('public/uploads/' . $hero['image'])) {
                    unlink('public/uploads/' . $hero['image']);
                }
            }

            if ($hero) {
                $model->update($hero['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved successfully.');
        }

        public function save_opp_cell()
        {
            $model = new EqualOpportunityModel();

            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'contact' => $this->request->getPost('contact'),
            ];

            $image = $this->request->getFile('PDF'); // PDF is the field name for image input
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Member added.');
        }

        public function update_opp_member($id)
        {
            $model = new EqualOpportunityModel();

            $data = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'contact' => $this->request->getPost('contact'),
            ];

            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;

                $old = $model->find($id);
                if ($old && !empty($old['image']) && file_exists('public/uploads/' . $old['image'])) {
                    unlink('public/uploads/' . $old['image']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated.');
        }

        public function delete_opp_member($id)
        {
            $model = new EqualOpportunityModel();

            $member = $model->find($id);

            if ($member && $member['section_type'] === 'member') {
                // Delete image from storage
                if (!empty($member['image']) && file_exists('public/uploads/' . $member['image'])) {
                    unlink('public/uploads/' . $member['image']);
                }

                $model->delete($id);
                return redirect()->back()->with('success', 'Member deleted successfully.');
            }

            return redirect()->back()->with('error', 'Member not found.');
        }

         public function save_opp_pdf()
        {
            $model = new EqualOpportunityModel();
            $data = ['section_type' => 'pdf'];

            $pdf = $this->request->getFile('PDF');
            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);
                $data['pdf'] = $newName;
            } else {
                return redirect()->back()->with('error', 'No valid PDF selected.');
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'PDF uploaded.');
        }

        // Delete PDF
        public function delete_opp_pdf($id)
        {
            $model = new EqualOpportunityModel();
            $pdf = $model->find($id);

            if ($pdf && $pdf['section_type'] === 'pdf') {
                if (!empty($pdf['pdf']) && file_exists('public/uploads/' . $pdf['pdf'])) {
                    unlink('public/uploads/' . $pdf['pdf']);
                }
                $model->delete($id);
                return redirect()->back()->with('success', 'PDF deleted.');
            }

            return redirect()->back()->with('error', 'PDF not found.');
        }

        public function update_opp_pdf($id)
        {
            $model = new EqualOpportunityModel();

            $pdfFile = $this->request->getFile('pdf');

            if ($pdfFile && $pdfFile->isValid() && !$pdfFile->hasMoved()) {

                // Get old PDF to delete
                $existing = $model->find($id);

                if ($existing && !empty($existing['pdf']) && file_exists('public/uploads/' . $existing['pdf'])) {
                    unlink('public/uploads/' . $existing['pdf']);
                }

                // Upload new PDF
                $newName = $pdfFile->getRandomName();
                $pdfFile->move('public/uploads', $newName);

                // Update database
                $model->update($id, [
                    'pdf' => $newName
                ]);

                return redirect()->back()->with('success', 'PDF updated successfully.');
            }

            return redirect()->back()->with('error', 'Invalid or missing PDF file.');
        }

        public function save_hero_stu_comm()
        {
            $model = new StudentDevelopmentModel();
            $title = $this->request->getPost('hero_title');
            $subtitle = $this->request->getPost('button_name');
            $file = $this->request->getFile('hero_image');

            $data = [
                'section_type' => 'hero',
                'title' => $title,
                'subtitle' => $subtitle
            ];

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $existing = $model->where('section_type', 'hero')->first();
            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved.');
        }

            public function save_faculty_stu_comm()
        {
            $model = new StudentDevelopmentModel();
            $file = $this->request->getFile('PDF');

            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'contact' => $this->request->getPost('contact')
            ];

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Member added.');
        }

        public function update_faculty_stu_comm($id)
        {
            $model = new StudentDevelopmentModel();

            $data = [
                'name'        => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'contact'     => $this->request->getPost('contact'),
            ];

            // Handle image upload
            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;

                // Delete old image
                $old = $model->find($id);
                if ($old && !empty($old['image']) && file_exists('public/uploads/' . $old['image'])) {
                    unlink('public/uploads/' . $old['image']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated successfully.');
        }

        public function delete_faculty_stu_comm($id)
        {
            $model = new StudentDevelopmentModel();
            $row = $model->find($id);

            if ($row && !empty($row['image']) && file_exists('public/uploads/' . $row['image'])) {
                unlink('public/uploads/' . $row['image']);
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'Member deleted successfully.');
        }

        public function savePdf()
        {
            $model = new StudentDevelopmentModel();
            $file = $this->request->getFile('PDF');

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads', $newName);

                $model->insert([
                    'section_type' => 'pdf',
                    'pdf' => $newName
                ]);

                return redirect()->back()->with('success', 'PDF uploaded.');
            }

            return redirect()->back()->with('error', 'No valid PDF selected.');
        }

        public function updatePdf($id)
        {
            $model = new StudentDevelopmentModel();
            $row = $model->find($id);

            if (!$row || $row['section_type'] !== 'pdf') {
                return redirect()->back()->with('error', 'PDF entry not found.');
            }

            $data = [];

            $pdf = $this->request->getFile('pdf');
            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);
                $data['pdf'] = $newName;

                // Delete old file
                if (!empty($row['pdf']) && file_exists('public/uploads/' . $row['pdf'])) {
                    unlink('public/uploads/' . $row['pdf']);
                }
            }

            if (!empty($data)) {
                $model->update($id, $data);
                return redirect()->back()->with('success', 'PDF updated successfully.');
            }

            return redirect()->back()->with('error', 'No file uploaded.');
        }

        public function deletePdf($id)
        {
            $model = new StudentDevelopmentModel();
            $row = $model->find($id);

            if (!$row || $row['section_type'] !== 'pdf') {
                return redirect()->back()->with('error', 'PDF entry not found.');
            }

            // Delete file
            if (!empty($row['pdf']) && file_exists('public/uploads/' . $row['pdf'])) {
                unlink('public/uploads/' . $row['pdf']);
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'PDF deleted successfully.');
        }

         public function save_home_grievance_desk()
        {
            $model = new GrievanceModel();

            $title = $this->request->getPost('hero_title');
            $subtitle = $this->request->getPost('button_name');
            $imageFile = $this->request->getFile('hero_image');

            $data = [
                'section_type' => 'hero',
                'title' => $title,
                'subtitle' => $subtitle,
            ];

            $existing = $model->where('section_type', 'hero')->first();

            if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                $newName = $imageFile->getRandomName();
                $imageFile->move('public/uploads', $newName);
                $data['image'] = $newName;

                if ($existing && !empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved.');
        }

         public function saveMember()
        {
            $model = new GrievanceModel();

            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'contact' => $this->request->getPost('contact'),
            ];

            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Member added.');
        }

        public function update_Member($id)
        {
            $model = new GrievanceModel();

            $data = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'contact' => $this->request->getPost('contact'),
            ];

            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;

                // Delete old image
                $existing = $model->find($id);
                if ($existing && !empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated.');
        }


        public function delete_Member($id)
        {
            $model = new GrievanceModel();
            $row = $model->find($id);

            if ($row && $row['section_type'] === 'member') {
                if (!empty($row['image']) && file_exists('public/uploads/' . $row['image'])) {
                    unlink('public/uploads/' . $row['image']);
                }
                $model->delete($id);
                return redirect()->back()->with('success', 'Member deleted.');
            }

            return redirect()->back()->with('error', 'Member not found.');
        }

        public function save_goverance_Pdf()
        {
            $model = new GrievanceModel();

            $pdf = $this->request->getFile('PDF');
            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);

                $model->insert([
                    'section_type' => 'pdf',
                    'pdf' => $newName
                ]);

                return redirect()->back()->with('success', 'PDF uploaded.');
            }

            return redirect()->back()->with('error', 'No valid PDF selected.');
        }

        public function updategoverancePdf($id)
        {
            $model = new GrievanceModel();
            $pdf = $this->request->getFile('PDF');

            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);

                $existing = $model->find($id);
                if ($existing && !empty($existing['pdf']) && file_exists('public/uploads/' . $existing['pdf'])) {
                    unlink('public/uploads/' . $existing['pdf']);
                }

                $model->update($id, ['pdf' => $newName]);
                return redirect()->back()->with('success', 'PDF updated.');
            }

            return redirect()->back()->with('error', 'No valid PDF selected.');
        }

        public function deletegoverancePdf($id)
        {
            $model = new GrievanceModel();
            $row = $model->find($id);

            if ($row && $row['section_type'] === 'pdf') {
                if (!empty($row['pdf']) && file_exists('public/uploads/' . $row['pdf'])) {
                    unlink('public/uploads/' . $row['pdf']);
                }
                $model->delete($id);
                return redirect()->back()->with('success', 'PDF deleted.');
            }

            return redirect()->back()->with('error', 'PDF not found.');
        }

        public function save_hero_divyang_cell()
        {
            $model = new DivyangCellModel();

            $title = $this->request->getPost('hero_title');
            $subtitle = $this->request->getPost('button_name');
            $imageFile = $this->request->getFile('hero_image');

            $data = [
                'section_type' => 'hero',
                'title' => $title,
                'subtitle' => $subtitle,
            ];

            $existing = $model->where('section_type', 'hero')->first();

            if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                $newName = $imageFile->getRandomName();
                $imageFile->move('public/uploads', $newName);
                $data['image'] = $newName;

                if ($existing && !empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved.');
        }

        public function save_divyang_Member()
        {
            $model = new DivyangCellModel();

            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];

            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Member added.');
        }

        public function update_divyang_member($id)
        {
            $model = new DivyangCellModel();

            $data = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'contact' => $this->request->getPost('contact'),
            ];

            $file = $this->request->getFile('PDF');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads', $newName);
                $data['image'] = $newName;

                $existing = $model->find($id);
                if ($existing && !empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated successfully.');
        }

        public function delete_divyang_member($id)
        {
            $model = new DivyangCellModel();
            $row = $model->find($id);

            if ($row && $row['section_type'] === 'member') {
                if (!empty($row['image']) && file_exists('public/uploads/' . $row['image'])) {
                    unlink('public/uploads/' . $row['image']);
                }
                $model->delete($id);
                return redirect()->back()->with('success', 'Member deleted successfully.');
            }

            return redirect()->back()->with('error', 'Member not found.');
        }

        public function save_pdf_divyang_cell()
        {
            $model = new DivyangCellModel();

            $pdfFile = $this->request->getFile('PDF');

            if ($pdfFile && $pdfFile->isValid() && !$pdfFile->hasMoved()) {
                $newName = $pdfFile->getRandomName();
                $pdfFile->move('public/uploads', $newName);

                $data = [
                    'section_type' => 'pdf',
                    'pdf' => $newName,
                ];

                $model->insert($data);
                return redirect()->back()->with('success', 'PDF uploaded successfully.');
            }

            return redirect()->back()->with('error', 'Please select a valid PDF file.');
        }

        public function updateDivyangCellPdf($id)
        {
            $model = new DivyangCellModel();
            $pdf = $this->request->getFile('PDF');

            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);

                // Delete old file
                $existing = $model->find($id);
                if ($existing && !empty($existing['pdf']) && file_exists('public/uploads/' . $existing['pdf'])) {
                    unlink('public/uploads/' . $existing['pdf']);
                }

                $model->update($id, ['pdf' => $newName]);
                return redirect()->back()->with('success', 'PDF updated successfully.');
            }

            return redirect()->back()->with('error', 'Please select a valid PDF file.');
        }

        public function deleteDivyangCellPdf($id)
        {
            $model = new DivyangCellModel();
            $data = $model->find($id);

            if ($data && $data['section_type'] === 'pdf') {
                // Delete file
                if (!empty($data['pdf']) && file_exists('public/uploads/' . $data['pdf'])) {
                    unlink('public/uploads/' . $data['pdf']);
                }

                $model->delete($id);
                return redirect()->back()->with('success', 'PDF deleted successfully.');
            }

            return redirect()->back()->with('error', 'PDF not found.');
        }

        public function save_women_Hero()
        {
            $model = new WomenCellModel();

            $title = $this->request->getPost('hero_title');
            $subtitle = $this->request->getPost('button_name');
            $imageFile = $this->request->getFile('hero_image');

            $data = [
                'section_type' => 'hero',
                'title' => $title,
                'subtitle' => $subtitle,
            ];

            $existing = $model->where('section_type', 'hero')->first();

            if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                $newName = $imageFile->getRandomName();
                $imageFile->move('public/uploads', $newName);
                $data['image'] = $newName;

                if ($existing && !empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved.');
        }


        public function saveWomenCellMember()
        {
            $model = new WomenCellModel();

            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];

            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Member added.');
        }

        public function updateWomenCellMember($id)
        {
            $model = new WomenCellModel();

            $data = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];

            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;

                $existing = $model->find($id);
                if ($existing && !empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated.');
        }

        public function deleteWomenCellMember($id)
        {
            $model = new WomenCellModel();
            $row = $model->find($id);

            if ($row && $row['section_type'] === 'member') {
                if (!empty($row['image']) && file_exists('public/uploads/' . $row['image'])) {
                    unlink('public/uploads/' . $row['image']);
                }
                $model->delete($id);
                return redirect()->back()->with('success', 'Member deleted.');
            }

            return redirect()->back()->with('error', 'Member not found.');
        }

        public function saveWomenCellPdf()
        {
            $model = new WomenCellModel();

            $pdf = $this->request->getFile('PDF');
            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);

                $model->insert([
                    'section_type' => 'pdf',
                    'pdf' => $newName
                ]);

                return redirect()->back()->with('success', 'PDF uploaded.');
            }

            return redirect()->back()->with('error', 'No valid PDF selected.');
        }

        public function updateWomenCellPdf($id)
        {
            $model = new WomenCellModel();

            $pdf = $this->request->getFile('PDF');
            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);

                $existing = $model->find($id);
                if ($existing && !empty($existing['pdf']) && file_exists('public/uploads/' . $existing['pdf'])) {
                    unlink('public/uploads/' . $existing['pdf']);
                }

                $model->update($id, ['pdf' => $newName]);
                return redirect()->back()->with('success', 'PDF updated.');
            }

            return redirect()->back()->with('error', 'No valid PDF selected.');
        }

        public function deleteWomenCellPdf($id)
        {
            $model = new WomenCellModel();
            $row = $model->find($id);

            if ($row && $row['section_type'] === 'pdf') {
                if (!empty($row['pdf']) && file_exists('public/uploads/' . $row['pdf'])) {
                    unlink('public/uploads/' . $row['pdf']);
                }
                $model->delete($id);
                return redirect()->back()->with('success', 'PDF deleted.');
            }

            return redirect()->back()->with('error', 'PDF not found.');
        }

         public function save_hero_grievance_cell_desk()
        {
            $model = new GrievanceCellModel();
            $data = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('title'),
                'subtitle' => $this->request->getPost('subtitle')
            ];

            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $existing = $model->where('section_type', 'hero')->first();
            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved successfully.');
        }

        public function savegrievancecellMember()
        {
            $model = new GrievanceCellModel();
            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];

            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Member added.');
        }

        public function updategrievancecellMember($id)
        {
            $model = new GrievanceCellModel();
            $data = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];

            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;

                $existing = $model->find($id);
                if ($existing && !empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated.');
        }

        public function deletegrievancecellMember($id)
        {
            $model = new GrievanceCellModel();
            $record = $model->find($id);

            if ($record && $record['section_type'] === 'member') {
                if (!empty($record['image']) && file_exists('public/uploads/' . $record['image'])) {
                    unlink('public/uploads/' . $record['image']);
                }
                $model->delete($id);
            }

            return redirect()->back()->with('success', 'Member deleted.');
        }

        public function savegrievancecellPdf()
        {
            $model = new GrievanceCellModel();
            $pdf = $this->request->getFile('PDF');

            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);

                $model->insert([
                    'section_type' => 'pdf',
                    'pdf' => $newName
                ]);
            }

            return redirect()->back()->with('success', 'PDF uploaded.');
        }

        public function updategrievancecellPdf($id)
        {
            $model = new GrievanceCellModel();
            $pdf = $this->request->getFile('PDF');

            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);

                $existing = $model->find($id);
                if ($existing && !empty($existing['pdf']) && file_exists('public/uploads/' . $existing['pdf'])) {
                    unlink('public/uploads/' . $existing['pdf']);
                }

                $model->update($id, ['pdf' => $newName]);
            }

            return redirect()->back()->with('success', 'PDF updated.');
        }

        public function deletegrievancecellPdf($id)
        {
            $model = new GrievanceCellModel();
            $record = $model->find($id);

            if ($record && $record['section_type'] === 'pdf') {
                if (!empty($record['pdf']) && file_exists('public/uploads/' . $record['pdf'])) {
                    unlink('public/uploads/' . $record['pdf']);
                }
                $model->delete($id);
            }

            return redirect()->back()->with('success', 'PDF deleted.');
        }

        public function update_pdf_grievance_cell_desk($id)
        {
            $model = new GrievanceCellModel();

            $pdf = $this->request->getFile('PDF');
            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);

                $existing = $model->find($id);
                if ($existing && !empty($existing['pdf']) && file_exists('public/uploads/' . $existing['pdf'])) {
                    unlink('public/uploads/' . $existing['pdf']);
                }

                $model->update($id, ['pdf' => $newName]);
                return redirect()->back()->with('success', 'PDF updated successfully.');
            }

            return redirect()->back()->with('error', 'No valid PDF selected.');
        }

        public function delete_pdf_grievance_cell_desk($id)
        {
            $model = new GrievanceCellModel();
            $row = $model->find($id);

            if ($row && $row['section_type'] === 'pdf') {
                if (!empty($row['pdf']) && file_exists('public/uploads/' . $row['pdf'])) {
                    unlink('public/uploads/' . $row['pdf']);
                }

                $model->delete($id);
                return redirect()->back()->with('success', 'PDF deleted successfully.');
            }

            return redirect()->back()->with('error', 'PDF not found.');
        }

        public function save_placement_hero()
        {
            $model = new PlacementCellModel();
            $existing = $model->where('section_type', 'hero')->first();

            $data = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name')
            ];

            $image = $this->request->getFile('hero_image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
                if ($existing && !empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved successfully.');
        }

         public function save_placement_member()
        {
            $model = new PlacementCellModel();

            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation')
            ];

            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $model->insert($data);
            return redirect()->back()->with('success', 'Member added successfully.');
        }

        public function updateplacementMember($id)
        {
            $model = new PlacementCellModel();

            $data = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];

            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;

                $existing = $model->find($id);
                if ($existing && !empty($existing['image']) && file_exists('public/uploads/' . $existing['image'])) {
                    unlink('public/uploads/' . $existing['image']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated.');
        }

        public function deleteplacementMember($id)
        {
            $model = new PlacementCellModel();
            $member = $model->find($id);

            if ($member && !empty($member['image']) && file_exists('public/uploads/' . $member['image'])) {
                unlink('public/uploads/' . $member['image']);
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'Member deleted.');
        }

        public function placement_pdf_save()
        {
            $model = new PlacementCellModel();

            $file = $this->request->getFile('PDF');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('public/uploads', $newName);

                $model->insert([
                    'section_type' => 'pdf',
                    'pdf' => $newName
                ]);

                return redirect()->back()->with('success', 'PDF uploaded successfully.');
            }

            return redirect()->back()->with('error', 'Invalid PDF file.');
        }

        public function update_placement_pdf($id)
        {
            $model = new PlacementCellModel();

            $data = [];

            $pdf = $this->request->getFile('PDF');
            if ($pdf && $pdf->isValid() && !$pdf->hasMoved()) {
                $newName = $pdf->getRandomName();
                $pdf->move('public/uploads', $newName);
                $data['pdf'] = $newName;

                // Delete old file
                $existing = $model->find($id);
                if (!empty($existing['pdf']) && file_exists('public/uploads/' . $existing['pdf'])) {
                    unlink('public/uploads/' . $existing['pdf']);
                }
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'PDF updated successfully.');
        }

        public function delete_placement_pdf($id)
        {
            $model = new PlacementCellModel();
            $data = $model->find($id);

            if (!empty($data['pdf']) && file_exists('public/uploads/' . $data['pdf'])) {
                unlink('public/uploads/' . $data['pdf']);
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'PDF deleted successfully.');
        }

        public function save_hero_stu_council()
        {
            $model = new StudentCouncilModel();

            $data = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $image = $this->request->getFile('hero_image');
            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $existing = $model->where('section_type', 'hero')->first();
            if ($existing) {
                $model->update($existing['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved successfully');
        }

        public function save_stu_council()
        {
            $model = new StudentCouncilModel();

            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation')
            ];

            $img = $this->request->getFile('PDF'); // actual image, you named input as PDF
            if ($img->isValid() && !$img->hasMoved()) {
                $imgName = $img->getRandomName();
                $img->move('public/uploads', $imgName);
                $data['image'] = $imgName;
            }

            $id = $this->request->getPost('id');
            if ($id) {
                $model->update($id, $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Member saved successfully.');
        }

        public function delete_stu_council($id)
        {
            $model = new StudentCouncilModel();
            $member = $model->find($id);

            if ($member && !empty($member['image']) && file_exists('public/uploads/' . $member['image'])) {
                unlink('public/uploads/' . $member['image']);
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'Member deleted successfully.');
        }

        public function update_stu_council($id)
        {
            $model = new StudentCouncilModel();

            $name = $this->request->getPost('name');
            $designation = $this->request->getPost('designation');
            $imageFile = $this->request->getFile('PDF');

            $data = [
                'name' => $name,
                'designation' => $designation,
            ];

            if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
                $newName = $imageFile->getRandomName();
                $imageFile->move('public/uploads', $newName);
                $data['image'] = $newName;

                // delete old image
                $oldData = $model->find($id);
                if (!empty($oldData['image']) && file_exists('public/uploads/' . $oldData['image'])) {
                    unlink('public/uploads/' . $oldData['image']);
                }
            }

            $model->update($id, $data);

            return redirect()->back()->with('success', 'Member updated successfully');
        }

        public function save_pdf_stu_council()
        {
            $model = new StudentCouncilModel();

            $data = ['section_type' => 'pdf'];

            $file = $this->request->getFile('PDF');
            if ($file->isValid() && !$file->hasMoved()) {
                $pdfName = $file->getRandomName();
                $file->move('public/uploads', $pdfName);
                $data['pdf'] = $pdfName;

                // Only insert (no update)
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'PDF uploaded successfully.');
        }

        public function update_stu_Pdf($id)
        {
            $model = new StudentCouncilModel();
            $existing = $model->find($id);

            if (!$existing) {
                return redirect()->back()->with('error', 'Record not found.');
            }

            $data = [];

            $file = $this->request->getFile('PDF');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                // Delete old file
                if (!empty($existing['pdf']) && file_exists('public/uploads/' . $existing['pdf'])) {
                    unlink('public/uploads/' . $existing['pdf']);
                }

                // Save new file
                $newName = $file->getRandomName();
                $file->move('public/uploads', $newName);
                $data['pdf'] = $newName;
            }

            $model->update($id, $data);

            return redirect()->back()->with('success', 'PDF updated successfully.');
        }

        public function delete_stu_Pdf($id)
        {
            $model = new StudentCouncilModel();
            $row = $model->find($id);

            if ($row) {
                if (!empty($row['pdf']) && file_exists('public/uploads/' . $row['pdf'])) {
                    unlink('public/uploads/' . $row['pdf']);
                }
                $model->delete($id);
                return redirect()->back()->with('success', 'PDF deleted successfully.');
            }

            return redirect()->back()->with('error', 'PDF not found.');
        }

         public function save_hero_anti()
        {
            $model = new AntiRaggingModel();

            $data = [
                'section_type' => 'hero',
                'title' => $this->request->getPost('hero_title'),
                'subtitle' => $this->request->getPost('button_name'),
            ];

            $image = $this->request->getFile('hero_image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['image'] = $newName;
            }

            $existingHero = $model->where('section_type', 'hero')->first();

            if ($existingHero) {
                $model->update($existingHero['id'], $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Hero section saved successfully.');
        }

        public function save_anti_ragging()
        {
            $model = new AntiRaggingModel();

            $data = [
                'section_type' => 'member',
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];

            $image = $this->request->getFile('PDF'); // Assuming you're using this field for images
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['member_image'] = $newName;
            }

            $id = $this->request->getPost('id');
            if ($id) {
                $model->update($id, $data);
            } else {
                $model->insert($data);
            }

            return redirect()->back()->with('success', 'Member saved successfully.');
        }

        public function update_anti_ragging_member()
        {
            $model = new AntiRaggingModel();
            $id = $this->request->getPost('id');

            $data = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
            ];

            // Image upload
            $image = $this->request->getFile('PDF');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move('public/uploads', $newName);
                $data['member_image'] = $newName;
            }

            $model->update($id, $data);
            return redirect()->back()->with('success', 'Member updated successfully.');
        }

        public function delete_anti_ragging_member($id)
        {
            $model = new AntiRaggingModel();
            $member = $model->find($id);

            if ($member && !empty($member['member_image']) && file_exists('public/uploads/' . $member['member_image'])) {
                unlink('public/uploads/' . $member['member_image']);
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'Member deleted successfully.');
        }

        public function save_anti_pdf()
        {
            $model = new AntiRaggingModel();

            $data = [
                'section_type' => 'pdf'
            ];

            $file = $this->request->getFile('PDF');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $pdfName = $file->getRandomName();
                $file->move('public/uploads', $pdfName);
                $data['pdf'] = $pdfName;
            }

            $model->insert($data);

            return redirect()->back()->with('success', 'PDF inserted successfully.');
        }

        public function update_anti_pdf()
        {
            $model = new AntiRaggingModel();
            $id = $this->request->getPost('id');
            $data = [];

            $file = $this->request->getFile('PDF');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $pdfName = $file->getRandomName();
                $file->move('public/uploads', $pdfName);
                $data['pdf'] = $pdfName;
            }

            if ($id) {
                $model->update($id, $data);
            }

            return redirect()->back()->with('success', 'PDF updated successfully.');
        }

        public function delete_anti_pdf($id)
        {
            $model = new AntiRaggingModel();
            $record = $model->find($id);

            if ($record && !empty($record['pdf']) && file_exists(FCPATH . 'public/uploads/' . $record['pdf'])) {
                unlink(FCPATH . 'public/uploads/' . $record['pdf']);
            }

            $model->delete($id);

            return redirect()->back()->with('success', 'PDF deleted successfully.');
        }


























    }