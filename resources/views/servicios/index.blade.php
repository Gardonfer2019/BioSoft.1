@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Servicios</h1>
@stop

@section('content')
    @if ($examen = Session::get('examen'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Excelente!</strong> {{ $examen }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <p>Bienvenido.</p>

    @include('servicios.formulario')
@stop

@section('css')

@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
