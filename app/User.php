<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \Cartalyst\Sentinel\Users\EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'phone_no', 'email', 'password', 'status',
        'address', 'profile_picture_path', 'title', 'sex', 'postal_address',
        'address_city', 'address_state', 'address_country',
        'postal_address_city', 'postal_address_state', 'postal_address_country',
        'login_status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function eoi(){
      $this->hasOne('App\ExpressionOfInterest');
    }
}
