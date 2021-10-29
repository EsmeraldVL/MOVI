<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy_Movis extends Model
{
    use HasFactory;

    protected  $table = "buy_movis";

    protected $filiable = ['dateF', 'amount', 'email', 'idPaymentType','detail','id', 'currency'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function PaymentType(){
        return $this->belongsTo('App\Payment_Type');
    }
}
