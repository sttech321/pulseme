<?php
namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers_bio';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'customer_name', 'customer_email', 'customer_phone', 'customer_address', 'campaign_id', 'created_at', 'updated_at'
    ];

    public function getCustomersWithCampaigns()
    {
        $builder = $this->db->table('customers_bio');
        $builder->select('customers_bio.campaign_id, COUNT(customers_bio.campaign_id) AS match_count');
        $builder->join('campaign', 'customers_bio.campaign_id = campaign.id');
        $builder->groupBy('customers_bio.campaign_id');
        $query = $builder->get();
        return $query->getResult(); // Ensure this method returns the result
    }
    
}


