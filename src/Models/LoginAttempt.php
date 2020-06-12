<?php


namespace Salfade\LoginTracker\Models;

use Illuminate\Database\Eloquent\Model;

class LoginAttempt extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
