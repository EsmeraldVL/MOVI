<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discount extends Model
{
    use HasFactory;

    protected  $table = "discount";

    protected $filiable = ['discountRate', 'idCategory','startDate','finishDate'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function purchase(){
        return $this->hasMany('App\Purchase');
    }

    public static function  CalcularDescuento($total, $descuento){
        $desc= ($total*$descuento)/100;
        return $total - $desc;
    }
}
