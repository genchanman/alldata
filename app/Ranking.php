<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    
     public function users()
    {
        return $this->belongsToMany('App/Users');
    }
     public function datas()
    {
        return $this->belongsToMany('App/Data');
    }
    public function calcurated()
    {
        return $this->belongsToMany('App/Calculated');
    }
}
