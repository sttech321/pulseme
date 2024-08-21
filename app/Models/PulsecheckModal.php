<?php
namespace App\Models;

use CodeIgniter\Model;

class PulsecheckModal extends Model
{
    protected $table;
    protected $primaryKey;
    protected $allowedFields = [];

    public function __construct()
    {
        // Call the parent constructor
        parent::__construct();

        // Load environment variables
        $this->table = getenv('PULSECHECK_TABLE');
        $this->primaryKey = getenv('PULSECHECK_PRIMARY_KEY');
        $this->allowedFields = explode(',', getenv('PULSECHECK_ALLOWED_FIELDS'));
    }

}