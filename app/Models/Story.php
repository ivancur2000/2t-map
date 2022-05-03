<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $guarded = ['id','status'];

    protected $table = 'stories';

    const BORRADOR=1;
    const REVISION=2;
    const PUBLICADO=3;
    //realcion1 a n
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }
    //relacion 1 a n inversa
    public function user_teacher() {
        return $this->belongsTo('App\Models\User','User_id');
    }
      public function level(){
        return $this->belongsTo('App\Models\Level');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function requirements(){
        return $this->belongsTo('App\Models\Requirement');
    }
    public function goals(){
        return $this->belongsTo('App\Models\Goal');
    }
    public function audiences(){
        return $this->belongsTo('App\Models\Audience');
    }
    public function chapters(){
        return $this->belongsTo('App\Models\Chapter');
    }
    //relacion n a n
    public function users_students() {
        return $this->belongsToMany('App\Models\User');
    }
    // relacion 1 a 1 polimorfica
    public function resource(){
        return $this->morphOne('App\Models\Resource','resourceable');
    }
    public function lessons(){
        return $this->hasManyThrough('App\Models\Lesson','App\Models\Chapter');
    }
}
