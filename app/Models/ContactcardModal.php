<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactcardModal extends Model
{
    protected $table = 'contact_card';
    protected $primarykey = 'id';
    protected $allowedFields = [
        'id',
        'primary_number',
        'email',
        'sms_number',
        'searchterm',
        'notes',
        'created_at',
        'updated_at',
        'image',
        'time',
    ];

}