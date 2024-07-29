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

    public function getEnumValues() {
        $db = \Config\Database::connect();
        $sql = "SHOW COLUMNS FROM {$this->table} LIKE 'reviewType'";
        $builder = $db->query($sql);
    
        // Fetch the query result
        $result = $builder->getResultArray();
        $row = $builder->getRow();
    
        // Extract enum values if row is valid
        if ($row) {
            preg_match_all("/'([^\']+)'/", $row->Type, $matches);
            $enumValues = $matches[1];
        } else {
            $enumValues = [];
        }
    
        // Return both the query and the enum values
        return [
            'query' => $sql,
            'enumValues' => $enumValues
        ];
    }

    public function getReviewsByType($type)
    {
        return $this->where('reviewType', $type)->findAll();
    }

}