@extends('adminlte::page')

@section('title', 'SIGECOM')

@section('content_header')

@stop

@section('content')

<?php var_dump($persona->foto); ?>

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
									<p class="category text-white">
										Web Developer, Graphic Designer, Photographer
									</p>
								</div>
							</div>
						</div>
						<div class="section" id="about">
							<div class="container">
								<div class="card" data-aos="fade-up" data-aos-offset="10">
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="card-body">
												<div class="h4 mt-0 title">About</div>
												<p>
													Hello! I am Anthony Barnett. Web Developer, Graphic
													Designer and Photographer.
												</p>
												<p>
													Creative CV is a HTML resume template for professionals.
													Built with Bootstrap 4, Now UI Kit and FontAwesome, this
													modern and responsive design template is perfect to
													showcase your portfolio, skills and experience.
													<a href="https://templateflip.com/templates/creative-cv/" target="_blank">Learn More</a>
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="card-body">
												<div class="h4 mt-0 title">Basic Information</div>
												<div class="row">
													<div class="col-sm-4">
														<strong class="text-uppercase">Age:</strong>
													</div>
													<div class="col-sm-8">24</div>
												</div>
												<div class="row mt-3">
													<div class="col-sm-4">
														<strong class="text-uppercase">Email:</strong>
													</div>
													<div class="col-sm-8">anthony@company.com</div>
												</div>
												<div class="row mt-3">
													<div class="col-sm-4">
														<strong class="text-uppercase">Phone:</strong>
													</div>
													<div class="col-sm-8">+1718-111-0011</div>
												</div>
												<div class="row mt-3">
													<div class="col-sm-4">
														<strong class="text-uppercase">Address:</strong>
													</div>
													<div class="col-sm-8">
														140, City Center, New York, U.S.A
													</div>
												</div>
												<div class="row mt-3">
													<div class="col-sm-4">
														<strong class="text-uppercase">Language:</strong>
													</div>
													<div class="col-sm-8">English, German, French</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section" id="skill">
							<div class="container">
								<div class="h4 text-center mb-4 title">Professional Skills</div>
								<div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="progress-container progress-primary">
													<span class="progress-badge">HTML</span>
													<div class="progress">
														<div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
														<span class="progress-value">80%</span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="progress-container progress-primary">
													<span class="progress-badge">CSS</span>
													<div class="progress">
														<div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
														<span class="progress-value">75%</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="progress-container progress-primary">
													<span class="progress-badge">JavaScript</span>
													<div class="progress">
														<div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
														<span class="progress-value">60%</span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="progress-container progress-primary">
													<span class="progress-badge">SASS</span>
													<div class="progress">
														<div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
														<span class="progress-value">60%</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="progress-container progress-primary">
													<span class="progress-badge">Bootstrap</span>
													<div class="progress">
														<div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
														<span class="progress-value">75%</span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="progress-container progress-primary">
													<span class="progress-badge">Photoshop</span>
													<div class="progress">
														<div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
														<span class="progress-value">70%</span>
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
								<div class="h4 text-center mb-4 title">Work Experience</div>
								<div class="card">
									<div class="row">
										<div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
											<div class="card-body cc-experience-header">
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
						<div class="section">
							<div class="container cc-education">
								<div class="h4 text-center mb-4 title">Education</div>
								<div class="card">
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
								<div class="card">
									<div class="row">
										<div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
											<div class="card-body cc-education-header">
												<p>2009 - 2013</p>
												<div class="h5">Bachelor's Degree</div>
											</div>
										</div>
										<div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
											<div class="card-body">
												<div class="h5">Bachelor of Computer Science</div>
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
								<div class="card">
									<div class="row">
										<div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
											<div class="card-body cc-education-header">
												<p>2007 - 2009</p>
												<div class="h5">High School</div>
											</div>
										</div>
										<div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
											<div class="card-body">
												<div class="h5">Science and Mathematics</div>
												<p class="category">School of Secondary board</p>
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
						<div class="section" id="reference">
							<div class="container cc-reference">
								<div class="h4 mb-4 text-center title">References</div>
								<div class="card" data-aos="zoom-in">
									<div class="carousel slide" id="cc-Indicators" data-ride="carousel">
										<ol class="carousel-indicators">
											<li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
											<li data-target="#cc-Indicators" data-slide-to="1"></li>
											<li data-target="#cc-Indicators" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="row">
													<div class="col-lg-2 col-md-3 cc-reference-header">
														<img src="images/reference-image-1.jpg" alt="Image" />
														<div class="h5 pt-2">Aiyana</div>
														<p class="category">CEO / WEBM</p>
													</div>
													<div class="col-lg-10 col-md-9">
														<p>
															Habitasse venenatis commodo tempor eleifend arcu
															sociis sollicitudin ante pulvinar ad, est porta cras
															erat ullamcorper volutpat metus duis platea convallis,
															tortor primis ac quisque etiam luctus nisl nullam
															fames. Ligula purus suscipit tempus nascetur curabitur
															donec nam ullamcorper, laoreet nullam mauris dui
															aptent facilisis neque elementum ac, risus semper
															felis parturient fringilla rhoncus eleifend.
														</p>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="row">
													<div class="col-lg-2 col-md-3 cc-reference-header">
														<img src="images/reference-image-2.jpg" alt="Image" />
														<div class="h5 pt-2">Braiden</div>
														<p class="category">CEO / Creativem</p>
													</div>
													<div class="col-lg-10 col-md-9">
														<p>
															Habitasse venenatis commodo tempor eleifend arcu
															sociis sollicitudin ante pulvinar ad, est porta cras
															erat ullamcorper volutpat metus duis platea convallis,
															tortor primis ac quisque etiam luctus nisl nullam
															fames. Ligula purus suscipit tempus nascetur curabitur
															donec nam ullamcorper, laoreet nullam mauris dui
															aptent facilisis neque elementum ac, risus semper
															felis parturient fringilla rhoncus eleifend.
														</p>
													</div>
												</div>
											</div>
											<div class="carousel-item">
												<div class="row">
													<div class="col-lg-2 col-md-3 cc-reference-header">
														<img src="images/reference-image-3.jpg" alt="Image" />
														<div class="h5 pt-2">Alexander</div>
														<p class="category">CEO / Webnote</p>
													</div>
													<div class="col-lg-10 col-md-9">
														<p>
															Habitasse venenatis commodo tempor eleifend arcu
															sociis sollicitudin ante pulvinar ad, est porta cras
															erat ullamcorper volutpat metus duis platea convallis,
															tortor primis ac quisque etiam luctus nisl nullam
															fames. Ligula purus suscipit tempus nascetur curabitur
															donec nam ullamcorper, laoreet nullam mauris dui
															aptent facilisis neque elementum ac, risus semper
															felis parturient fringilla rhoncus eleifend.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section" id="contact">
							<div class="cc-contact-information" style="background-image: url('images/staticmap.png')">
								<div class="container">
									<div class="cc-contact">
										<div class="row">
											<div class="col-md-9">
												<div class="card mb-0" data-aos="zoom-in">
													<div class="h4 text-center title">Contact Me</div>
													<div class="row">
														<div class="col-md-6">
															<div class="card-body">
																<form action="https://formspree.io/your@email.com" method="POST">
																	<div class="p pb-3">
																		<strong>Feel free to contact me </strong>
																	</div>
																	<div class="row mb-3">
																		<div class="col">
																			<div class="input-group">
																				<span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
																				<input class="form-control" type="text" name="name" placeholder="Name" required="required" />
																			</div>
																		</div>
																	</div>
																	<div class="row mb-3">
																		<div class="col">
																			<div class="input-group">
																				<span class="input-group-addon"><i class="fa fa-file-text"></i></span>
																				<input class="form-control" type="text" name="Subject" placeholder="Subject" required="required" />
																			</div>
																		</div>
																	</div>
																	<div class="row mb-3">
																		<div class="col">
																			<div class="input-group">
																				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
																				<input class="form-control" type="email" name="_replyto" placeholder="E-mail" required="required" />
																			</div>
																		</div>
																	</div>
																	<div class="row mb-3">
																		<div class="col">
																			<div class="form-group">
																				<textarea class="form-control" name="message" placeholder="Your Message" required="required"></textarea>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col">
																			<button class="btn btn-primary" type="submit">
																				Send
																			</button>
																		</div>
																	</div>
																</form>
															</div>
														</div>
														<div class="col-md-6">
															<div class="card-body">
																<p class="mb-0"><strong>Address </strong></p>
																<p class="pb-2">
																	140, City Center, New York, U.S.A
																</p>
																<p class="mb-0"><strong>Phone</strong></p>
																<p class="pb-2">+1718-111-0011</p>
																<p class="mb-0"><strong>Email</strong></p>
																<p>anthony@company.com</p>
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