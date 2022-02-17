<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{
    public $timestamps = false;
      protected $fillable = [
        'atbat', 'storoke', 'error', 'run', 'givedeadball', 'hit', 'strikeout',
        'outssllow', 'remosepoint', 'deadball', 'doppotunity', 'poppotunity',
        'gstrikeout', 'givehit', 'twobase', 'threebase', 'hr'
    ];
    
    public function users()
    {
        return $this->belongsToMany('App/user');
    }
    public function calcurated()
    {
        return $this->belongsToMany('App/calurated');
    }
    public function rankings()
    {
        return $this->belongsToMany('App/rankings');
    }
}