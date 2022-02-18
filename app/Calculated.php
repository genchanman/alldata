<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculated extends Model
{
 public function datas()
 {
    return $this->belongsToMany('App/Data'); 
 }
 public function rankings()
 {
     return $this->belongsToMany('App/Ranking');
 }
}
