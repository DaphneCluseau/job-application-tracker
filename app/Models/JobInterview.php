<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobInterview extends Model
{
    //
    protected $fillable = ['job_interviews_date', 
        'job_interviews_communication_method', 
        'job_interviews_comment', 
        'job_interviews_direct_contact', 
        'application_id', 
        'job_interview_contacts_id'
    ];

    public function application(): HasOne

    {

        return $this->hasOne(Application::class, 'applications_id');

    }

    public function jobInterviewContact(): HasMany

    {

        return $this->hasMany(JobInterviewContact::class, 'job_interview_contacts_id');

    }
}
