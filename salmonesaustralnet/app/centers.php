<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class centers extends Model
{
    protected $primaryKey = 'idcenter';

    public function maritimerecords()
    {
    return $this->belongsToMany('App\maritimerecords');
    }
}
