<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class epagerecords extends Model
{
    protected $primaryKey = 'idpage';

    public function Users()
    {
    	return $this->belongsToMany('App\User');
    }
}
