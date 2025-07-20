<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    /**

     * The table associated with the model.

     *

     * @var string

     */

    protected $fillable = ['applications_date', 
        'applications_comment', 
        'applications_job_type', 
        'applications_skill_id', 
        'company_id', 
        'user_id',
        'work_mode_id',
        'status_id'
    ];

    public function company(): HasOne

    {

        return $this->hasOne(Company::class, 'company_id');

    }

    public function applicationSkills(): HasMany

    {

        return $this->hasMany(ApplicationSkill::class, 'company_id');

    }

    public function position(): HasOne

    {

        return $this->hasOne(Position::class, 'positions_id');

    }

    public function user(): HasOne

    {

        return $this->hasOne(User::class, 'users_id');

    }

    public function workMode(): HasOne

    {

        return $this->hasOne(WorkMode::class, 'work_modes_id');

    }

    public function status(): HasOne

    {

        return $this->hasOne(Status::class, 'statuses_id');

    }
    
}
