<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    //relacion 1 a 1
    public function profile(){
        return $this->hasOne('App\Models\Profile');
    }
    //relacion 1 a n
    public function Stories_dictated(){
        return $this->hasMany('App\Models\Story');
    }
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }
    //relacion n a n
    public function Stories_enrolled(){
        return $this->belongsToMany('App\Models\Story');
    }
    public function lessons(){
        return $this->belongsToMany('App\Models\Lesson');
    }
}
