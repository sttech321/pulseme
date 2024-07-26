<?php

namespace App\Models;

use CodeIgniter\Model;

class TechnicianModal extends Model
{
    protected $table;
    protected $allowedFields;

    public function __construct()
    {
        parent::__construct();
        // Load table name from environment variable
        $this->table = getenv('campaign.table');
        // Load allowed fields from environment variable and convert to array
        $fields = getenv('campaign.allowedFields');
        $this->allowedFields = explode(',', $fields);
    }

   
    public function getTechnicianImage($technicianId)
    {
        return $this->where('id', $technicianId)->first();
    }

}