<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class WhyJoinBvceModel extends \CodeIgniter\Model
{
    protected $table = 'why_join_bvce';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'heading', 'overview', 'image'];
    protected $useTimestamps = true;
}