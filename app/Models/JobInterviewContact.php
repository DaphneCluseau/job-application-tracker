<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobInterviewContact extends Model
{
    //
    protected $fillable = ['company_id', 
        'job_interview_id'
    ];

    public function jobInterview(): HasMany

    {

        return $this->hasMany(JobInterview::class, 'job_interviews_id');

    }

    public function contact(): HasMany

    {

        return $this->hasMany(Contact::class, 'contacts_id');

    }
}
