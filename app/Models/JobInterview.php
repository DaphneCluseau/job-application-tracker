<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
