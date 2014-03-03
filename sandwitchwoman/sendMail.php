<?php
$Nombre = $_POST['name'];
$Mail = $_POST['email']; 
$Mensaje = $_POST['message'];
$Destino = "sandwitchwoman@gmail.com";
$Titulo = "NUEVO PEDIDO!";

$Mensaje = "Nombre: ".$Nombre."\nMail: ".$Mail."\nPedido: ".$Mensaje;
mail ( $Destino , $Titulo , $Mensaje); 


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>SandwitchWoman</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo"><a href="#">SandwitchWoman</a></h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.html?#intro">PRESENTACION</a></li>
							<li><a href="index.html?#one">QUE HACEMOS</a></li>
							<li><a href="index.html?#two">QUIENES SOMOS</a></li>
							<li><a href="index.html?#work">NUESTRO TRABAJO</a></li>
							<li><a href="index.html?#contact">CONTACTO</a></li>
						</ul>
					</nav>

			</header>
			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<h2>PEDIDO ENVIADO!</h2>
					</header>
					<p><font size="6">En breve nos pondremos en contacto.<br><strong>Quieres hacer otro pedido?</strong></font></p>
					<footer>
						<a href="index.html?#contact" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
		
		
			
		<!-- Footer -->
			<footer id="footer">
			
				<!--
				     Social Icons
				     
				     Use anything from here: http://fortawesome.github.io/Font-Awesome/cheatsheet/)
				-->
					<ul class="actions">
						<!--<li><a href="#" class="fa solo fa-twitter"><span>Twitter</span></a></li>
						<li><a href="#" class="fa solo fa-facebook"><span>Facebook</span></a></li>-->
						<li><a href="http://sandwitchwoman.blogspot.com" class="fa solo fa-google-plus"><span>Google+</span></a></li>
						<!--<li><a href="#" class="fa solo fa-dribbble"><span>Dribbble</span></a></li>
						<li><a href="#" class="fa solo fa-pinterest"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa solo fa-instagram"><span>Instagram</span></a></li>-->
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li><strong>SandwitchWoman</strong> &copy; 2014 Todos los derechos reservados ® <strong>sandwitchwoman@gmail.com</strong></li>
						
					</ul>
			
			</footer>

	</body>
</html>