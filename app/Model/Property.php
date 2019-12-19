<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function city()
    {
    	return $this->belongsTo('App\Model\City');
    }

    public function state()
    {
    	return $this->belongsTo('App\Model\State');
    }

}
