<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Movis extends Model
{
    use HasFactory;

    protected  $table = "user_movis";

    protected $filiable = ['email', 'amount'];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
