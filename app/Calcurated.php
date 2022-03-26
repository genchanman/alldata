<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calcurated extends Model
{
 protected $fillable = [
   'drate', 'srate', 'baverage', 'startingaverage'];
 public function datas()
 {
    return $this->belongsToMany('App\Datas'); 
 }
 public function rankings()
 {
     return $this->belongsToMany('App\Ranking');
 }
}
