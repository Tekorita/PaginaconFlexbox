<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demo con Flexbox</title>
	<script src="prefixfree.js"></script>
	<meta name= "description" content= "">
	<meta name ="viewport" content= "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link rel="stylesheet" href="css/estilos.css">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>	 -->
</head>
<body>

	
	<div class="contenedor">
		<header>
			<div class="logo">
				<img src="imagenes/logo.jpg" width = "150" alt="">
				<a href= "#">AngularJs</a>
			</div>
				<nav>
					<a class ="bordesito" href="#">Inicio</a>
					<a href="#">Blog</a>
					<a href="#">Proyectos</a>
					<a href="#">Contacto</a>
				</nav>			
		</header>

		<section class = "main">
			<article>
				<h2 class="titulo">¿Que es Prefix-free?</h2>
				Es un fichero en javascript que automáticamente nos agrega estos prefijos a las propiedades css que lo necesiten, simplificando el código ya que sólo debemos escribir la propiedad una vez, por tanto nos ahorra mucho tiempo y hace nuestro código css más fácil de entender.
			</article>
			<?php
				define("CONSTANTE", "Hola mundito.");
				echo CONSTANTE; // muestra "Hola mundo."
				
			?>
			<article>
				<h2 class="titulo">¿Cuales son sus caracteristicas?</h2>
				Como vemos esta utilidad suena muy interesante y a pesar de tener varias restricciones, la mayoría de estas se pueden resolver, para ello basta con seguir unas pequeñas guías que nos facilitan en su web oficial. Por ejemplo en esta guía nos explican cómo habilitar fácilmente el testeo local en Chrome y Opera.
			</article>
		</section>

		<aside>
			<div class="widget">
				<div class="imagen"></div>
			</div>
			<div class="widget">
				<div class="imagen"></div>
			</div>
		</aside>

		<footer>
			<section class="links">
				<a href="#">Inicio</a>
				<a href="#">Blog</a>
				<a href="#">Proyectos</a>
				<a href="#">Contacto</a>
			</section>
			<div class="social">
				<a href="#">FB</a>
				<a href="#">TW</a>
			</div>
		</footer>
	</div>
</body>
</html>