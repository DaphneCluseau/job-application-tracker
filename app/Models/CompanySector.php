<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanySector extends Model
{
    //
    protected $fillable = ['company_id',
    'sector_id'
    ];
    
    public function company(): HasMany

    {

        return $this->hasMany(Company::class, 'companies_id');

    }

    public function sector(): HasMany

    {

        return $this->hasMany(Sector::class, 'sectors_id');

    }
}

