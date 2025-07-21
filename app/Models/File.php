<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class File extends Model
{
    //
    protected $fillable = ['files_url', 
        'files_name'
    ];

    public function applicationFile(): HasMany

    {

        return $this->hasMany(ApplicationFile::class, 'application_files_id');

    }
}
