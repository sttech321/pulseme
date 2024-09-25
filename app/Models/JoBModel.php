<?php

namespace App\Models;

use CodeIgniter\Model;

class JoBModel extends Model
{
    protected $table = "Jobdetail";
    protected $allowedFields = ["id", "jobid", "callId", "customerName","jobClass","jobType","jobTypeDescription","created_at","updated_at"];
}
