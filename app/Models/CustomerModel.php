<?php
namespace App\Models;
use CodeIgniter\Model;
class CustomerModel extends Model
{    
    protected $table;
    protected $allowedFields;
    protected $primaryKey;

    public function __construct() {
        parent::__construct();
        $this->table = getenv('CUSTOMER_TABLE');
        $this->primaryKey = getenv('CUSTOMER_TABLE_PRIMARY_KEY');
        $fields = getenv('CUSTOMER_FIELD');
        $this->allowedFields = explode(',', $fields);
    }
}