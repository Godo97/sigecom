@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')
	<h1 class="m-0 text-dark">
		Gestión de personas
		<small class="font-weight-light ml-1 text-md">Agregar persona</small>
	</h1>
@stop

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="card card-outline card-info">
				<div class="card-header">
					<div class="float-left">
						<div class="btn-group">
							<a href="{{ route('persona.index') }}" class="btn btn-sm btn-block btn-secondary">
								<i class="fas fa-arrow-left"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ route('persona.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
						@csrf
						
						@include('persona._form')
					</form>
				</div>
			</div>
		</div>
	</div>
@stop

@section('css')
	
@stop

@section('js')
	
@stop