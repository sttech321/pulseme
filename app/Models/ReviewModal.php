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

    public function get_reviews_with_campaign($limit, $offset) {
        $sql = "
            SELECT reviews.*, campaign.name, campaign.department, campaign.employeeId
            FROM campaign
            RIGHT JOIN reviews ON reviews.campaignID = campaign.ID
            LIMIT $limit OFFSET $offset;
        ";
    
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
    public function get_total_reviews_count() {
        $sql = "
            SELECT COUNT(*) as count
            FROM campaign
            RIGHT JOIN reviews ON reviews.campaignID = campaign.ID
        ";
    
        $query = $this->db->query($sql);
        $result = $query->getRow();
        return $result->count;
    }
    public function get_reviews($id) {
        $sql = "
            SELECT reviews.*, campaign.name, campaign.department, campaign.employeeId
            FROM reviews
            LEFT JOIN campaign ON reviews.campaignID = campaign.ID
            WHERE reviews.ID = ?
        ";
    
        $query = $this->db->query($sql, [$id]);
        return $query->getRowArray(); 
    }
    
    public function get_reviews_campaignId($campaignID){
        $sql = "
        SELECT reviews.*, campaign.name, campaign.department, campaign.employeeId
        FROM reviews
        LEFT JOIN campaign ON reviews.campaignID = campaign.ID
        WHERE campaignID  = ?
    ";
    $query = $this->db->query($sql, [$campaignID]);
        return $query->getRowArray(); 
    }
    
    public function getReviewsByType($type)
    {
        return $this->where('reviewType', $type)->findAll();
    }

    public function get_campaign_name() {
        $sql = "
SELECT DISTINCT campaign.name, campaign.department, campaign.employeeId, campaign.ID
FROM campaign
LEFT JOIN reviews ON reviews.campaignID = campaign.ID;

        ";
    
        $query = $this->db->query($sql);
        return $query->getResultArray();
    }
    // public function get_total_reviews_count() {
    //     $sql = "SELECT COUNT(*) as total FROM reviews";
    //     $query = $this->db->query($sql);
    //     $result = $query->getRow();
    //     return $result->total;
    // }
     
}

