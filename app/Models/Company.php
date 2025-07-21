<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    //
    protected $fillable = ['companies_city', 
        'companies_size', 
        'company_types_id'
    ];
    
    public function companyType(): BelongsTo

    {

        return $this->belongsTo(CompanyType::class, 'company_types_id');

    }

    public function companySector(): HasMany

    {

        return $this->HasMany(CompanySector::class, 'company_sectors_id');

    }

}
