<?php
namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table;
    protected $primaryKey;
    protected $allowedFields;

    public function __construct()
    {
        parent::__construct();
        
        $this->table = getenv('DB_CUSTOMER_TABLE');
        $this->primaryKey = getenv('DB_CUSTOMER_PRIMARY_KEY');
        $this->allowedFields = explode(',', getenv('DB_CUSTOMER_FIELDS'));
    }

    public function getCustomersWithCampaigns()
    {
        $builder = $this->db->table('customers_bio');
        $builder->select('customers_bio.campaign_id, COUNT(customers_bio.campaign_id) AS match_count');
        $builder->join('campaign', 'customers_bio.campaign_id = campaign.ID');
        $builder->groupBy('customers_bio.campaign_id');
        $query = $builder->get();
        return $query->getResult(); // Ensure this method returns the result
    } 
}
