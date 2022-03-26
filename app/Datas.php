<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{

    public $timestamps = false;
      protected $fillable = [
        'atbat', 'storoke', 'error', 'run', 'givedeadball', 'hit', 'strikeout',
        'outssllow', 'remosepoint', 'deadball', 'doppotunity', 'poppotunity',
        'gstrikeout', 'givehit', 'twobase', 'threebase', 'hr','created_at',
        'slugging', 'user_id'
    ];
    
  // function getPaginateByLimit(int $limit_count = 5)
  // {
       
   //}
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function calcurated()
    {
        return $this->belongsToMany('App/calcurated');
    }
    public function rankings()
    {
        return $this->belongsToMany('App/Rankings');
    }
  // public function authuser()
   //{
     //  $this::Auth::user();
   //}
}