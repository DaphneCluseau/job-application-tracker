<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobInterviewContact extends Model
{
    //
    protected $fillable = ['company_id', 
        'job_interview_id'
    ];
}
