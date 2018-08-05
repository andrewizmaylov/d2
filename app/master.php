<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master extends Model
{
    protected $count = 5203;
    protected $start_date = strtotime("August 1, 2018");
    protected $start = 213;

    public function getMasterFromDate($date) {
    	$delta = strtotime($date) - $start_date;
    	return $count = $count + $delta;
    }


    public function groupe()
    {
    	return $this->belongsTo('App\Groupe');
    }
}
