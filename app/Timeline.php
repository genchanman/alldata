<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
      protected $fillable = [
        'title', 'body', 'post'  ];
        
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
