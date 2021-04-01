<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Estado;
use SebastianBergmann\Environment\Console;

class SolicitudController extends Controller
{
    public function index()
    {
     $solicituds=Solicitud::with('estados')->get();
    //esto retorna la vitsta y compacta la variable para consumirla en la vista
   return view('solicitudes.index',compact('solicituds'));
    }
    public function edit(Solicitud $solicitud)
    {
        return view('solicitudes.edit',compact('solicitud'));
    }
    public function update(Solicitud $request, $id)
    {
        $solicitud=Solicitud::findOrFail($id);
        //$data= $request->all();
       // $data=$request->only('estado_id');
        //if(trim($request->estado_id)==''){
            //$data=$request->except('estado_id');
       // }//
       $data=[
        'estado_id' => $request['estado_id']
        ];
        $solicitud->update($data);
        if(!$solicitud){
            echo "no funcioma";
            return false;
        }
        return redirect()->route('solicitudes.index')->with('success','Estado actualizado');
     
    }
    
}
