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

    public function getEnumValues()
    {
        $db = \Config\Database::connect();
        
        // Define the columns to fetch enum values from
        $columns = ['reviewType', 'sentiment'];
        $enumValues = [];
        $queries = [];

        foreach ($columns as $column) {
            // Query to get column details
            $sql = "SHOW COLUMNS FROM {$this->table} LIKE '$column'";
            $queries[] = $sql;
            $builder = $db->query($sql);

            // Fetch the query result
            $row = $builder->getRow();
            
            // Extract enum values if row is valid
            if ($row) {
                preg_match_all("/'([^\']+)'/", $row->Type, $matches);
                $enumValues[$column] = $matches[1];
            } else {
                $enumValues[$column] = [];
            }
        }

        // Return the queries and the enum values for each column
        return [
            'enumValues' => $enumValues
        ];
    }


    public function getReviewsByType($type)
    {
        return $this->where('reviewType', $type)->findAll();
    }

}