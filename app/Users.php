<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     public function calcurated()
    {
        return $this->belongsToMany('App/Calurated');
    }
    public function rankings()
    {
        return $this->belongsToMany('App/Rankings');
    }
    public function datas()
    {
        return $this->belongsToMany('App/Data');
    }
    public function timeline()
    {
        return $this->belongsToMany('App/Timeline');
    }
     public function possion()
    {
        return $this->belongsToMany('App/Possion');
    }
}
