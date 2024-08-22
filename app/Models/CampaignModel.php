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
        $builder = $this->db->table($this->table);

        // Select columns and aggregate counts
        $builder->select('
            campaign.*, 
            COUNT(customers_bio.id) AS total_sends,
            COALESCE(SUM(CASE WHEN customers_bio.formstatus = "bio" THEN 1 ELSE 0 END), 0) AS bio_count,
            COALESCE(SUM(CASE WHEN customers_bio.formstatus = "pulsecheck" THEN 1 ELSE 0 END), 0) AS pulsecheck_count

        ');

        // Perform LEFT JOIN to include data from customers_bio and reviews tables
        $builder->join('customers_bio', 'campaign.ID = customers_bio.campaignid', 'left');


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


