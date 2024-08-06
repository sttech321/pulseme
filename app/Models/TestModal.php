<?php
namespace App\Models;

use CodeIgniter\Model;

class TestModal extends Model
{
    protected $table = 'customers_bio';
    protected $primaryKey = 'id';
    protected $allowedFields = ['customer_name', 'customer_email', 'customer_phone', 'customer_address', 'campaignid', 'employeeid', 'created_at', 'updated_at'];
}
