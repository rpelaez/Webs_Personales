<?php
$Nombre = $_POST['name'];
$Mail = $_POST['email']; 
$Mensaje = $_POST['message'];
$Destino = "mguerrero@linkcare.es";
$Titulo = "Mensaje desde la web http://lamercheria.host56.com";

$Mensaje = "Nombre: ".$Nombre."\nMail: ".$Mail."\nMensaje: ".$Mensaje;
mail ( $Destino , $Titulo , $Mensaje); 


?>
<!DOCTYPE HTML>
<!--
	Astral 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>La Mercheria</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/noscript.css" />
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="index.html?#me" class="fa fa-home active"><span>INTRO</span></a>
						<a href="index.html?#work" class="fa fa-folder"><span>MI TRABAJO</span></a>
						<a href="index.html?#email" class="fa fa-envelope"><span>CONTACTA</span></a>
						<a href="http://lamercheria.blogspot.com.es/" class="fa fa-google-plus"><span>BLOG</span></a>
						<a href="https://twitter.com/LaMercheria" class="fa fa-twitter"><span>TWITTER</span></a>
						<a href="https://es-la.facebook.com/mercedes.guerrero.3382" class="fa fa-facebook"><span>FACEBOOK</span></a>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<!-- Me -->
							<article id="me" class="panel">
								<header>
									<h1>Mensaje Enviado!</h1>
									<span class="byline">En breve nos pondremos en contacto con usted</span>
								</header>
								<a href="index.html?#work" class="jumplink pic">
									<span class="jumplink arrow fa fa-chevron-right"><span>See my work</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

						

					</div>
		
				<!-- Footer -->
					<div id="footer">
						<ul class="links">
						<li>&copy; La Mercheria. Todos los derechos reservados 2014 ® Barcelona (SPAIN)<br> Contacto Tél. <strong>+34 629 97 33 33</strong> Mail. <strong>mguerrero@linkcare.es</strong></li>
						</ul>
					</div>
		
			</div>

	</body>
</html>