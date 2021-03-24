<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\registros;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    
    public function index()
    {
        $registros=Registro::paginate(1);
    return view('registros.index',compact('registros',));
    }
    public function create()
    {
        return view('registros/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'numero_cedula' =>'required|min:5|numeric',
            'nombre_empleado' => 'required|min:3|max:200|string',
            'apellidos_empleado' => 'required|min:3|string',
            'cargo' => 'nullable|min:4|string',
            'fecha_inicio' => 'nullable|min:10|max:11|date',
            'fecha_retiro' => 'nullable|min:10|max:11|date',
            'dias_laborados' => 'nullable|min:1|numeric',
            'sueldo' => 'nullable|numeric',
            'devengado' => 'nullable|numeric',
            'ley100' => 'nullable|numeric',

        ]);
         Registro::create([
            'numero_cedula' => $request['numero_cedula'],
            'nombre_empleado' => $request['nombre_empleado'],
            'apellidos_empleado' => $request['apellidos_empleado'],
            'cargo' => $request['cargo'],
            'fecha_inicio' => $request['fecha_inicio'],
            'fecha_retiro' => $request['fecha_retiro'],
            'dias_laborados' => $request['dias_laborados'],
            'sueldo' => $request['sueldo'],
            'devengado' => $request['devengado'],
            'ley100' => $request['ley100'],
            
        ]);
        return redirect()->route('registro.index')->with('success','Usuario creado correctamente');
    }

    public function show($id)
    {
        
    }
    public function edit(Registro $registro)
    {
        return view('registros.edit', compact('registro'));
    }
    public function update(Request $request, $id)
    {
        $registro=Registro::findOrFail($id);
        $data= $request->all();
        $registro->update($data);
        return redirect()->route('registro.index')->with('success','Usuario actualizado');
     
    }
    public function destroy(Registro $registro)
    {
        $registro->delete();
        return back()->with('succes','Registro eliminado');
    }
}
