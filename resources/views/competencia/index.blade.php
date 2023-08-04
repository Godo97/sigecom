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
		<div class="col-lg-12">
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
			@section('plugins.Sweetalert2', true)
			
			<div class="card card-primary card-outline">
				<div id="nestable-menu" class="card-header">
					<!--
						<div class="btn-group">
							<button class="btn btn-info btn-sm tree-tools" data-action="expand" title="Expand">
								<i class="fas fa-chevron-down"></i>
								Expandir
							</button>
							<button class="btn btn-info btn-sm tree-tools" data-action="collapse" title="Collapse">
								<i class="fas fa-chevron-up"></i>
								Colapso
							</button>
						</div>
						<div class="btn-group">
							<button class="btn btn-warning btn-sm refresh" data-action="refresh" title="Refresh">
								<i class="fas fa-sync-alt"></i>
								<span class="hidden-xs">Actualizar</span>
							</button>
						</div>
					-->
				</div>
				<div class="card-body">
					<div class="dd" id="menu">
						<table class="table table-hover">
							<tbody>
								<tr>
									<td class="d-flex flex-row-reverse">
										<div class="btn-group">
											<a href="{{ route('compenvl1.create') }}" class="btn btn-sm btn-block btn-default">
												<i class="text-primary fa fa-plus"></i>
												Agregar
											</a>
										</div>
									</td>
								</tr>
								@foreach($compenvl1s as $compenvl1)
								<tr data-widget="expandable-table" aria-expanded="false">
									<td>
										<button class="btn btn-primary bg-dark">
											<i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
										</button>
										{{ $compenvl1->compenvl1 }}
										<span class="float-right dd-nodrag d-inline">

											<a href="{{ route('compenvl1.edit', $compenvl1) }}" class="btn btn-xs btn-primary ">
												<i class="fa fa-pencil-alt"></i>
											</a>
											<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal1" data-info="{{ $compenvl1 }}">
												<i class="fa fa-trash"></i>
											</button>

										</span>
									</td>
								</tr>
								<tr class="expandable-body">
									<td>
										<div class="pl-5">
											<table class="table table-hover">
												<tbody>
													<tr>
														<td class="d-flex flex-row-reverse">
															<div class="btn-group">
																<a href="{{ route('compenvl2.create', $compenvl1->id) }}" class="btn btn-sm btn-block btn-default">
																	<i class="text-primary fa fa-plus"></i>
																	Agregar
																</a>
															</div>
														</td>
													</tr>

													@foreach($compenvl2s as $compenvl2)
													@if($compenvl2->compenvl1_id === $compenvl1->id)
													<tr data-widget="expandable-table" aria-expanded="false">
														<td>
															<button class="btn btn-primary bg-dark">
																<i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
															</button>
															{{ $compenvl2->compenvl2 }}
															<span class="float-right dd-nodrag d-inline">
																<a href="{{ route('compenvl2.edit', $compenvl2) }}" class="btn btn-xs btn-primary ">
																	<i class="fa fa-pencil-alt"></i>
																</a>
																<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal2" data-info="{{ $compenvl2 }}">
																	<i class="fa fa-trash"></i>
																</button>
															</span>
														</td>
													</tr>
													<tr class="expandable-body">
														<td>
															<div class="pl-5">
																<table class="table table-hover">
																	<tbody>
																		<tr>
																			<td class="d-flex flex-row-reverse">
																				<div class="btn-group">
																					<a href="{{ route('compenvl3.create', $compenvl2) }}" class="btn btn-sm btn-block btn-default">
																						<i class="text-primary fa fa-plus"></i>
																						Agregar
																					</a>
																				</div>
																			</td>
																		</tr>
																		@foreach($compenvl3s as $compenvl3)
																		@if($compenvl3->compenvl2_id === $compenvl2->id)
																		<tr data-widget="expandable-table" aria-expanded="false">
																			<td>
																				{{ $compenvl3->compenvl3 }}
																				<span class="float-right dd-nodrag d-inline">
																					<a href="{{ route('compenvl3.edit', $compenvl3) }}" class="btn btn-xs btn-primary ">
																						<i class="fa fa-pencil-alt"></i>
																					</a>
																					<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteModal3" data-info="{{ $compenvl3 }}">
																						<i class="fa fa-trash"></i>
																					</button>
																				</span>
																			</td>
																		</tr>
																		@endif
																		@endforeach
																	</tbody>
																</table>
															</div>
														</td>
													</tr>
													@endif
													@endforeach
												</tbody>
											</table>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h6 class="modal-info" id="exampleModalLabel"></h6>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<form id="formDelete1" action="" data-action="{{ route('compenvl1.destroy', 1) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>

			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h6 class="modal-info" id="exampleModalLabel"></h6>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<form id="formDelete2" action="" data-action="{{ route('compenvl2.destroy', 1) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>

			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h6 class="modal-info" id="exampleModalLabel"></h6>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<form id="formDelete3" action="" data-action="{{ route('compenvl3.destroy', 1) }}" method="POST">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>

			</div>
		</div>
	</div>
</div>
@stop

@section('css')

@stop

@section('js')
<script>
	$('#deleteModal1').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var compe = button.data('info')
		var modal = $(this)
		var action = $('#formDelete1').attr('data-action').slice(0, -1)
		action += compe.id
		console.log(action)
		$('#formDelete1').attr('action', action)
		modal.find('.modal-title').text('Confirmar')
		modal.find('.modal-info').text('¿Estas seguro de eliminar la competencia ' + compe.compenvl1 + '?')
	})
	$('#deleteModal2').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var compe = button.data('info')
		var modal = $(this)
		var action = $('#formDelete2').attr('data-action').slice(0, -1)
		action += compe.id
		console.log(action)
		$('#formDelete2').attr('action', action)
		modal.find('.modal-title').text('Confirmar')
		modal.find('.modal-info').text('¿Estas seguro de eliminar la competencia ' + compe.compenvl2 + '?')
	})
	$('#deleteModal3').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var compe = button.data('info')
		var modal = $(this)
		var action = $('#formDelete3').attr('data-action').slice(0, -1)
		action += compe.id
		console.log(action)
		$('#formDelete3').attr('action', action)
		modal.find('.modal-title').text('Confirmar')
		modal.find('.modal-info').text('¿Estas seguro de eliminar la competencia ' + compe.compenvl3 + '?')
	})
	/*
	$(document).ready(function()
    {
        let shouldFire = ;

        if (shouldFire) {
            Swal.fire('Success!', 'Entry Successfull', 'success');
        }

    });
	*/
</script>
@stop