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
}
