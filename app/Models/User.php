<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'phone',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //  Relationships   ---------------------------------------------------------------------------
    public function getGenderAttribute($gender)
    {
        return array_flip(config('amal.gender'))[$gender];
    }
    public function setGenderAttribute($gender)
    {
        $this->attributes['gender'] = config('amal.gender')[$gender];
    }
    public function getStatusAttribute($status)
    {
        return array_flip(config('amal.status'))[$status];
    }
    public function setStatusAttribute($status)
    {
        $this->attributes['status'] = config('amal.status')[$status];
    }

}
