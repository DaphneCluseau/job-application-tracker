<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkMode extends Model
{
    //
    protected $fillable = ['work_modes_name'];

    public function application(): HasMany

    {

        return $this->hasMany(Application::class, 'applications_id');

    }
}
