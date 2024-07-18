<?php
namespace App\Models;

use CodeIgniter\Model;

class GooglereviewModal extends Model
{
    protected $table;
    protected $allowedFields;
    protected $primaryKey;
    protected $useTimestamps = true;

    public function __construct() {
        parent::__construct();
        $this->table = getenv('GOOGLE_REVIEW_TABLE');
        $this->primaryKey = getenv('GOOGLE_REVIEW_PRIMARY_KEY');
        $fields = getenv('GOOGLE_REVIEW_FIELD');
        $this->allowedFields = explode(',', $fields);
    }

}
