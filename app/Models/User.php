<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    

    public function getKeyName(){
        return "email";
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'birth_date',
        'isAdmin',
        'isActive',
        'profile_image'
    ];

   

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_history(){
        return $this->hasMany('App\Libreria\User_history');
    }

    public function user_subscription(){
        return $this->hasMany('App\User_subscription');
    }

    public function subscription_payment(){
        return $this->hasMany('App\Libreria\Subscription_Payment');
    }

    public function invoice(){
        return $this->hasMany('App\invoice');
    }

    public function buy_movis(){
        return $this->hasMany('App\Buy_Movis');
    }

    
    public function user_movis(){
        return $this->hasMany('App\User_Movis');
    }

    public function shpping_cart(){
        return $this->hasMany('App\Shopping_Cart');
    }

    public function isAdmin() {
        return $this->isAdmin;
    }
}
