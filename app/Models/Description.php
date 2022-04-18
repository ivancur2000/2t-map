<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    //relacion 1 a 1 inversa
    public function lessons(){
        return $this->belongsTo('App\Models\Lesson');
    }
}
