<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Meta -->
    <title>GHC Gestor de Historiales Clínicos</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../css/iconoG.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../css/apple-touch-icon.png">

	<!-- Google Fonts -->
 	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet">

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="style.css">

	<!-- [if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif] -->

</head>
<body>

		<header class="header site-header">
			<div class="container">
				<nav class="navbar navbar-default yamm">
				    <div class="container-fluid">
				        <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				                <span class="sr-only">Toggle navigation</span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				                <span class="icon-bar"></span>
				            </button>
							<a class="navbar-brand" href="index.html"><img src="../css/Icono.svg" alt=""></a>
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				            <ul class="nav navbar-nav navbar-right">
				                <li class="active"><a href="{{ url('inicio')}}">Inicio</a></li>
				                <li><a href="#redesSociales">Contáctenos</a></li>
                                <li class="lastlink hidden-xs hidden-sm"><a class="btn btn-primary" href="{{url('login')}}">Iniciar Sesión</a></li>
								<li class="lastlink hidden-xs hidden-sm"><a class="btn btn-primary" href="{{url('registrarse/create')}}"> Registrarse</a></li>
                            </ul>
				        </div><!--/.nav-collapse -->
				    </div><!--/.container-fluid -->
				</nav><!-- end nav -->
			</div><!-- end container -->
		</header><!-- end header -->

		<section class="section transheader homepage parallax" data-stellar-background-ratio="3" style="background-image:url('../css/medico-en-casa.png');">
			
		</section>

		<section class="section nopad">
			<div class="container-fluid">
				<center><h2>Funcionalidades</h2></center>
				<div class="row text-center">
					<div class="col-md-3 col-sm-6 nopad first">
						<div class="home-service c1">
							<i class="flaticon-competition"></i>
							<p>Controle la carga y duplicidad de firmas</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad">
						<div class="home-service c2">
							<i class="flaticon-chat"></i>
							<p>Clasifica las Historias Clínicas del servicio</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad">
						<div class="home-service c3">
							<i class="flaticon-domain"></i>
							<p>Agiliza los métodos historiales del paciente</p>
						</div><!-- end home-service -->
					</div><!-- end col -->

					<div class="col-md-3 col-sm-6 nopad last">
						<div class="home-service c4">
							<i class="flaticon-medal"></i>
							<p>Gestione informe de los pacientes</p>
						</div><!-- end home-service -->
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section overfree">
			<div class="icon-center"><img src="../css/servicios.png" alt=""  style="max-height: 70px; max-width: 70px;"></div>
			<div class="container">
				<div class="section-title text-center">
					<small>Bienvenido a nuestro servicio de GHC</small>
					<h3>Razones para escogernos</h3>
					<hr>
					<p class="lead"> GHC: Gestor de Historiales Clínicos te permite organizar de manera efectiva todos aquellos documentos <br>en PDF que son muy complejas de conocer la información en ellas.</p>
				</div><!-- end section-title -->

				<div class="row service-list text-center">
					<div class="col-md-4 col-sm-12 col-xs-12 first">
						<div class="service-wrapper wow fadeIn">
							<img src="../css/que-hacer.png" alt="" style="max-height: 100px; max-width: 100px;">
							<div class="service-details">
								<h4><a href="service-01.html" title="">¿Qué hacemos?</a></h4>
								<p>Organizamos y clasificamos las historias clínicas de tus pacientes.</p>
								<a href="#">Ver detalles</a>
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->

					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="service-wrapper wow fadeIn">
							<img src="../css/acerca-de.png" alt="" style="max-height: 100px; max-width: 100px">
							<div class="service-details">
								<h4><a href="service-02.html" title="">¿Quienes somos?</a></h4>
								<p>Somos una entidad dedicala a la salud para la mejora de los servicios.</p>
								<a href="#">Ver detalles</a>
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->

					<div class="col-md-4 col-sm-12 col-xs-12 last">
						<div class="service-wrapper wow fadeIn">
							<img src="../css/objetivo.png" alt="" style="max-height: 100px; max-width: 100px">
							<div class="service-details">
								<h4><a href="service-02.html" title="">Nuestra misión</a></h4>
								<p>Ayudar a mejorar la agilidad de el proceso de recepción de las Historias Clínicas.</p>
								<a href="#">Ver detalles</a>
							</div>
						</div><!-- end service-wrapper -->
					</div><!-- end col -->
				</div><!-- end row -->

				<hr class="invis2">

				<div class="row">
					<div class="col-md-4">
                        <div class="milestone-counter c1">
                            <img src="../css/icon_07.png" alt="" class="alignleft">
                            <h3 class="stat-count">2901</h3>
                            <p>CLientes satisfechos</p>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="milestone-counter c2">
                            <img src="../css/icon_08.png" alt="" class="alignleft">
                            <h3 class="stat-count">304</h3>
                            <p>Estrategias online</p>
                        </div>
                    </div>

					<div class="col-md-4">
                        <div class="milestone-counter c3">
                            <img src="../css/icon_09.png" alt="" class="alignleft">
                            <h3 class="stat-count">890</h3>
                            <p>Resultados gratificantes</p>
                        </div>
                    </div>
                </div>
			</div><!-- end container -->
		</section><!-- end section -->

		<section class="section lb nopad spotlight style1">
		    <div class="content">
				<h2>Preguntanos sobre tus servicios en línea</h2>
		        <p>Atendemos en nuestro sitio web las 24 horas, 7 dias; si deseas mas información comunícate atravez de nuestras redes sociales</p> 
				<a href="#redesSociales" class="btn btn-transparent">Conocer más...</a>
		    </div>
		    <div class="image col-md-4 hidden-sm hidden-xs">
		        <img src="../css/contact.png" alt="" />
		    </div>
		</section>

		<section class="section overfree">
			<div class="icon-center"><img src="../css/ambiente-de-pixeles.png" alt=""  style="max-height: 70px; max-width: 70px;"></div>
			<div class="container">
				<div class="row callout bgcolor">
					<div class="col-md-9">
						<p class="lead">Tenemos cientos de clientes contentos, ¿Quieres ser parte de esta gran familia? ¡Visitanos en nuestro sitio web!</p>
					</div>
					<div class="col-md-3">
						<div class="button-wrap text-center">
							<a href="#redesSociales" class="btn btn-transparent btn-light btn-lg">Contáctenos</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section overfree">
			<div class="icon-center"><img src="../css/ancla.png" alt=""  style="max-height: 70px; max-width: 70px;" id="redesSociales"></div>
			<div class="container">
				<div class="row callout bgcolor">
					<center>
					<h1 style="color: white">Visítanos en nuestras redes sociales</h1>
					</center>
					<div class="col-md-4">
						<h3 style="color: white"><img src="../css/facebook.png" alt="" style="max-height: 100px; max-width: 100px;"> Facebook</h3>
					</div>
					<div class="col-md-4">
						<h3 style="color: white"><img src="../css/instagram.png" alt="" style="max-height: 100px; max-width: 100px;"> Instagram</h3>
					</div>
					<div class="col-md-4">
						<h3 style="color: white"><img src="../css/github.png" alt="" style="max-height: 100px; max-width: 100px;"> Git Hub</h3>
					</div>
				</div>
			</div>
		</section>

		<footer class="footer secondary-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <p>2021 &copy;<a href="#">GHC</a> Gestor de Historiales Clínicos. Todos los derechos reservados.</p>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="list-inline">
                            <li>Designed: <a href="https://html.design">HTML Design</a></li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
		</footer><!-- end second footer -->
	</div><!-- end wrapper -->

	<!-- jQuery Files -->
	<script src="plantilla/js/jquery.min.js"></script>
	<script src="plantilla/js/bootstrap.min.js"></script>
	<script src="plantilla/js/parallax.js"></script>
	<script src="plantilla/js/animate.js"></script>
	<script src="plantilla/js/owl.carousel.js"></script>
	<script src="plantilla/js/custom.js"></script>

</body>
</html>