<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    //
    protected $fillable = ['companies_city', 
        'companies_size', 
        'company_types_id'
    ];
    
    public function companyType(): HasOne

    {

        return $this->hasOne(CompanyType::class, 'company_types_id');

    }
}
