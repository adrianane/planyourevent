<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
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


    //create relation: a user has many posts
    public function posts() 
    {
        return $this->hasMany('App\Post');
    }

    //create relation:  auser has many locations
    //this method can be accessed as properties on the model: User::find($user_id)->locations
    public function locations()
    {
        return $this->hasMany('App\Location');
    }
}
