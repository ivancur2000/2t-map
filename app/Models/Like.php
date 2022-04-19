<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    const LIKE=1;
    const DISLIKE=2;
    public function likeable(){
        return $this->morphTo();
    }
    //relacion 1 a n inversa
    public function user() {
        return $this->morphTo('App\Models\User');
    }
}
