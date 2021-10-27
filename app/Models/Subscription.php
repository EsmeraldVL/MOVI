<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{

    protected  $table = "subscriptions";

    protected $filiable = ['kind','detail', 'price','initial_movis'];


    use HasFactory;

    public function user_subscription(){
        return $this->hasMany('App\User_subscription');
    }
}
