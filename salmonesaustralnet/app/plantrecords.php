<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plantrecords extends Model
{
    protected $primaryKey = 'idplantrecord';

    public function plants()
    {
    return $this->belongsToMany('App\plants');
    }


    public function Users()
    {
    return $this->belongsToMany('App\User');
    }
}


