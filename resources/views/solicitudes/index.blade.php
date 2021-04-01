@extends('layouts.main',['activePage'=>'solicitud','titlePage'=>'Solicitudes'])
@section('content')
    <div class="content"> 
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-tittle">Solicitudes</h4>
                                    <p class="card-category">todas las Solicitudes</p>
                                </div>
                                <div class="table-responsive">

                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Solicitado por</th>
                                            <th>Fecha solicitud</th>
                                            <th>Fecha actualización</th>
                                            <th>Estado</th>
                                            <th class="right">Acciones</th>
                                        </thead>
                                        <tbody>
                                          @foreach ($solicituds as $solicitud)
                                            <tr>
                                                <td>{{$solicitud->id}}</td>
                                                <td>{{$solicitud->users->name}}{{$solicitud->users->last_name}}</td>
                                                <td>{{$solicitud->created_at}}</td>
                                                <td>{{$solicitud->updated_at}}</td>
                                                <td>{{$solicitud->estados->nombre}}</td>

                                                
                                                <td class="td-actions">
                                                   <a href="{{route('solicitudes.edit',$solicitud->id)}}" class="btn btn-sm btn-success">
                                                     <i class="material-icons">edit</i>Cambiar estado
                                                    </a>
                                                </td>
                                            </tr>  
                                            
                                        @endforeach  
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
