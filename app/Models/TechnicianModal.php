<?php

namespace App\Models;

use CodeIgniter\Model;

class TechnicianModal extends Model
{
    protected $table;
    protected $allowedFields;

    public function __construct()
    {
        parent::__construct();
        // Load table name from environment variable
        $this->table = getenv('campaign.table');
        // Load allowed fields from environment variable and convert to array
        $fields = getenv('campaign.allowedFields');
        $this->allowedFields = explode(',', $fields);
    }

   
    public function getTechnicianImage($technicianId)
    {
        return $this->where('id', $technicianId)->first();
    }

    public function getTechniciansBySearch($search)
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
        
        // Add the search conditions before grouping
        $builder->groupStart();
        $builder->like('campaign.name', $search);
        $builder->orLike('campaign.department', $search);
        $builder->groupEnd();
    
        $builder->groupBy('campaign.id');
        $query = $builder->get();
    
        return $query->getResult();  // Use getResult() to get the results
    }

}
