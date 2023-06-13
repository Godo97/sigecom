@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')
    <br>
	    <h1 class="m-0 text-dark">
		    Gestión de competencia
		    <small class="font-weight-light ml-1 text-md">Lista de competencias</small>
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

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('compenvl2.update', $compenvl2->id) }}" role="form">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('compenvl2.form')
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