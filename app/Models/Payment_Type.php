<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Type extends Model
{
    use HasFactory;

    protected  $table = "payment_type";

    protected $filiable = ['type', 'detail'];


    public function buy_movis(){
        return $this->hasMany('App\Buy_Movis');
    }
}
