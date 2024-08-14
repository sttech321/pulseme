<?php
namespace App\Models;

use CodeIgniter\Model;

class ContactcardModal extends Model
{
    protected $table;
    protected $primaryKey;
    protected $allowedFields;

    public function __construct()
    {
        parent::__construct();

        // Fetch configuration from .env
        $this->table = getenv('contactcard.table');
        $this->primaryKey = getenv('contactcard.primarkey');
        
        // Fetch and convert the allowed fields from a comma-separated string to an array
        $allowedFields = getenv('contactcard.field');
        $this->allowedFields = $allowedFields ? explode(',', $allowedFields) : [];
    }

}