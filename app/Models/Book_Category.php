<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Category extends Model
{
    use HasFactory;
    protected  $table = "book_category";

    protected $filiable = ['idCategoria','idArticulo', 'isBook'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function articulo(){
        if($this->attributes('isLibro')){
            return $this->belongsTo('App\Libreria\Book');
        }else{
            return $this->belongsTo('App\Libreria\User_history');
        }
    }
    
}
