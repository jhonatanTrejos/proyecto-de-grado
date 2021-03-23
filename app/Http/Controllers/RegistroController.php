<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Models\registros;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros=Registro::paginate(1);
        return view('registros.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registros/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
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
        return redirect()->route('registro.index') ;//->whith('success', 'Se ha creado el registro correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
