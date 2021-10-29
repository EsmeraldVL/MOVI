<?php

namespace App\Models\Libreria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_history extends Model
{
    use HasFactory;

    use HasFactory;
    protected  $table = "userStories";

    protected $filiable = ['email','title', 'cover_image','text','price','dateP'];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->hasMany('App\Category');
    }
}
