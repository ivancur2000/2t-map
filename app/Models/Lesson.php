<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //relacion 1 a 1
    public function descriptions(){
        return $this->hasOne('App\Models\Description');
    }
    // relacion 1 a n inversa
    public function chapters(){
        return $this->belongsTo('App\Models\Chapter');
    }
    public function plataforms(){
        return $this->belongsTo('App\Models\Plataform');
    }
    // relacion n a n 
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
    // relacion 1 a 1 polimorfica
    public function resource(){
        return $this->morphOne('App\Models\Resource','resourceable');
    }
    //relacion 1 a n polimorfica
    public function comments(){
        return $this->morphOne('App\Models\Comment','commentable');
    }
    public function likes(){
        return $this->morphOne('App\Models\Like','likeable');
    }
}
