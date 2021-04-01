<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\certificado;
use Illuminate\Support\Facades\DB as FacadesDB;

class controllerUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $texto=trim($request->get('texto'));
            $registro=DB::table('registros')
            ->select( 'nombre_empleado','apellido_empleado', 'numero_cedula');
             return view('../certificado', compact('registros', 'texto'));
    
    }}