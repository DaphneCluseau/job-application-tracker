<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sector extends Model
{
    //
    protected $fillable = ['sectors_name'];

    public function companySector(): HasMany

    {

        return $this->HasMany(CompanySector::class, 'company_sectors_id');

    }
}
