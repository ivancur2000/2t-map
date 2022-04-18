<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    //realcion inversa 1 a 1
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
