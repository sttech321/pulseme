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

        // Fetch table name and primary key from the .env file
        $this->table = env('MODEL_TABLE');
        $this->primaryKey = env('MODEL_PRIMARY_KEY');
        // Fetch allowed fields from the .env file
        $fields = env('MODEL_ALLOWED_FIELDS');

        // Convert the comma-separated string to an array and set it as allowedFields
        if ($fields) {
            $this->allowedFields = explode(',', $fields);
        } else {
            // Handle the case where the environment variable is not set or is empty
            throw new \Exception('MODEL_ALLOWED_FIELDS environment variable is not set or is empty.');
        }
    }

    public function getCustomersWithCampaigns()
    {
        $builder = $this->db->table('customers_bio');
        $builder->select('customers_bio.campaign_id, COUNT(customers_bio.campaign_id) AS match_count');
        $builder->join('campaign', 'customers_bio.campaign_id = campaign.ID');
        $builder->groupBy('customers_bio.campaignid');
        $query = $builder->get();
        return $query->getResult();
    } 
}
