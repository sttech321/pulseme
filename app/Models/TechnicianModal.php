<?php

namespace App\Models;

use CodeIgniter\Model;

class technicianModal extends Model
{
    protected $table;
    protected $allowedFields;

    public function __construct()
    {
        parent::__construct();
        // Load table name from environment variable
        $this->table = getenv('CAMPAIGN_TABLE');
        // Load allowed fields from environment variable and convert to array
        $fields = getenv('CAMPAIGN_FIELD');
        $this->allowedFields = explode(',', $fields);
    }

   
    public function getTechnicianImage($technicianId)
    {
        return $this->where('id', $technicianId)->first();
    }

}