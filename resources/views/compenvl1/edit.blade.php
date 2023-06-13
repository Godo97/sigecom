@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')
    <br>
	    <h1 class="m-0 text-dark">
		    Gestión de competencia
		    <small class="font-weight-light ml-1 text-md">Editar competencias</small>
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
                    <div class="btn-group float-right">
                            <a href="{{ route('competencia') }}" class="btn btn-sm btn-block btn-default">
                            <i class="text-primary fas fa-arrow-left"></i>
                                Volver
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('compenvl1.update', $compenvl1) }}">
                            @method('PUT')
                            @include('compenvl1._form')
                        </form>
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