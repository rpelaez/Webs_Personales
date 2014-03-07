<?php
$Nombre = $_POST['name'];
$Mail = $_POST['email']; 
$Mensaje = $_POST['message'];
$Destino = "guillermoaltuna@hotmail.com";
$Titulo = "NUEVO PEDIDO!";

$Mensaje = "Nombre: ".$Nombre."\nMail: ".$Mail."\nMensaje: ".$Mensaje;
mail ( $Destino , $Titulo , $Mensaje); 


?>
<!DOCTYPE HTML>
<!--
	Prologue 1.2 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>VitrArt Barcelona</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar120"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">VitrArt</h1>
							<span class="byline">Vitralistas especializados en Tiffani</span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--
							
								Prologue's nav expects links in one of two formats:
								
								1. Hash link (scrolls to a different section within the page)
								
								   <li><a href="#foobar" id="foobar-link" class="skel-panels-ignoreHref"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld"><span class="fa fa-whatever-icon-you-want">Foobar</span></a></li>
							
							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Introducción</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Nuestro Trabajo</span></a></li>
								<li><a href="#about" id="about-link" class="skel-panels-ignoreHref"><span class="fa fa-user">Sobre Nosotros</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-envelope">Contacto</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="https://www.facebook.com/vitrart.vitrart" class="fa fa-facebook solo"><span>Facebook</span></a></li>
							<li><a href="#contact" class="fa fa-envelope solo"><span>Email</span></a></li>
							<br><br>
							<img src="images/faaoc.jpg" width="150px">
						</ul>
				
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
				<!-- Intro -->
					<section id="top" class="one">
						<div class="container">

							<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>

							<header>
								<h2 class="alt"><strong>Mensaje Enviado!</strong></h2>
							</header>
							
							<footer>
								<a href="index.html" class="button scrolly">Volver a la web</a>
							</footer>

						</div>
					</section>
					
				
			
			</div>

		<!-- Footer -->
			<div id="footer">
				
				<!-- Copyright -->
					<div class="copyright">
						<p>&copy; Todos los derechos reservados ® 2014 Barcelona (SPAIN)</p>
					</div>
				
			</div>

	</body>
</html>