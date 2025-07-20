<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function company(): BelongsTo

    {

        return $this->belongsTo(Company::class, 'companies_id');

    }

    public function position(): HasOne

    {

        return $this->hasOne(Position::class, 'positions_id');

    }
}
