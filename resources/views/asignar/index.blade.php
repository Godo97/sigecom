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
@php
    $heads = [
        'ID',
        'Name',
        ['label' => 'Phone', 'width' => 40],
        ['label' => 'Actions', 'no-export' => true, 'width' => 5],
    ];

    $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
        <i class="fa fa-lg fa-fw fa-pen"></i>
    </button>';
    $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
        <i class="fa fa-lg fa-fw fa-trash"></i>
    </button>';
    $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
        <i class="fa fa-lg fa-fw fa-eye"></i>
    </button>';

    $config = [
        'data' => [
            [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
            [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
            [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete.$btnDetails.'</nobr>'],
        ],
        'order' => [[1, 'asc']],
        'columns' => [null, null, null, ['orderable' => false]],
    ];
@endphp
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="btn-group">
                            <a href="{{ route('asignar.create') }}" class="btn btn-sm btn-block btn-primary">
                                <i class="fa fa-plus"></i>
                                Asignar competencia
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <x-adminlte-datatable id="table1" :heads="$heads" head-theme="dark" striped hoverable bordered>
                            @foreach($config['data'] as $row)
                            <tr>
                                @foreach($row as $cell)
                                <td>{!! $cell !!}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </x-adminlte-datatable>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php
var_dump($tree);

?>

@stop

@section('css')

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
@stop