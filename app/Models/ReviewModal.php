<?php
namespace App\Models;
use CodeIgniter\Model;
class ReviewModal extends Model
{    
    protected $table;
    protected $allowedFields;
    protected $primaryKey;
    // protected $useTimestamps = true;

    public function __construct() {
        parent::__construct();
        $this->table = getenv('REVIEWS_TABLE');
        $this->primaryKey = getenv('REVIEWS_TABLE_PRIMARY_KEY');
        $fields = getenv('REVIEWS_FIELD');
        $this->allowedFields = explode(',', $fields);
        
    }
}