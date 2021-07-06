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
    @include('servicios.dataTable')
    
@stop

@section('css')

@stop

@section('js')


    <script>
        $(document).ready(function() {
            console.log('Hola!');
            $('#services-table').DataTable({
                processing: false,
                serverSide: false,
                responsive: true,
               
                
                ajax: '{{ url('/getServicesData') }}',
                columns: [{
                        data: 'id_examen'
                        
                    },  
                    {
                        data: 'seccion'
                    },
                    {
                        data: 'prefijo'
                    },
                    {
                        data: 'nombre_examen'
                    },
                    {
                        data: 'precio'
                    },
                    {
                        data: 'created_at'
                    }

                ],
                language: {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "Nada encontrado",
                    "info": "_PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtrando de _MAX_ registros totales)",
                    "search":"Buscar:",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                 
                

            });


        });
    </script>
@stop
