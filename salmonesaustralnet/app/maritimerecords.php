<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maritimerecords extends Model
{
    protected $primaryKey = 'idmarinerecord'; 

    public function centers()
    {
    	return $this->belongsToMany('App\centers');
    }

    public function Users()
    {
    	return $this->belongsToMany('App\User');
    }
}
