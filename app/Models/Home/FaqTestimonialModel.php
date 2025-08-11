<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class FaqTestimonialModel extends Model
{
    protected $table = 'faq_testimonial';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'section_type', 'question', 'answer', 'content', 'name', 'designation'
    ];

    protected $useTimestamps = true;
}