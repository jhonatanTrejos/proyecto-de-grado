<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = [
        //
    ];
     //relacion uno a muchos.. de libro con registro  a nivel de eloquent
     public function registros(){
        return $this->hasMany('App\Models\Registro');
    }
    //relacion de usuario con libro...muchos a uno
    public function user(){
        return $this->belongsTo('App\Models\User');
    }


}

