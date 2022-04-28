<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //relacion 1 a n inversa 
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function stories(){
        return $this->belongsTo('App\Models\Stories');
    }

}
