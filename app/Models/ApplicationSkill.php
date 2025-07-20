<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationSkill extends Model
{
    //
    protected $fillable = [
        'application_id', 
        'skill_id'
    ];

    public function application(): HasMany

    {

        return $this->hasMany(Application::class, 'applications_id');

    }

    public function skill(): HasMany

    {

        return $this->hasMany(Skill::class, 'skills_id');

    }
}
