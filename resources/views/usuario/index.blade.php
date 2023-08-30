@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')
<br>
<h1 class="m-0 text-dark">
    Gestión de usuario
    <small class="font-weight-light ml-1 text-md">Lista de usuarios</small>
</h1>
<br>
@stop

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('success'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
				<strong>{{ $message }}</strong>

			</div>
			@endif
			@if ($message = Session::get('destroy'))
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>{{ $message }}</strong>

			</div>
			@endif
            @includeif('partials.errors')
            <div class="card card-default">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="btn-group">
                            <button type="button" name="create_record" id="create_record" class="btn btn-sm btn-success">
                                <i class="fa fa-plus"></i>
                                Agregar usuario
                            </button>
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
                                        <th>Nombre</th>
                                        <th>Correo</th>
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
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="sample_form" class="form-horizontal">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Add New Record</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span id="form_result"></span>
                    <div class="form-group">
                        <label>Nombre : </label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off"/>
                    </div>
                    <div class="form-group">
                        <label>Correo : </label>
                        <input type="email" name="email" id="email" class="form-control" autocomplete="off"/>
                    </div>
                    <div class="form-group editpass">
                        <label>Contraseña : </label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off"/>
                    </div>
                    <input type="hidden" name="action" id="action" value="Add" />
                    <input type="hidden" name="hidden_id" id="hidden_id" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <input type="submit" name="action_button" id="action_button" value="Add" class="btn btn-info" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="sample_form" class="form-horizontal">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Confirmación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 align="center" style="margin:0;">¿Estas seguro que quiere eliminar este usuario?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')
<script src="/vendor/datatables-plugins/i18n/es-ES.js"></script>
<script type="text/javascript">
    $(function() {

        //var language = require('/vendor/datatables-plugins/i18n/es-ES.js');

        var table = $('.user_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('usuario.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
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

        $('#create_record').click(function() {
            $('.modal-title').text('Agregar nuevo usuario');
            $('#action_button').val('Agregar');
            $('#action').val('Add');
            $('#form_result').html('');

            $('#formModal').modal('show');
        });

        $('#sample_form').on('submit', function(event) {
            event.preventDefault();
            var action_url = '';

            if ($('#action').val() == 'Add') {
                action_url = "{{ route('usuario.store') }}";
            }

            if ($('#action').val() == 'Edit') {
                action_url = "{{ route('usuario.update') }}";
            }

            $.ajax({
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: action_url,
                data: $(this).serialize(),
                dataType: 'json',
                success: function(data) {
                    console.log('success: ' + data);
                    var html = '';
                    if (data.errors) {
                        html = '<div class="alert alert-danger">';
                        for (var count = 0; count < data.errors.length; count++) {
                            html += '<p>' + data.errors[count] + '</p>';
                        }
                        html += '</div>';
                    }
                    if (data.success) {
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                        $('#sample_form')[0].reset();
                        $('#user_table').DataTable().ajax.reload();
                    }
                    $('#form_result').html(html);
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    console.log(errors);
                }
            });
        });

        $(document).on('click', '.edit', function(event) {
            event.preventDefault();
            var id = $(this).attr('id');
            //alert(id);
            $('#form_result').html('');

            $.ajax({
                url: "/usuario/edit/" + id + "/",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                success: function(data) {
                    console.log('success: ' + data);
                    $('#name').val(data.result.name);
                    $('#email').val(data.result.email);
                    $('#hidden_id').val(id);
                    $('.modal-title').text('Editar usuario');
                    $('#action_button').val('Actualizar');
                    $('#action').val('Edit');
                    $('.editpass').hide();
                    $('#formModal').modal('show');
                },
                error: function(data) {
                    var errors = data.responseJSON;
                    console.log(errors);
                }
            })
        });

        var user_id;

        $(document).on('click', '.delete', function() {
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function() {
            $.ajax({
                url: "usuario/destroy/" + user_id,
                beforeSend: function() {
                    $('#ok_button').text('Eliminando...');
                },
                success: function(data) {
                    setTimeout(function() {
                        $('#confirmModal').modal('hide');
                        $('#user_table').DataTable().ajax.reload();
                        //alert('Data Deleted');
                    }, 2000);
                }
            })
        });
    });
</script>
@stop