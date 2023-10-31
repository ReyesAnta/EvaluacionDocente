<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationsQuestion extends Model
{
    use HasFactory;

    function qualification(){
        return $this->belongsTo(Qualification::class);
    }
}
