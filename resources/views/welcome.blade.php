<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="description"
          content="Tu Salud es lo primero"/>
    <meta name="keywords"
          content="Especialidades de todas las áreas"/>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/><![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156681224-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156681224-1');
</script>


    <meta name="viewport" content="width=device-width,initial-scale=1"><!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <link rel="icon" href="../img/CLINICA.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <title>Clínica Miranda</title>
    <link rel="stylesheet" href="{{asset('css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashcore.min.css')}}">
    <style>
        ::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #24b7f1;
            background-image: -webkit-linear-gradient(90deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent)
        }

        /* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
        .container::-webkit-scrollbar-thumb:hover {
            background: #1c49b3;
            box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
            background-image: -webkit-linear-gradient(90deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent)

        }

        /* Cambiamos el fondo cuando esté en active */
        .container::-webkit-scrollbar-thumb:active {
            background-color: #999999;
        }
    </style>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
			your browser</a> to improve your experience.</p>
		<![endif]--><!-- Making stripe menu -->
		<!--encabezado de la paguina-->
		<nav class="st-nav navbar main-nav navigation fixed-top" id="main-nav">
			<div class="container">
				<ul class="st-nav-menu nav navbar-nav">
					<li class="st-nav-section nav-item"><a href="#main" class="navbar-brand">
						<img src="../../img/CLINICA.png" alt="Dashcore" class="logo logo-sticky d-block d-md-none">
						<img src="img/clinicaligth.png" alt="Dashcore" class="logo d-none d-md-block"></a></li>
					<li class="st-nav-section st-nav-primary nav-item">
						<a class="st-root-link nav-link" href="index.html">Inicio </a>
						<a class="st-root-link item-products st-has-dropdown nav-link"
						   data-dropdown="blocks">Servicios </a>
						<a class="st-root-link item-products st-has-dropdown nav-link"
						   data-dropdown="pages">Productos </a>
						<a class="st-root-link nav-link" href="#"
						>Sobre nosotros</a>
						<a class="st-root-link nav-link" href="contacto.html"
						>Visítanos </a>
						<!--<a class="st-root-link nav-link" href="blog/blog-grid.html">Blog</a>-->
					</li>
					<li class="st-nav-section st-nav-secondary nav-item">
						<a class="btn btn-rounded btn-outline mr-3 px-3" href="login">
							<i class="fas fa-sign-in-alt d-none d-md-inline mr-md-0 mr-lg-2"></i>
							<span class="d-md-none d-lg-inline">Login</span>
						</a>
						<a class="btn btn-rounded btn-solid px-3" href="contacto" >
							<i class="fas fa-phone d-none d-md-inline mr-md-0 mr-lg-2"></i>
							<span class="d-md-none d-lg-inline">Contáctanos</span>
						</a>
                    </li>
					<li class="st-nav-section st-nav-mobile nav-item">
						<button class="st-root-link navbar-toggler" type="button"><span class="icon-bar"></span> <span
								class="icon-bar"></span> <span class="icon-bar"></span></button>
						<div class="st-popup">
							<div class="st-popup-container"><a class="st-popup-close-button">Close</a>
								<div class="st-dropdown-content-group">
									<h4 class="text-uppercase regular">Que buscas?</h4>
		
									<a class="regular text-warning" href="#">
										<i class="fas fa-home icon"></i> Inicio </a>
									<a
											class="regular text-primary" href="#"><i class="far fa-building icon"></i>
										Sobre nosotros </a>
									<a class="regular text-info"
									   href="#"><i
											class="fa fa-map-marked icon"></i> Visítanos</a>
									<a class="regular text-success" href="#"><i
											class="far fa-envelope icon"></i> Contáctanos </a>
		
								</div>
								<div class="st-dropdown-content-group b-t bw-2"><h4 class="text-uppercase regular">
									Productos y servicios</h4>
									<div class="row">
										<div class="col mr-4">
										<a class="bg-light" href="#">Atención Médica	</a>
											<a href="#"> Guía Médica</a>
											<a class="bg-light" href="#">Emergencias</a>
											
										</div>
										
									</div>
								</div>
								<!--<div class="st-dropdown-content-group bg-light b-t"><a href="login.html">Sign in <i
										class="fas fa-arrow-right"></i></a></div>-->
							</div>
						</div>
					</li>
				</ul>
			</div>
			
		</nav>
		<!--centro principal de la paguina-->
		<main><!-- ./Page header -->
			<header class="header online-payment-header section text-contrast">
				<div id="stripes"><span></span><span></span><span></span><span></span><span></span></div>
				<div class="container overflow-hidden bring-to-front">
					<div class="row">
						<div class="col-md-6"><h1 class="text-contrast bold">Clínica Miranda<span class="d-block light">Atención Médica las 24 horas</span>
						</h1>
							<p class="lead">Tu salud es lo primero.</p>
							<!--  <nav class="nav mt-5"><a href="#" class="nav-link mr-3 btn btn btn-rounded btn-contrast"><i
									  class="fas fa-tag mr-3"></i> Plans & pricing </a><a href="#"
																						  class="nav-link btn btn-rounded btn-success">Start
								  now</a></nav>-->
						</div>
						<div class="col-md-6"><img src="img/compu6.png" class="img-hero img-responsive absolute-md" alt="">
						</div>
					</div>
				</div>
			</header><!-- ./Online Payment - Features -->
			<section id="features" class="section bg-contrast edge top-left">
				<div class="container">
					<div class="section-heading mb-6 text-center">
						<h2>Qué estás buscando?</h2>
						<h5 class="text-primary bold small text-uppercase">
							Te presentamos nuestras especialidades </h5>
					</div>
					<div class="row gap-y text-center text-md-left">
						@foreach ($especialidades as $especialidad)
					
							<div class="col-md-4 py-4 rounded shadow-hover text-center">
								<div class="icon-shape mb-4">
									<svg xmlns="http://www.w3.org/2000/svg"
										viewBox="0 0 276.1 281.01" class="shape shape-xxl drop-shadow">
										<defs>
											<style>.cls-1 {
												opacity: 0.8;
												fill: url(#linear-gradient);
											}</style>
											<style>.cls-1 {
												fill: #1e96d7;
											}</style>
											<linearGradient id="linear-gradient" y1="140.5" x2="276.1" y2="140.5"
															gradientUnits="userSpaceOnUse">
												<stop offset="0" stop-color="#0077b5"/>
												<stop offset="1" stop-color="#1e96d7"/>
											</linearGradient>
										</defs>
										<title>Recurso 4</title>
										<g id="layer_2" data-name="layer 2">
											<g id="OBJECTS">
												<path class="cls-1"
													d="M261.95,86.82a83.45,83.45,0,0,0-8.57-10.71l0,0s-50.84-57.89-137-73.9l0,0A92.94,92.94,0,0,0,5,77.21c-17.58,85.56,16.63,154.31,16.83,154.72a83.17,83.17,0,0,0,6.67,11.93c21.11,31.38,60.18,43.83,96.07,33.7,0,0,58.12-14.28,123.33-79h0C278.76,169,285.58,121.95,261.95,86.82Z"/>
											</g>
										</g>
									</svg>
									<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
										<img src="{{asset('/imagenes/'.$especialidad->imagen)}}" class="stroke-contrast icon center-xy w-100w-100" >
									</div>
								</div>
								<h5 class="bold text-capitalize">{{$especialidad->nombre}}</h5>
								<p class="">{{$especialidad->descripcion}}</p>
							</div>
						
						@endforeach
					</div>	
				</div>
				
			</section><!-- Features -->
		<!-- Big Screen - Customer Management -->
			
			
			<!-- <section class="section bg-light send-and-receive">
				 <div class="container bring-to-front">
					 <div class="row gap-y">
						 <div class="col-md-6">
							 <div class="rounded bg-contrast shadow-box image-background off-left-background p-4 pl-6 pl-md-9"
								  style="background-image: url(img/payments/send.svg)"><h3>Send Payments</h3>
								 <p class="text-secondary mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error
									 eveniet nihil perspiciatis quia quidem quod ratione sapiente sint?</p></div>
						 </div>
						 <div class="col-md-6">
							 <div class="rounded bg-contrast shadow-box image-background off-left-background p-4 pl-6 pl-md-9"
								  style="background-image: url(img/payments/receive.svg)"><h3>Receive Payment</h3>
								 <p class="text-secondary mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error
									 eveniet nihil perspiciatis quia quidem quod ratione sapiente sint?</p></div>
						 </div>
					 </div>
				 </div>
			 </section>&lt;!&ndash; ./CTA - Create Account &ndash;&gt;
			 <section class="section bg-contrast edge top-left b-b">
				 <div class="container pt-5">
					 <div class="d-flex align-items-center flex-column flex-md-row">
						 <div class="text-center text-md-left"><p class="light mb-0 text-primary lead">Ready to get started?</p>
							 <h2 class="mt-0">Create an account now</h2></div>
						 <a href="register.html" class="btn btn-primary btn-rounded mt-3 mt-md-0 ml-md-auto">Create DashCore
							 account</a></div>
				 </div>
			 </section>-->
		</main><!-- ./Footer - Simple -->
		<!--pie de la paguina-->
		<footer class="site-footer section block bg-contrast">
			<div class="container py-4">
				<div class="row align-items-center">
					<div class="col-md-5 text-center text-md-left">
						<nav class="nav justify-content-center justify-content-md-start"><a class="nav-item nav-link"
																							href="about.html">Sobre nosotros</a>
							<a
									class="nav-item nav-link" href="#">Servicios</a> <a class="nav-item nav-link"
																						href="blog/blog-grid.html">Visítanos</a>
						</nav>
					</div>
					<div class="col-md-2 text-center"><img src="img/logo.png" alt="" class="logo"></div>
					<div class="col-md-5 text-center text-md-right"><p class="mt-2 mb-0 text-secondary small">© 2018 5studios.
						All Rights Reserved</p></div>
				</div>
			</div>
		</footer>
		<script src="js/lib.min.js"></script>
		<script src="js/dashcore.min.js"></script>
		<!-- Código de instalación Cliengo para contrerasojedaandres@gmail.com --> 
		<script type="text/javascript">
		(function ()
		{ 
		var ldk = document.createElement('script'); 
		ldk.type = 'text/javascript'; ldk.async = true; 
		ldk.src = "{{asset('js/cliengo.js')}}"; 
		var s = document.getElementsByTagName('script')[0]; 
		s.parentNode.insertBefore(ldk, s);
		})
		();
		</script>
		
</body>
</html>