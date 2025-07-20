<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    
}
