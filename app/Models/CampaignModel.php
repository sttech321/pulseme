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

    public function getCampaignsWithSentiment($fromDate = null, $toDate = null)
    {
        $builder = $this->db->table('campaign');
    
        // Select columns from campaign and aggregate counts
        $builder->select('
            campaign.*, 
            bio_stats.total_sends,
            bio_stats.bio_count,
            bio_stats.pulsecheck_count,
            COALESCE(SUM(CASE WHEN reviews.sentiment = "positive" THEN 1 ELSE 0 END), 0) AS positive_count,
            COALESCE(SUM(CASE WHEN reviews.sentiment = "negative" THEN 1 ELSE 0 END), 0) AS negative_count
        ');
    
        // Subquery to calculate bio and pulsecheck counts
        $subquery = $this->db->table('customers_bio')
            ->select('
                customers_bio.campaignid, 
                COUNT(customers_bio.id) AS total_sends,
                SUM(CASE WHEN customers_bio.formstatus = "bio" THEN 1 ELSE 0 END) AS bio_count,
                SUM(CASE WHEN customers_bio.formstatus = "pulsecheck" THEN 1 ELSE 0 END) AS pulsecheck_count
            ')
            ->groupBy('customers_bio.campaignid')
            ->getCompiledSelect();
    
        // Join with subquery and reviews table
        $builder->join("($subquery) AS bio_stats", 'campaign.ID = bio_stats.campaignid', 'left');
        $builder->join('reviews', 'campaign.ID = reviews.campaignID', 'left');
    
        // Filter by date range if provided
        if ($fromDate && $toDate) {
            $builder->where('campaign.created_at >=', $fromDate . ' 00:00:00');
            $builder->where('campaign.created_at <=', $toDate . ' 23:59:59');
        }
    
        // Group by campaign ID to aggregate the data correctly
        $builder->groupBy('campaign.ID');
    
        // Fetch the result
        $query = $builder->get();
    
        // Return the result as an array of objects
        return $query->getResult();
    }    



    public function getUniqueDepartments($fromDate = null, $toDate = null)
    {
        $builder = $this->db->table('campaign c');
        $builder->select('
            c.department,
            COUNT(CASE WHEN r.sentiment = \'positive\' THEN 1 END) AS positive_count,
            COUNT(CASE WHEN r.sentiment = \'negative\' THEN 1 END) AS negative_count
        ');
        $builder->join('reviews r', 'c.id = r.campaignID', 'left');
        
        // Apply date filtering if provided
        if ($fromDate && $toDate) {
            $builder->where('c.created_at >=', $fromDate . ' 00:00:00');
            $builder->where('c.created_at <=', $toDate . ' 23:59:59');
        }

        $builder->groupBy('c.department'); // Group by department to aggregate counts

        // Execute the query and return results
        $query = $builder->get();
        return $query->getResult();
    }
}


