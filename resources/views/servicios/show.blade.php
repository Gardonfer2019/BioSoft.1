@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
<h1>{{$nombre_examen}}</h1>
@stop

@section('content')
<div class="card text-center">
    <div class="card-header">
        Detalles del Servicio
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{$id_examen}}
                        </td>
                    </tr>
                    <tr>
                        <th>Sección</th>
                        <td>{{$seccion}}</td>
                    </tr>
                    <tr>
                        <th>Nombre del Examen</th>
                        <td>{{$nombre_examen}}</td>
                    </tr>
                    <tr>
                        <th>Prefijo</th>
                        <td>{{$prefijo}}</td>
                    </tr>
                    <tr>
                        <th>Precio</th>
                        <td>{{$precio}}</td>
                    </tr>
                    <tr>
                        <th>Creado</th>
                        <td>{{$created_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="button-container">
                <a href="{{ route('servicios') }}" class="btn btn-sm btn-success mr-3"> Volver </a>

            </div>
        </div>
    </div>
</div>

</div>

@stop

@section('css')

@stop

@section('js')

@stop