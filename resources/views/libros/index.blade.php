@extends('layouts.main',['activePage'=>'ver','titlePage'=>'Ver Libros'])
@section('content')
    <div class="content"> 
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-tittle">Libros</h4>
                                <p class="card-category">todos los libros</p>
                            </div>
                            
                            <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success" role="success">
                            {{session('success')}}
                            </div>
                            @endif
                            
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{route('libro.create')}}" class="btn btn-sm btn-success">Crear nuevo Libro</a>
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Fecha de inicio</th>
                                            <th>Fecha de fin</th>
                                            <th>Detalles</th>
                                            <th class="right">Acciones</th>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach ($libros as $libro)
                                            <tr>
                                                <td>{{$libro->id}}</td>
                                                <td>{{$libro->fecha_inicio}}</td>
                                                <td>{{$libro->fecha_fin}}</td>
                                                <td>{{$libro->detalles}}</td>
                                                <td class="td-actions">
                                                  
                                                </td>
                                            </tr>  
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="card-footer ml-auto"></div>
                            {{$libros->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
