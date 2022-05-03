<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //relacion 1 a n inversa
    public function stories(){
        return $this->belongsTo('App\Models\Story');
    }
}
