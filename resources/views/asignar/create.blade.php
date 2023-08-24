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
                <form class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label for="person" class="col-sm-2 col-form-label">Persona</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <select class="select2 form-control" name="persona" id="persona" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="compe" class="col-sm-2 col-form-label">Competencia</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <div id="tree"></div>
                                <input type="hidden" class="form-control" id="competencias" name="valores_estrategia">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <button id="btnSave" class="btn btn-default">Data </button>
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
<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
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
        $('#btnData').on('click', function() {
            alert("Handler for `click` called.");
            var checkedIds = tree.getCheckedNodes();
            console.log(checkedIds);
        });
        $('#btnSave').on('click', function() {

            var persona = $('#persona').val();
            var datos = tree.getAll();

            const competenciasJSON = JSON.stringify(datos);
            $('#competencias').val(competenciasJSON);

            $.ajax({
                url: "{{ route('asignar.store') }}",
                type: 'POST',
                data: {
                    persona: persona,
                    competencia: JSON.stringify(datos)
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert(data.success);
                        location.reload();
                    } else {
                        printErrorMsg(data.error);
                    }
                },
                error: function(xhr, status, error) {
                    // Manejar los errores de la solicitud AJAX si es necesario
                    console.error(error);
                }
            });
        });
    });
</script>
@stop