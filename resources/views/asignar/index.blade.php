@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')
<br>
<h1 class="m-0 text-dark">
    Gestión de asignación de competencia
</h1>
<br>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @includeif('partials.errors')
            <div class="card card-default">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="btn-group">
                            <a href="{{ route('asignar.create') }}" class="btn btn-sm btn-success">
                                <i class="fa fa-plus"></i>
                                Agregar usuario
                            </a>
                            <!--
                            <button type="button" name="create_record" id="create_record" class="btn btn-sm btn-success">
                                <i class="fa fa-plus"></i>
                                Agregar usuario
                            </button>
                            -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-bordered user_datatable" id="user_table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Persona</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')
<script type="text/javascript">
    $(function() {

        var table = $('.user_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('asignar.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'persona_id',
                    name: 'persona_id'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
            language: {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "info": "Mostrando registros del _PAGE_ al _PAGES_ de un total de _MAX_ registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior",
                }
            },
        });
    });
</script>
@stop