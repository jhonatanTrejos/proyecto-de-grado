
@extends('layouts.main',['activePage'=>'registros','titlePage'=>'Nuevo registro'])

@section('content')
    

    
                <form action="{{route('registro.store')}}" method="post" class="form-horizontal">
                @csrf
                <div class="card">
                    <div class="card-header card-header-primary">
                           <h4 class="card-title">Registro</h4>
                           <p class="card-category">Ingresar datos</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Numero de cedula:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="numero_cedula" placeholder="Ingese el numero de cédula" autofocus>
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label"> Nombre:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="nombre_empleado" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Apellidos:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="apellidos_empleado" placeholder="Ingrese el nombre">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Cargo:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="cargo" placeholder="Ingrese el cargo">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Fecha de inicio:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="fecha_inicio" placeholder="Año-Mes-Dia">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Fecha de retiro:</label>
                            <div class="md-sm-8">
                            <input type="text" class="form-control"  name="fecha_retiro" placeholder="Año-Mes-Dia">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Dias laborados:</label>
                            <div class="md-sm-8">
                            <input type="numeric" class="form-control"  name="dias_laborados" placeholder="Ingrese la candidad en dias">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Sueldo:</label>
                            <div class="md-sm-8">
                            <input type="numeric" class="form-control"  name="sueldo" placeholder="Ingrese el sueldo">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Devengado:</label>
                            <div class="md-sm-4">
                            <input type="numeric" class="form-control"  name="devengado" placeholder="Ingrese el devengado">
                            </div>
                        </div>
                        <div class="row">
                            <label for="name" class="col-sm-4 col-form-label">Ley 100:</label>
                            <div class="md-sm-4">
                            <input type="numeric" class="form-control"  name="ley100" placeholder="Ingrese el devengado">
                            </div>
                        </div>
                    </div>
                      <div class="card-footer ml-auto mr-auto">
                    <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
                </form>
            
        
    
</div>
@stop

