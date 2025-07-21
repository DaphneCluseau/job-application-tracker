<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserSkill extends Model
{
    //
    protected $fillable = ['user_id', 
        'skill_id'
    ];

    public function user(): HasMany

    {

        return $this->hasMany(User::class, 'users_id');

    }

    public function skill(): HasMany

    {

        return $this->hasMany(Skill::class, 'skills_id');

    }
}
