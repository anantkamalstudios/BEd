<?php

namespace App\Models\Home;

use CodeIgniter\Model;

class SalientFeaturesModel extends Model
{
    protected $table = 'salient_features_page';
    protected $primaryKey = 'id';
    protected $allowedFields = ['section_type', 'title', 'subtitle', 'image', 'overview'];
}