<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_subscription extends Model
{
    use HasFactory;

    protected  $table = "users_subscriptions";

    protected $filiable = ['idSubscription','email'];
    
    public function subscription(){
        return $this->belongsTo('App\Subscription');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function subscription_payment(){
        return $this->hasMany('App\User');
    }
}

