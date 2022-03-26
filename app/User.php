<?php

namespace App;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
   use Notifiable;
     protected $fillable = [
        'name', 'e-mail', 'password', 'class', 'provider', 'provided_user_id', 'profile' ];
        
        
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // We don't use password login.
        return '';
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // We don't use this.
        return '';
    }
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
        return $this->belongsToMany('App\Datas');
    }
    public function timelines()
    {
        return $this->belongsToMany('App\Timeline');
    }
     public function possion()
    {
        return $this->belongsToMany('App/Possion');
    }
   
    
}

