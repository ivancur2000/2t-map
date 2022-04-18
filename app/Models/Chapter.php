<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    //relacion 1 a n inversa
    public function lessons(){
      return $this->hasMany('App\Models\Lesson');
    }
      //relacion 1 a n inversa
      public function stories(){
        return $this->belongsTo('App\Models\Stories');
    }
}
