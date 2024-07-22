<?php
namespace App\Models;
use CodeIgniter\Model;
class CampaignModel extends Model
{    
    protected $table;
    protected $allowedFields;
    protected $primaryKey;
    protected $useTimestamps = true;

    public function __construct() {
        parent::__construct();
        $this->table = getenv('CAMPAIGN_TABLE');
        $this->primaryKey = getenv('CAMPAIGN_TABLE_PRIMARY_KEY');
        $fields = getenv('CAMPAIGN_FIELD');
        $this->allowedFields = explode(',', $fields);
    }
}