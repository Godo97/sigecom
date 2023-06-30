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
			<div class="alert alert-danger d-flex align-items-center" role="alert">
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				<strong>{{ $message }}</strong>

			</div>
			@endif
			@if ($message = Session::get('destroy'))
			<div class="alert alert-danger d-flex align-items-center" role="alert">
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				<strong>{{ $message }}</strong>

			</div>
			@endif
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
											<form action="{{ route('compenvl1.destroy', $compenvl1) }}" method="POST">
												@csrf
												@method('DELETE')
												<a href="{{ route('compenvl1.edit', $compenvl1) }}" class="btn btn-xs btn-primary ">
													<i class="fa fa-pencil-alt"></i>
												</a>
												<button type="submit" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@mdo">
													<i class="fa fa-trash"></i>
												</button>

											</form>
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
																<a href="{{ route('compenvl2.create') }}" class="btn btn-sm btn-block btn-default">
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
																<form action="{{ route('compenvl2.destroy', $compenvl2) }}" method="POST">
																	@csrf
																	@method('DELETE')
																	<a href="{{ route('compenvl2.edit', $compenvl2) }}" class="btn btn-xs btn-primary ">
																		<i class="fa fa-pencil-alt"></i>
																	</a>
																	<button type="submit" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@mdo">
																		<i class="fa fa-trash"></i>
																	</button>
																</form>
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
																					<a href="{{ route('compenvl3.create') }}" class="btn btn-sm btn-block btn-default">
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
																					<form action="{{ route('compenvl3.destroy', $compenvl3) }}" method="POST">
																						@csrf
																						@method('DELETE')
																						<a href="{{ route('compenvl3.edit', $compenvl3) }}" class="btn btn-xs btn-primary ">
																							<i class="fa fa-pencil-alt"></i>
																						</a>
																						<button type="submit" class="btn btn-xs btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@mdo">
																							<i class="fa fa-trash"></i>
																						</button>
																					</form>
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

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">Recipient:</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="mb-3">
						<label for="message-text" class="col-form-label">Message:</label>
						<textarea class="form-control" id="message-text"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Send message</button>
			</div>
		</div>
	</div>
</div>
@stop

@section('css')

@stop

@section('js')
<script>
	const deleteModal = document.getElementById('deleteModal')
	if (deleteModal) {
		deleteModal.addEventListener('show.bs.modal', event => {
			// Button that triggered the modal
			const button = event.relatedTarget
			// Extract info from data-bs-* attributes
			const recipient = button.getAttribute('data-bs-whatever')
			// If necessary, you could initiate an Ajax request here
			// and then do the updating in a callback.

			// Update the modal's content.
			const modalTitle = deleteModal.querySelector('.modal-title')
			const modalBodyInput = deleteModal.querySelector('.modal-body input')

			modalTitle.textContent = `New message to ${recipient}`
			modalBodyInput.value = recipient
		})
	}
</script>
@stop