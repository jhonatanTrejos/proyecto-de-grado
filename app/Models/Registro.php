<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Registro extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'numero_cedula',
        'nombre_empleado',
        'apellidos_empleado',
        'cargo',
        'fecha_inicio',
        'fecha_retiro',
        'dias_laborados',
        'sueldo',
        'devengado',
        'ley100',

    ];
    
}
