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
}
