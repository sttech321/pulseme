<?php

namespace App\Models;

use CodeIgniter\Model;

class DispatchModal extends Model
{
    protected $table;
    protected $allowedFields;

    public function __construct()
    {
        parent::__construct();
        // Load table name from environment variable
        $this->table = getenv('DISPATCH_TABLE');
        // Load allowed fields from environment variable and convert to array
        $fields = getenv('DISPATCH_FIELD');
        $this->allowedFields = explode(',', $fields);
    }

    public function insert_campaign(){
        
    }

}