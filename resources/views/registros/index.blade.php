@extends('layouts.main',['activePage'=>'index','titlePage'=>'Ver Registros'])


@section('content')
    <div class="content"> 
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-tittle">Registros</h4>
                                <p class="card-category">Registro de historias</p>
                            </div>
                            
                            <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success" role="success">
                            {{session('success')}}
                            </div>
                            @endif
                            
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="/home/create" class="btn btn-sm btn-success">Crear nuevo registro</a>
                                </div>
                            </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Numero de cedula</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Cargo</th>
                                            <th>Fecha de inicio</th>
                                            <th>Fecha de retiro</th>
                                            <th>Dias Laborados</th>
                                            <th>Sueldo</th>
                                            <th>Devengado</th>
                                            <th>Ley 100</th>
                                            <th>Creado</th>
                                            <th>Actualizado</th>
                                            <th class="right">Acciones</th>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach ($registros as $registro)
                                            <tr>
                                                <td>{{$registro->id}}</td>
                                                <td>{{$registro->numero_cedula}}</td>
                                                <td>{{$registro->nombre_empleado}}</td>
                                                <td>{{$registro->apellidos_empleado}}</td>
                                                <td>{{$registro->cargo}}</td>
                                                <td>{{$registro->fecha_inicio}}</td>
                                                <td>{{$registro->fecha_retiro}}</td>
                                                <td>{{$registro->dias_laborados}}</td>
                                                <td>{{$registro->sueldo}}</td>
                                                <td>{{$registro->devengado}}</td>
                                                <td>{{$registro->ley100}}</td>
                                                <td>{{$registro->created_at}}</td>
                                                <td>{{$registro->updated_at}}</td>
                                                <td class="td-actions">
                                                    <a href="{{route('registro.edit',$registro->id)}}" class="btn btn-warning ">
                                                     <i class="material-icons">edit</i>
                                                    </a>
                                                    <form action="{{route('registro.delete',$registro->id)}}" method="POST" style="display: inline-block;"
                                                    onsubmit=return confirmation('¿Esta seguro que desea eliminar este Registro?')>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                    </form>
                                                </td>
                                            </tr>  
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="card-footer ml-auto"></div>
                            {{$registros->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
