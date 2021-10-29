<?php

namespace App\Models\Libreria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected  $table = "category";

    protected $filiable = ['id','type', 'detail'];


    public function book_category(){
        return $this->hasMany('App\Book_Category');
    }

    
}
