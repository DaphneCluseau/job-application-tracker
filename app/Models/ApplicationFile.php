<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicationFile extends Model
{
    //
    protected $fillable = ['application_id', 
        'file_id'
    ];

    public function file(): HasMany

    {

        return $this->hasMany(File::class, 'files_id');

    }

    public function application(): HasMany

    {

        return $this->hasMany(Application::class, 'applications_id');

    }
}
