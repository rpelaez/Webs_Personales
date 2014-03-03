<?php
$Nombre = $_POST['name'];
$Mail = $_POST['email']; 
$Mensaje = $_POST['message'];
$Destino = "japelaezochoa@hotmail.com";
$Titulo = "Mensaje desde la web http://pelaezochoa.herobo.com";

$Mensaje = "Nombre: ".$Nombre."\nMail: ".$Mail."\nMensaje: ".$Mensaje;
mail ( $Destino , $Titulo , $Mensaje); 


?>
<!DOCTYPE HTML>
<!--
	Overflow 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pel&aacute;ez Ochoa</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css" />
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
			<section id="header">
				<header>
					<img src="images/portada.jpg" width="100px"
					style="
					
border-radius: 40px 40px 40px 40px; 
-moz-border-radius: 40px 40px 40px 40px; 
-webkit-border-radius: 40px 40px 40px 40px; 

					"
					>
					<img src="images/portada2.jpg" width="150px"
					style="
					
border-radius: 90px 90px 90px 90px; 
-moz-border-radius: 90px 90px 90px 90px; 
-webkit-border-radius: 90px 90px 90px 90px; 

					"
					>
					<img src="images/portada3.jpg" width="100px"
					style="
					
border-radius: 40px 40px 40px 40px; 
-moz-border-radius: 40px 40px 40px 40px; 
-webkit-border-radius: 40px 40px 40px 40px; 

					"
					>
					<h1>Mensaje enviado correctamente!</h1>
				</header>
				<footer>
					<a href="index.html" class="button style2 scrolly scrolly-centered">Seguir en la web del artista</a>
				</footer>
			</section>
		
		
		
		
		
		<section id="footer">
			<ul class="icons">
				<li><a href="http://www.artmajeur.com/pelaezochoa/" class="fa"><span>ArtMajeur</span></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="http://www.ebay.es/usr/odities_es" class="fa"><span>eBay</span></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a href="https://www.facebook.com/joseantonio.pelaezochoa" class="fa"><span>Facebook</span></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<!--<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
				<li><a href="#" class="fa fa-google-plus solo"><span>Google+</span></a></li>
				<li><a href="#" class="fa fa-pinterest solo"><span>Pinterest</span></a></li>
				<li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
				<li><a href="#" class="fa fa-linkedin solo"><span>LinkedIn</span></a></li>
				-->
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Todos los derechos reservados ® 2014. Barcelona (SPAIN)</li>
				</ul>
			</div>
		</section>

	</body>
</html>