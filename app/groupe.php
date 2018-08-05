<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupe extends Model
{
    public function users()
    {
    	return $this->hasMany('App\User');
    }

    public function masters()
    {
    	return $this->hasMany('App\Master');
    }
}
