<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Models\Users;

class SolicitudController extends Controller
{
    public function index()
    {
     $solicituds=Solicitud::with('users')->get();
    //esto retorna la vitsta y compacta la variable para consumirla en la vista
   return view('solicitudes.index',compact('solicituds'));
    }
    
}
