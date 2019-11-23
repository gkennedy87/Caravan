<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Database relationships

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function contacts() {
        return $this->hasMany('App\Contact');
    }
    public function tasks() {
        return $this->hasMany('App\Task');
    }
    //Setting up API token for users
    public function setNewApiToken() 
    {
        $this->api_token = Str::uuid();
        $this->save();
    }

}
