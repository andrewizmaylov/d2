<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function phones()
    {
        return $this->hasMany('App\Phone');
    }

    public function ocupation()
    {
        return $this->belongsToMany('App\Ocupation')->withTimestamps();
    }

    public function birthday() 
    {
        return $this->hasOne('App\Birthday');
    }

    public function groupe()
    {
        return $this->belongsTo('App\Groupe');
    }
}
