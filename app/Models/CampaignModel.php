<?php
namespace App\Models;
use CodeIgniter\Model;
class CampaignModel extends Model
{    
    protected $table;
    protected $allowedFields;
    protected $primaryKey;
    protected $useTimestamps = true;

    // Construc Function
    public function __construct() {
        parent::__construct();
        // Load table name from environment variable
        $this->table = getenv('CAMPAIGN_TABLE');
        // Load allowed fields from environment variable and convert to array
        $fields = getenv('CAMPAIGN_FIELD');
        $this->primaryKey = getenv('CAMPAIGN_TABLE_PRIMARY_KEY');
        $this->allowedFields = explode(',', $fields);
    }
}