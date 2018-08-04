<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class birthday extends Model
{
    protected $fillable = [
    	'bday', 'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }


}
