<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plataform extends Model
{
    use HasFactory;
    //relacion 1 a n
    public function lessons(){
        return $this->hasMany('App\Models\Lesson');
    }
}
