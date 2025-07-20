<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    //
    protected $fillable = ['positions_name'];

    public function contact(): HasMany

    {

        return $this->hasMany(Contact::class, 'contacts_id');

    }

    public function application(): HasMany

    {

        return $this->hasMany(Application::class, 'applications_id');

    }
}
