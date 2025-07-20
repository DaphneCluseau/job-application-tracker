<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    /**

     * The table associated with the model.

     *

     * @var string

     */

    protected $fillable = ['statuses_name'];

    public function application(): HasMany

    {

        return $this->hasMany(Application::class, 'applications_id');

    }
}
