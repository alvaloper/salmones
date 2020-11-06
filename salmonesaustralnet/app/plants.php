<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plants extends Model
{
    protected $primaryKey = 'idplant';

    public function plantrecords()
    {
    	return $this->belongsToMany('App\plantrecords');
    }
}
