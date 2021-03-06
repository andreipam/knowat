<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email','phone','address','email_verification','emailtokenv','state', 'password',
    ];

  
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fullName(){
       return $this->firstname.' '.$this->lastname;
    }
    public function favorites(){
        return $this->hasMany('App\Favorites');
    }
    public function cartItems(){
        return $this->hasMany('App\Cart');
    }

    //the user tickets
    public function tickets(){
        return $this->hasMany('App\Ticket');
    }
    public function billingInfo(){
        return $this->hasOne('\App\BillingInfo','user_id');
    }
}
