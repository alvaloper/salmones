<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faultrecords extends Model
{
    public function Users()
    {
    return $this->belongsToMany('App\User');
    }
}
