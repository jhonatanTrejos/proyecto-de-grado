@extends('layouts.main',['activePage'=>'','titlePage'=>'Editar registro'])

@section('content')
    

    
                <form action="{{route('registro.update',$registro->id)}}" method="post" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header card-header-primary">
                           <h4 class="card-title">Registro</h4>
                           <p class="card-category">Editar datos</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Numero de cedula:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="numero_cedula" value="{{$registro->numero_cedula}}">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label"> Nombre:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="nombre_empleado" value="{{$registro->nombre_empleado}}">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Apellidos:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="apellidos_empleado" value="{{$registro->apellidos_empleado}}" >
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Cargo:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="cargo" value="{{$registro->cargo}}" >
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Fecha de inicio:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="fecha_inicio" value="{{$registro->fecha_inicio}}">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Fecha de retiro:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="fecha_retiro" value="{{$registro->fecha_retiro}}" >
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Dias laborados:</label>
                            <div class="md-sm-8">
                            <input type="numeric" class="form-control"  name="dias_laborados" value="{{$registro->dias_laborados}}">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Sueldo:</label>
                            <div class="md-sm-8">
                            <input type="numeric" class="form-control"  name="sueldo" value="{{$registro->sueldo}}">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Devengado:</label>
                            <div class="md-sm-4">
                            <input type="numeric" class="form-control"  name="devengado" value="{{$registro->devengado}}" >
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Ley 100:</label>
                            <div class="md-sm-4">
                            <input type="numeric" class="form-control"  name="ley100" value="{{$registro->ley100}}">
                            </div>
                        </div>
                    </div>
                      <div class="card-footer ml-auto mr-auto">
                    <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
                </form>
            
        
    
</div>
@stop

