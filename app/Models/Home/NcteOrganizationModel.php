<?php

namespace App\Models;

use CodeIgniter\Model;

class NcteOrganizationModel extends Model
{
    protected $table = 'ncte_organization_page';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'hero_title',
        'button_name',
        'hero_image',
        'pdf'
    ];

    public function getPageData()
    {
        return $this->where('id', 1)->first();
    }

    public function savePageData($data)
    {
        if ($this->find(1)) {
            return $this->update(1, $data);
        } else {
            $data['id'] = 1;
            return $this->insert($data);
        }
    }
}
