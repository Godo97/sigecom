@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')

@stop

@section('content')


<?php
$persona_info = json_decode($persona->info);

function obtener_edad_segun_fecha($fecha_nacimiento)
{
	$nacimiento = new DateTime($fecha_nacimiento);
	$ahora = new DateTime(date("Y-m-d"));
	$diferencia = $ahora->diff($nacimiento);
	return $diferencia->format("%y");
}

//var_dump($persona_info);
//var_dump($persona_info[0]->info->telefono);
?>

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
					<div>
						<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
							<div class="col-md-12 px-0">
								<div class="content-center">
									<div class="cc-profile-image">
										<a href="#"><img class="bd-placeholder-img rounded-circle" src="/img/{{$persona->foto}}" alt="Image" /></a>
									</div>
									<h2 class="display-4">{{ $persona->nombre }} {{ $persona->apellido }}</h2>
								</div>
							</div>
						</div>
						<div class="section" id="about">
							<div class="container">
								<div class="card" data-aos="fade-up" data-aos-offset="10">
									<div class="card-header">
										<div class="float-right">
											<div class="btn-group">
												<button type="button" name="create_record" id="create_record" class="btn btn-sm btn-light btn-secondary">
													<i class="fas fa-cog"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="card-body">
													<div class="h4 mt-0 title">Sobre mi</div>
													<p>
														{{ $persona_info[0]->info->about }}
													</p>
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="card-body">
													<div class="h4 mt-0 title">Información basica</div>
													<div class="row">
														<div class="col-sm-4">
															<strong class="text-uppercase">Edad:</strong>
														</div>
														<div class="col-sm-8">{{ obtener_edad_segun_fecha($persona_info[0]->info->nacimiento) }}</div>
													</div>
													<div class="row mt-3">
														<div class="col-sm-4">
															<strong class="text-uppercase">Correo:</strong>
														</div>
														<div class="col-sm-8">{{$persona_info[0]->info->correo}}</div>
													</div>
													<div class="row mt-3">
														<div class="col-sm-4">
															<strong class="text-uppercase">Telefonos:</strong>
														</div>
														<div class="col-sm-8">
															@foreach ($persona_info[0]->info->telefono as $telefono)
															{{ $telefono }}
															@endforeach
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-sm-4">
															<strong class="text-uppercase">Dirección:</strong>
														</div>
														<div class="col-sm-8">
															{{$persona_info[0]->info->direccion}}
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-sm-4">
															<strong class="text-uppercase">Idiomas:</strong>
														</div>
														<div class="col-sm-8">
															@foreach ($persona_info[0]->info->idioma as $idioma)
															{{ $idioma }}
															@endforeach
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="section" id="experience">
							<div class="container cc-experience">
								<div class="card">
									<div class="card-header">
										<div class="float-right">
											<div class="btn-group">
												<button type="button" name="create_record" id="create_record" class="btn btn-sm btn-light btn-secondary">
													<i class="fas fa-cog"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="card-doby">
										<h4>
											<div class="text-center mb-4 title" style="margin-top: 20px;">Work Experience</div>
										</h4>
										<div class="card" style="margin: 20px;">
											<div class="row">
												<div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
													<div class="card-body">
														<p>March 2016 - Present</p>
														<div class="h5">CreativeM</div>
													</div>
												</div>
												<div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
													<div class="card-body">
														<div class="h5">Front End Developer</div>
														<p>
															Euismod massa scelerisque suspendisse fermentum habitant
															vitae ullamcorper magna quam iaculis, tristique sapien
															taciti mollis interdum sagittis libero nunc inceptos
															tellus, hendrerit vel eleifend primis lectus quisque
															cubilia sed mauris. Lacinia porta vestibulum diam integer
															quisque eros pulvinar curae, curabitur feugiat arcu
															vivamus parturient aliquet laoreet at, eu etiam pretium
															molestie ultricies sollicitudin dui.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section">
							<div class="container cc-education">
								<div class="card">
									<div class="card-header">
										<div class="float-right">
											<div class="btn-group">
												<button type="button" name="create_record" id="create_record" class="btn btn-sm btn-light btn-secondary">
													<i class="fas fa-cog"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="card-doby">
										<div class="h4 text-center mb-4 title" style="margin-top: 20px;">Education</div>
										<div class="card" style="margin: 20px;">
											<div class="row">
												<div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
													<div class="card-body cc-education-header">
														<p>2013 - 2015</p>
														<div class="h5">Master's Degree</div>
													</div>
												</div>
												<div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
													<div class="card-body">
														<div class="h5">Master of Information Technology</div>
														<p class="category">University of Computer Science</p>
														<p>
															Euismod massa scelerisque suspendisse fermentum habitant
															vitae ullamcorper magna quam iaculis, tristique sapien
															taciti mollis interdum sagittis libero nunc inceptos
															tellus, hendrerit vel eleifend primis lectus quisque
															cubilia sed mauris. Lacinia porta vestibulum diam integer
															quisque eros pulvinar curae, curabitur feugiat arcu
															vivamus parturient aliquet laoreet at, eu etiam pretium
															molestie ultricies sollicitudin dui.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('css')
<style>
	.content-center {
		text-align: center;
		padding: 0 15px;
		color: #FFFFFF;
		width: 100%;
		max-width: 880px;
	}

	.category {
		text-align: center;
	}
</style>
<!--<link href="css/aos.css?ver=1.1.0" rel="stylesheet" />-->
<!--<link href="/css/main.css?ver=1.1.0" rel="stylesheet" />-->
@stop

@section('js')

@stop