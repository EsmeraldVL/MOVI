<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping_Cart extends Model
{
    use HasFactory;

    protected  $table = "shopping_cart";

    protected $filiable = ['email','status'];

    public static function FindOrCreateBySessionId($shopping_cart_id)
    {
        if ($shopping_cart_id) {
            return Shopping_Cart::find($shopping_cart_id);
        }else{
            return Shopping_Cart::create();
        }        
    }

    public function shooping_cart_detail(){
        return $this->hasMany(Shopping_Cart_Detail::class);
    }
    
    public function quentity_of_products(){
        $total=$this->shooping_cart_detail->sum('quantity');
        return  $total;
    }

    public function total_price(){
        $total=0;
        foreach ($this->shooping_cart_detail as $key => $shooping_cart_detail) {
            $total += $shooping_cart_detail->price *
            $shooping_cart_detail->quantity;
        }
    }
}
