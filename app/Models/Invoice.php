<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected  $table = "invoice";

    protected $filiable = ['dateF', 'email', 'nit', 'paymentType'];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function payment_type(){
        return $this->belongsTo('App\Payment_Type');
    }
}
