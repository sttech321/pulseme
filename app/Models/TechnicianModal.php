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
        $builder->select('
            campaign.*, 
            COALESCE(SUM(CASE WHEN reviews.sentiment = "positive" THEN 1 ELSE 0 END), 0) AS positive_count,
            COALESCE(SUM(CASE WHEN reviews.sentiment = "negative" THEN 1 ELSE 0 END), 0) AS negative_count,
            COALESCE(SUM(CASE WHEN customers_bio.formstatus = "bio" THEN 1 ELSE 0 END), 0) AS bio_count,
            COALESCE(SUM(CASE WHEN customers_bio.formstatus = "pulsecheck" THEN 1 ELSE 0 END), 0) AS pulsecheck_count
        ');
        $builder->join('reviews', 'reviews.campaignID = campaign.id', 'left');
        $builder->join('customers_bio', 'customers_bio.campaignID = campaign.id', 'left');
        
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
