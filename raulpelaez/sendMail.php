<?php
$Nombre = $_POST['name'];
$Mail = $_POST['email']; 
$Mensaje = $_POST['message'];
$Destino = "rpelaez@linkcare.es";
$Titulo = "Mensaje desde la web rpelaez";

$Mensaje = "Nombre: ".$Nombre."\nMail: ".$Mail."\nMensaje: ".$Mensaje;
mail ( $Destino , $Titulo , $Mensaje); 


?>
<!DOCTYPE HTML>
<!--
	Miniport 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Raúl Peláez</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Inicio</a></li>
					<li><a href="#work">Sobre Mi</a></li>
					<li><a href="#portfolio">Mis Trabajos</a></li>
					<li><a href="#contact">Contacto</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper wrapper-style1 wrapper-first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="me image image-full"><img src="images/me.jpg" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1><strong>Raúl Peláez</strong>.</h1>
							</header>
							<p>Mensaje enviado correctamente!</p>
							<a href="index.html" class="button button-big">Sobre Mi</a>
						</div>
					</div>
				</article>
			</div>

					<footer>
						<ul id="copyright">
							<li>&copy; 2014 Barcelona (SPAIN). Todos los derechos reservados.</li>
						</ul>
					</footer>
				</article>
			</div>


	</body>
</html>