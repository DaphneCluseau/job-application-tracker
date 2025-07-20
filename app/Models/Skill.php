<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skill extends Model
{
    //
    protected $fillable = ['skills_name'];

    public function userSkill(): HasMany

    {

        return $this->hasMany(UserSkill::class, 'user_skills_id');

    }

    public function applicationSkill(): HasMany

    {

        return $this->hasMany(ApplicationSkill::class, 'application_skills_id');

    }
}
