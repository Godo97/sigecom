@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')
	
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
					<div class="page-content">

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