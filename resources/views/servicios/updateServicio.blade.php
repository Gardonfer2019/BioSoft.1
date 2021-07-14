@extends('adminlte::page')
@section('title', 'Servicios')

@section('content_header')
<h1>{{$nombre_examen}}</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        Actualizar {{$nombre_examen}}
    </div>
    <div class="card-body">
        <form action="{{route('servicios.edit', $id_examen)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="selectRama">Seleccionar Rama</label>
              <select class="form-control" id="selectRama" name="selectRama">
                <option value="{{$id_rama}}" selected>{{$seccion}} (seleccionado)</option>
                @foreach ($listarRamas as $item)
                    <option value="{!! $item->id_rama !!}" placeholder="">{{$item->descripcion}}</option>
                @endforeach
              </select>
            </div>

          <div class="form-group">
            <label for="nombre_servicio">Nombre Servicio</label>
            <input type="text" class="form-control" id="nombre_servicio" name="nombre_servicio" value="{{$nombre_examen}}">
          </div>

          <div class="form-group">
            <label for="prefijo_servicio">Prefijo del Servicio</label>
            <input type="text" class="form-control" id="prefijo_servicio" name="prefijo_servicio" value="{{$prefijo}}">
          </div> 

          <div class="form-group">
              <label for="precio_servicio">Precio del Servicio</label>
              <input type="number" class="form-control" id="precio_servicio" name="precio_servicio" value="{{$precio}}">
          </div>

          <div class="form-group">
              <label for="textDescripcion">Descripcion</label>
              <textarea class="form-control" id="textDescripcion" name="textDescripcion" rows="3" > {{$descripcion}}</textarea>
          </div>

          <input type="hidden" name="borrado" value="0">
          
         
          <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar</button>
        </form>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')

@stop