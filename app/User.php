<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Users as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Model implements AuthenticatableContract
{
   use Authenticatable, Notifiable;
     protected $fillable = [
        'name', 'e-mail', 'password', 'class' ];

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
}