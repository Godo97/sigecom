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
										<span class="float-right dd-nodrag">
											<a href="{{ route('compenvl3.create') }}" class="btn btn-xs btn-primary">
												<i class="fa fa-pencil-alt"></i>
											</a>
											<form action="{{ route('compenvl1.destroy', $compenvl1) }}" method="POST">
												@csrf
												@method('DELETE')
												<input type="submit" class="btn btn-xs btn-danger">
												
											</form>
											<a href="" class="btn btn-xs btn-danger">
												<i class="fa fa-trash"></i>
											</a>
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
															<span class="float-right dd-nodrag">
																<a href="{{ route('compenvl3.create') }}" class="btn btn-xs btn-primary">
																	<i class="fa fa-pencil-alt"></i>
																</a>
																<a href="{{ route('compenvl3.create') }}" class="btn btn-xs btn-danger">
																	<i class="fa fa-trash"></i>
																</a>
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
																				<span class="float-right dd-nodrag">
																					<a href="{{ route('compenvl3.create') }}" class="btn btn-xs btn-primary">
																					<i class="fa fa-pencil-alt"></i>
																					</a>
																					<a href="{{ route('compenvl3.create') }}" class="btn btn-xs btn-danger">
																					<i class="fa fa-trash"></i>
																					</a>
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
@stop

@section('css')

@stop

@section('js')
	
@stop