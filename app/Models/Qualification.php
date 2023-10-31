<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Qualification extends Model
{
    use HasFactory,SoftDeletes;

    function user(){
        return $this->belongsTo(User::class);
    }

    function evaluador(){
        return $this->belongsTo('App\Models\User','evaluador_id','id');
    }
}
