<?php 
namespace AppModels;

use CodeIgniterModel;
use CodeIgniterDatabase\ConnectionInterface;

class CampaignModel extends Model {
    
    protected $db;
    public function __construct(ConnectionInterface &$db) {
        $this->db =& $db;
    }

    function add($data) {
        return $this->db
                        ->table('user_info')
                        ->insert($data);
    }
    
}