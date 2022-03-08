<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
      protected $fillable = [
        'title', 'body', 'post', 'creaed_at' ];
        public function getByLimit(int $limit_count = 10)
        {
            return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
        }

        
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
