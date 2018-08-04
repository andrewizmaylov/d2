<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ocupation extends Model
{
    protected $fillable = ['ocupation'];

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
