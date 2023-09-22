@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')
<br>
<h1 class="m-0 text-dark">
    Gestión de asignación de competencia
    <small class="font-weight-light ml-1 text-md">Asignación</small>
</h1>
<br>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <div class="float-left">
                    <div class="btn-group">
                        <a href="{{ route('asignar.index') }}" class="btn btn-sm btn-block btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" id="form-asigna-compe">
                    @csrf
                    <div class="form-group row">
                        <label for="persona" class="col-sm-2 col-form-label">Persona</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <select class="select2 form-control" name="persona" id="persona" data-placeholder="Seleccione persona" required>
                                    @foreach($personas as $persona)
                                    <option value="{{ $persona->id }}">{{ $persona->usuario }} : {{ $persona->nombre }} {{ $persona->apellido }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="competencia" class="col-sm-2 col-form-label">Competencia</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <div id="tree"></div>
                                <input type="hidden" class="form-control" id="competencias" name="competencias">
                                <input type="hidden" id="checkedIds" class="form-control" name="checkedIds">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="button" id="btnSave" class="btn btn-default">Data </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<?php
//echo(json_encode($tree));
?>

@stop

@section('css')
<link href="/plugins/gijgo/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@stop

@section('js')
<script src="/plugins/gijgo/js/gijgo.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {

        var tree = $('#tree').tree({
            primaryKey: 'id',
            uiLibrary: 'bootstrap4',
            dataSource: <?php echo (json_encode($tree)); ?>,
            checkboxes: true,
            cascade: 'up'
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('input[name=_token]').attr('value')
            }
        });

        var data = JSON.stringify(tree.getAll());
        //console.log(data);

        $('#btnSave').on('click', function() {
            var datos = tree.getAll();
            const competenciasJSON = JSON.stringify(datos);
            console.log('data', competenciasJSON);
            var checkedIds = tree.getCheckedNodes();
            console.log('Checked', checkedIds);
            $('#competencias').val(competenciasJSON);
            $('#checkedIds').val(checkedIds);
            $.ajax({
                url: "{{ route('asignar.store') }}",
                type: 'POST',
                data: $('#form-asigna-compe').serialize(),
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    console.log(data);
                }
            });
        });
    });
</script>
@stop
