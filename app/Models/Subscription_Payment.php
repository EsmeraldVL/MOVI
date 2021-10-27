<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription_Payment extends Model
{
    use HasFactory;

    protected  $table = "subscription_payment";

    protected $filiable = ['email', 'paymentDate', 'idSubscription', 'amount'];

   /* public function currency(){
        return $this->belongsTo('App\Currency');
    }*/
    
    public function users(){
        return $this->belongsTo('App\Users');
    }

    public function user_Subscription(){
        return $this->belongsTo('App\User_subscription');
    }


}
