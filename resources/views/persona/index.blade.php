@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')
<br>
<h1 class="m-0 text-dark">
	Gestión de personas
	<small class="font-weight-light ml-1 text-md">Lista de personas</small>
</h1>
<br>
@stop

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<div class="card-tools">
						<div class="btn-group">
							<a href="{{ route('persona.create') }}" class="btn btn-sm btn-block btn-primary">
								<i class="fa fa-plus"></i>
								Agregar persona
							</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						@foreach($personas as $persona)
						<?php //var_dump($persona->foto)
						?>
						<div class="col-sm-3">
							<div class="card card-widget widget-user">
								<a href="{{ route('persona.show', $persona) }}">
									<div class="widget-user-header bg-info">

										<h3 class="widget-user-username">{{ $persona->nombre }} {{ $persona->apellido }}</h3>


									</div>
									<div class="widget-user-image">
										<img class="img-circle elevation-2" src="img/{{$persona->foto}}" alt="User Avatar">
									</div>
								</a>
								<div class="card-footer">
									<div class="row">
										<div class="col-sm-4 border-right">
											<div class="description-block">
												<h5 class="description-header">3,200</h5>
												<span class="description-text">SALES</span>
											</div>
										</div>
										<div class="col-sm-4 border-right">
											<div class="description-block">
												<h5 class="description-header">13,000</h5>
												<span class="description-text">FOLLOWERS</span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="description-block">
												<h5 class="description-header">35</h5>
												<span class="description-text">PRODUCTS</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
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

@stop