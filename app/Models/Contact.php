<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // !! WARNING : Use Phone package (already installed) for the validation of phone numbers !!
    protected $fillable = ['contacts_lastname', 
        'contacts_firstname', 
        'contacts_phone_number', 
        'contacts_email', 
        'company_id', 
        'position_id'
    ];
}
