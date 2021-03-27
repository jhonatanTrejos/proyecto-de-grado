<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Http\Requests\LibroCreateRequest;
use App\Models\User;

class LibroController extends Controller
{
    public function index()
    {
    $libros=Libro::paginate(5);
    return view('libros.index',compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }
    public function store(Request $request)
    {
        Libro::create([
            'fecha_inicio' => $request['fecha_inicio'],
            'fecha_fin' => $request['fecha_fin'],
            'detalles' => $request['detalles']
        ]);
        return redirect()->route('libro.index')->with('success','Libro creado correctamente');
    }
    //funcion para ver detalles del libro
    public function show($id)
    {
        //almacenar el valor del id
        $libro=Libro::find($id);
        return view('libro.show',compact('libro'));
    }
    public function edit(Libro $registro)
    {
        return view('registros.edit', compact('registro'));
    }
    public function update(Libro $request, $id)
    {
        $registro=Libro::findOrFail($id);
        $data= $request->all();
        $registro->update($data);
        return redirect()->route('registro.index')->with('success','Usuario actualizado');
     
    }
    public function destroy(Libro $registro)
    {
        $registro->delete();

        return redirect()->route('registro.index')->with('success','Registro eliminado');
    }
}
