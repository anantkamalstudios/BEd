<?php

namespace App\Controllers\Admin;

use App\Models\AddcarModel;
use App\Controllers\BaseController;
use App\Models\Home\HeroModel;
use App\Models\Home\AdmissionModel;
use App\Models\Home\AboutUsModel;
use App\Models\Home\WhyJoinBvceModel;
use App\Models\Home\InfrastructureModel;
use App\Models\Home\FaqTestimonialModel;
use App\Models\Home\GalleryModel;
use App\Models\Home\Our_unique_methodologies;


    class Home extends BaseController
    {
        public function _construct()
        {
            parent::__construct();
            $db = \Config\Database::connect();
        }

        public function Index()
        {
            $model = new HeroModel();
            $data['hero_sections'] = $model->findAll();
            return view('admin/home/courousel_section', $data);
        }

        public function admission_information()
        {
            $model = new AdmissionModel();
            $data['admission_records'] = $model->findAll();
            return view('admin/home/admission_information', $data);
        }

        public function about_us()
        {
            $model = new AboutUsModel();
            $data['about_records'] = $model->findAll();
            return view('admin/home/about_us', $data);
        }

        public function why_join_bvce()
        {
            $model = new WhyJoinBvceModel();
            $data['content_records'] = $model->where('section_type', 'content')->findAll();
            $data['image_records']   = $model->where('section_type', 'image')->findAll();
            return view('admin/home/why_join_bvce', $data);
        }

        public function our_infrastructure()
        {
            $model = new InfrastructureModel();
            $data['items'] = $model->findAll();
            return view('admin/home/our_infrastructure', $data);
        }

        public function our_unique_methodologies()
        {
            $model = new Our_unique_methodologies();
            $data['items'] = $model->findAll();
            return view('admin/home/our_unique_methodologies', $data);
        }

        public function frequently_asked_questions()
        {
            $model = new FaqTestimonialModel();

            $data['faqs'] = $model->where('section_type', 'faq')->findAll();
            $data['testimonials'] = $model->where('section_type', 'testimonial')->findAll();

            return view('admin/home/frequently_asked_questions', $data);
        }

        public function gallery()
        {
            $model = new GalleryModel();
            $data['gallery'] = $model->findAll();
            return view('admin/home/gallery', $data);
        }

        public function insertHeroSection()
        {
            $model = new HeroModel();

            $image = $this->request->getFile('banner_image');
            $imageName = null;

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);
            }

            $data = [
                'title' => $this->request->getPost('title'),
                'subtitle' => $this->request->getPost('subtitle'),
                'banner_image' => $imageName,
            ];

            $model->insert($data);
            return redirect()->back()->with('success', 'Hero section inserted successfully.');
        }

        public function deleteHeroSection($id)
        {
            $model = new HeroModel();
            $hero = $model->find($id);

            if ($hero && !empty($hero['banner_image'])) {
                $path = FCPATH . 'front_end/assets/img/' . $hero['banner_image'];
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'Hero section deleted.');
        }

        public function updateHeroSection($id)
        {
            $model = new HeroModel();
            $hero = $model->find($id);

            if (!$hero) {
                return redirect()->back()->with('errors', ['Record not found.']);
            }

            $image = $this->request->getFile('banner_image');
            $imageName = $hero['banner_image']; // keep old unless new uploaded

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);
            }

            $model->update($id, [
                'title' => $this->request->getPost('title'),
                'subtitle' => $this->request->getPost('subtitle'),
                'button_text' => $this->request->getPost('button_text'),
                'button_link' => $this->request->getPost('button_link'),
                'banner_image' => $imageName
            ]);

            return redirect()->back()->with('success', 'Hero section updated successfully.');
        }

        public function save_admission()
        {
            $model = new AdmissionModel();
            $image = $this->request->getFile('image');
            $imageName = null;

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);
            }

            $model->insert([
                'title' => $this->request->getPost('title'),
                'overview' => $this->request->getPost('overview'),
                'image' => $imageName,
            ]);

            return redirect()->back()->with('success', 'Admission information added successfully.');
        }

        public function delete_admission($id)
        {
            $model = new AdmissionModel();
            $record = $model->find($id);

            if ($record && !empty($record['image'])) {
                $path = FCPATH . 'front_end/assets/img/' . $record['image'];
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'Admission information deleted successfully.');
        }

        public function edit_admission($id)
        {
            $model = new AdmissionModel();
            $existing = $model->find($id);

            if (!$existing) {
                return redirect()->back()->with('errors', ['Record not found']);
            }

            $image = $this->request->getFile('image');
            $imageName = $existing['image'];

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);
            }

            $model->update($id, [
                'title' => $this->request->getPost('title'),
                'overview' => $this->request->getPost('overview'),
                'image' => $imageName
            ]);

            return redirect()->back()->with('success', 'Admission information updated successfully.');
        }

        public function save_about()
        {
            $model = new AboutUsModel();

            $image = $this->request->getFile('image');
            $imageName = null;

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);
            }

            $model->insert([
                'title'    => $this->request->getPost('title'),
                'overview' => $this->request->getPost('overview'),
                'image'    => $imageName,
            ]);

            return redirect()->back()->with('success', 'About Us content added successfully.');
        }

        public function delete_about($id)
        {
            $model = new AboutUsModel();
            $record = $model->find($id);

            if ($record && !empty($record['image'])) {
                $path = FCPATH . 'front_end/assets/img/' . $record['image'];
                if (file_exists($path)) {
                    unlink($path); // delete image file
                }
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'About Us content deleted.');
        }

        public function edit_about($id)
        {
            $model = new AboutUsModel();
            $data = $model->find($id);

            if (!$data) {
                return redirect()->back()->with('errors', ['Record not found']);
            }

            $image = $this->request->getFile('image');
            $imageName = $data['image']; // keep existing unless new uploaded

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);
            }

            $model->update($id, [
                'title'    => $this->request->getPost('title'),
                'overview' => $this->request->getPost('overview'),
                'image'    => $imageName
            ]);

            return redirect()->back()->with('success', 'About Us content updated successfully.');
        }

        public function save_join()
        {
            $model = new WhyJoinBvceModel();
            $image = $this->request->getFile('image');
            $imageName = null;

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);
            }

            $model->insert([
                'section_type' => 'content',
                'title'        => $this->request->getPost('title'),
                'heading'      => $this->request->getPost('heading'),
                'overview'     => $this->request->getPost('overview'),
                'image'        => $imageName,
            ]);

            return redirect()->back()->with('success', 'Content added successfully.');
        }

        public function delete_join($id)
        {
            $model = new WhyJoinBvceModel();
            $record = $model->find($id);

            if ($record && !empty($record['image'])) {
                $path = FCPATH . 'front_end/assets/img/' . $record['image'];
                if (file_exists($path)) {
                    unlink($path); // delete the image
                }
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'Record deleted successfully.');
        }

        public function edit_join($id)
        {
            $model = new WhyJoinBvceModel();
            $record = $model->find($id);

            if (!$record) {
                return redirect()->back()->with('errors', ['Record not found.']);
            }

            $image = $this->request->getFile('image');
            $imageName = $record['image']; // default to existing

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);
            }

            $model->update($id, [
                'title'    => $this->request->getPost('title'),
                'heading'  => $this->request->getPost('heading'),
                'overview' => $this->request->getPost('overview'),
                'image'    => $imageName
            ]);

            return redirect()->back()->with('success', 'Content updated successfully.');
        }

        public function save_join_pdf()
        {
            $model = new WhyJoinBvceModel();
            $image = $this->request->getFile('image');

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);

                $model->insert([
                    'section_type' => 'image',
                    'image'        => $imageName,
                ]);
            }

            return redirect()->back()->with('success', 'Image added successfully.');
        }

        public function edit_join_image($id)
        {
            $model = new WhyJoinBvceModel();
            $record = $model->find($id);

            if (!$record) {
                return redirect()->back()->with('errors', ['Image record not found.']);
            }

            $image = $this->request->getFile('image');
            $imageName = $record['image']; // Keep old if not updated

            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('front_end/assets/img', $imageName);
            }

            $model->update($id, [
                'image'        => $imageName,
                'section_type' => 'image' // just to be safe
            ]);

            return redirect()->back()->with('success', 'Image updated successfully.');
        }

        public function delete_join_image($id)
        {
            $model = new WhyJoinBvceModel();
            $record = $model->find($id);

            if ($record && !empty($record['image'])) {
                $path = FCPATH . 'front_end/assets/img/' . $record['image'];
                if (file_exists($path)) {
                    unlink($path); // delete file from server
                }
            }

            $model->delete($id);
            return redirect()->back()->with('success', 'Image deleted successfully.');
        }

    public function save_infrastructure()
    {
        $model = new InfrastructureModel();
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

    public function update_infrastructure($id)
    {
        $model = new InfrastructureModel();
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

    public function delete_infrastructure($id)
    {
        $model = new InfrastructureModel();
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

    // functions for our unique methodologies
        public function save_our_u_methodology()
    {
        $model = new Our_unique_methodologies();
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

    public function update_our_u_methodology($id)
    {
        $model = new Our_unique_methodologies();
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

    public function delete_our_u_methodology($id)
    {
        $model = new Our_unique_methodologies();
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




    public function save_ques_ans()
    {
        $model = new FaqTestimonialModel();
        $model->insert([
            'section_type' => 'faq',
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
        ]);

        return redirect()->back()->with('success', 'FAQ added successfully.');
    }

    public function update_ques_ans($id)
    {
        $model = new FaqTestimonialModel();

        $data = [
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer')
        ];

        $model->update($id, $data);
        return redirect()->back()->with('success', 'FAQ updated successfully.');
    }

    public function delete_ques_ans($id)
    {
        $model = new FaqTestimonialModel();
        $model->delete($id);

        return redirect()->back()->with('success', 'FAQ deleted successfully.');
    }

    public function saveTestimonial()
    {
        $model = new FaqTestimonialModel();
        $model->insert([
            'section_type' => 'testimonial',
            'content' => $this->request->getPost('content'),
            'name' => $this->request->getPost('name'),
            'designation' => $this->request->getPost('designation'),
        ]);
        return redirect()->back()->with('success', 'Testimonial added successfully.');
    }

    public function updateTestimonial($id)
    {
        $model = new FaqTestimonialModel();
        $model->update($id, [
            'content' => $this->request->getPost('content'),
            'name' => $this->request->getPost('name'),
            'designation' => $this->request->getPost('designation'),
        ]);
        return redirect()->back()->with('success', 'Testimonial updated successfully.');
    }

    public function deleteTestimonial($id)
    {
        $model = new FaqTestimonialModel();
        $model->delete($id);
        return redirect()->back()->with('success', 'Testimonial deleted successfully.');
    }

     public function saveGallery()
    {
        $model = new GalleryModel();
        $file = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/gallery', $imageName);
        } else {
            $imageName = null;
        }

        $model->save([
            'title' => $this->request->getPost('title'),
            'image' => $imageName
        ]);

        return redirect()->back()->with('success', 'Gallery item added successfully.');
    }

    public function updateGallery($id)
    {
        $model = new GalleryModel();
        $data = $model->find($id);

        $file = $this->request->getFile('image');
        $imageName = $data['image'];

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/gallery', $imageName);
        }

        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'image' => $imageName
        ]);

        return redirect()->back()->with('success', 'Gallery item updated successfully.');
    }

    public function deleteGallery($id)
    {
        $model = new GalleryModel();
        $item = $model->find($id);

        if ($item && file_exists('uploads/gallery/' . $item['image'])) {
            unlink('uploads/gallery/' . $item['image']);
        }

        $model->delete($id);
        return redirect()->back()->with('success', 'Gallery item deleted successfully.');
    }









    }