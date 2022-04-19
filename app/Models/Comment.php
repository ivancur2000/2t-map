<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function commentable(){
        return $this->morphTo();
    }
    //relacion 1 a n inversa
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
    //relacion 1 a n polimorfica
    public function comments() {
        return $this->morphMany('App\Models\Comment','commentable');
    }
    public function likes() {
        return $this->morphMany('App\Models\Like','likeable');
    }
}
