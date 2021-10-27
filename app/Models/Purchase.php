<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected  $table = "purchase";

    protected $filiable = ['idFactura', 'idProducto', 'detail', 'isBook','quantity','subTotal', 'idOfer','total'];


    public function invoice(){
        return $this->belongsTo('App\invoice');
    }

    public function offer(){
        return $this->belongsTo('App\idOffer');
    }
}
