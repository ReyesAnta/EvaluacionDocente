<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable,SoftDeletes,HasApiTokens;

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    function profile(){
        return $this->belongsTo(Profile::class);
    }

    function position(){
        return $this->belongsTo(Position::class);
    }

    function course(){
        return $this->belongsTo(Course::class);
    }
}
