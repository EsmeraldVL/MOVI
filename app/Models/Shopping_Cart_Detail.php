<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping_Cart_Detail extends Model
{
    use HasFactory;
    protected  $table = "shopping_cart_detail";

    protected $filiable = ['isBook', 'idProduct', 'quentity', 'idCart','detail', 'quantity'];


    public function shopping_cart(){
        return $this->belongsTo('App\Shopping_Cart');
    }
}
