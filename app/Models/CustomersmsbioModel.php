<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomersmsbioModel extends Model
{
    protected $table = "customersmsbio";
    protected $primaryKey = "id";
    protected $allowedFields = ["id","campaign_id","contact_number","reference","message_id","sms_count","used_credits","sent_at","status","employeeid"];

}
