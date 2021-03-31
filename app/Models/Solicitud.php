<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
     
    // protected $fillable = [
    //     'id',
    //     'created_at',
    //     'updated_at',
    //     'user_id',
    //     'estado',
    //     'modifiedby_id',
    // ];

    //relacion muchos a uno.. de usuario con solicitud  a nivel de eloquent documentacion
   public function users(){
    return $this->belongsTo(User::class,'user_id');
  }

  //relacion uno a uno con estados
  public function estado()
    {
        return $this->hasOne(Estado::class);
    }
    
}