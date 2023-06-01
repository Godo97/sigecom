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
						<div class="form-group row">
							<label for="status" class="col-sm-2 col-form-label">Estatus</label>
							<div class="col-sm-8">
								<select class="form-control select" name="status" style="width: 100%;">
									<option value="4" selected="selected">Activo</option>
									<option value="5">Inactivo</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="pnombre" class="col-sm-2 colform-label">Nombres</label>
							<div class="col-sm-8">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fas fa-grin"></i>
										</span>
									</div>
									<input type="text" name="pnombre" class="form-control @error('pnombre') is-invalid @enderror" placeholder="Primer Nombre" autocomplete="off">
									<input type="text" name="snombre" class="form-control" placeholder="Segundo Nombre" autocomplete="off">
									<div class="invalid-feedback">
										@error('pnombre')
								            <h6>{{ $message }}</h6>
										@enderror
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="papellido" class="col-sm-2 colform-label">Apellidos</label>
							<div class="col-sm-8">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="fas fa-grin"></i>
										</span>
									</div>
									<input type="text" name="papellido" class="form-control @error('pnombre') is-invalid @enderror" placeholder="Primer Apellido" autocomplete="off">
									<input type="text" name="sapellido" class="form-control" placeholder="Segundo Apellido" autocomplete="off">
									<div class="invalid-feedback">
										@error('papellido')
								            <h6>{{ $message }}</h6>
										@enderror
									</div>
								</div>
							</div>
						</div>
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