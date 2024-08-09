<?php 
namespace App\Models;

use CodeIgniter\Model;

class CampaignModel extends Model
{
    protected $table;
    protected $primaryKey;
    protected $allowedFields;

    public function __construct()
    {
        parent::__construct();

        // Fetch configuration from .env
        $this->table = getenv('campaign.table');
        $this->primaryKey = getenv('campaign.primaryKey');
        
        // Fetch and convert the allowed fields from a comma-separated string to an array
        $allowedFields = getenv('campaign.allowedFields');
        $this->allowedFields = $allowedFields ? explode(',', $allowedFields) : [];
    }
    public function getCampaignsWithSentiment()
    {
        $builder = $this->db->table('campaign');
        
        // Select columns from campaign and aggregate counts from reviews and customers_bio
        $builder->select('
            campaign.*, 
            COALESCE(SUM(CASE WHEN reviews.sentiment = "positive" THEN 1 ELSE 0 END), 0) AS positive_count,
            COALESCE(SUM(CASE WHEN reviews.sentiment = "negative" THEN 1 ELSE 0 END), 0) AS negative_count,
            COALESCE(SUM(CASE WHEN customers_bio.formstatus = "bio" THEN 1 ELSE 0 END), 0) AS bio_count,
            COALESCE(SUM(CASE WHEN customers_bio.formstatus = "pulsecheck" THEN 1 ELSE 0 END), 0) AS pulsecheck_count
        ');
        
        // Perform LEFT JOINs to include data from reviews and customers_bio tables
        $builder->join('reviews', 'reviews.campaignID = campaign.id', 'left');
        $builder->join('customers_bio', 'customers_bio.campaignID = campaign.id', 'left');
        
        // Group by campaign id to aggregate the data correctly
        $builder->groupBy('campaign.id');
        
        // Execute the query
        $query = $builder->get();
    
        // Return the result as an array of objects
        return $query->getResult();
    }
    
    public function getUniqueDepartments()
    {
        $builder = $this->db->table('campaign c');
        $builder->select('
            c.department,
            COUNT(CASE WHEN r.sentiment = \'positive\' THEN 1 END) AS positive_count,
            COUNT(CASE WHEN r.sentiment = \'negative\' THEN 1 END) AS negative_count
        ');
        $builder->join('reviews r', 'c.id = r.campaignID', 'left');
        $builder->groupBy('c.department'); // Group by department to aggregate counts
    
        // Execute the query and return results
        $query = $builder->get();
        return $query->getResult();
    }
    
    
}
