<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class certificado extends Model
{
    //use HasFactory;
    protected $table="registros";
    protected $primaryKey="id";
    protected $fillable=[
        'nombre_empleado', 'apellido_empleado', 'numero_cedula'

    ];
    public $timestamps =false;
}