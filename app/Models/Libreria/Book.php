<?php

namespace App\Models\Libreria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected  $table = "books";

    protected $filiable = ['bookName','author', 'publication_date','editorial', 'synopsis', 'image', 'PDF','price'];

    public function hasProfilePicture(): bool {
        return !is_null($this->attributes['image']) 
        && !empty($this->attributes['image']);
    }

    /**
     * Accessors and Mutators
     */

     public function getProfilePictureAttribute() {
        return url('imagesUser/' . $this->attributes['image']);
     }

     public function category(){
        return $this->hasMany('App\Category');
    }

    public function scopeNombre($query,$nombre){
        return $query->where('bookName', 'like', "$nombre");
    }

    public function scopeAutor($query,$autor){
        return $query->where('author', 'like', "$autor");
    }

}
