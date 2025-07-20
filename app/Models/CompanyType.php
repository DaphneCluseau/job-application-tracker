<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanyType extends Model
{
    //
    protected $fillable = ['company_types_id', 
        'company_types_name'
    ];
    public function company(): HasMany

    {

        return $this->hasMany(CompanyType::class);

    }
}
