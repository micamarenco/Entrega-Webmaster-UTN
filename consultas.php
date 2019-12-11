<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
	<link rel="manifest" href="icon/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<title> Consultas </title>
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat|Montserrat+Subrayada&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/consultas.css">
</head>
<body>
<div class="contenedor">
	<div class="holder">
		<div class="row">
			<div class="col-2 ">
				<a href="index.html"> Home </a>		
			</div>
			<div class="col-2 ">
				<a href="quienes.html"> Nosotros </a>		
			</div>
			<div class="col-2 ">
				<a href="galeria.html"> Galeria </a>		
			</div>
			<div class="col-2 activo">
				<a href="consultas.php">Consultas </a>	
			</div>
			<div class="col-2 ">
				<a href="presupuesto.php"> Precios </a>	
			</div>
			<div class="col-2 ">
				<a href="pedido.php">Pedidos</a>	
			</div>
		</div>
	</div>
		<section class="pagina4">
			<div class="formulario-consulta">
				<h2> Consultas </h2> 
				<form action="procesador-formulario-consulta.php" method="POST" class="formulario">
					<p>
						<label for="nombre">Nombre </label>
						<input type="text" id="nombre" name="nombre">
					</p>
					<p>
						<label for="email">Email </label>
						<input type="email" id="email" name="email" >
					</p>
					<p>
						<label for="comentario">Comentarios </label>
						<textarea id="comentario" name="comentario"></textarea>
					</p>
					<p class="centrado">
						<input type="submit" value="Enviar">
					</p>
				</form>
				
					<?php 
					if (isset($_GET['envio']) && $_GET['envio']=='ok'){ ?>

					<div class="mensaje"> EL MENSAJE SE ENVIO CORRECTAMENTE </div>
					
					<?php } else if (isset($_GET['envio']) && $_GET['envio']=='error'){  ?>

					<div class="mensaje"> EL MENSAJE NO SE HA PODIDO ENVIAR </div>
					
					<?php } ?>
			</div>
			<div class="row footer-consulta">
				<p> Las respuestas seran enviadas al email ingresado </p>
			</div> 
		</section>


	<footer>
	 	<div class="row">
		 	<div class="col-7 seguinos">
		 		 <p>Seguinos en las redes</p>	
		 	</div>
		 	<div class="col-5 redes">
			 	<a href="https://www.facebook.com/home.php" class="icon-facebook"></a>
			 	<a href="https://www.instagram.com/" class="icon-instagram"></a>
			 	<a href="https://web.whatsapp.com/" class="icon-whatsapp"></a>
			 	<a href="https://web.telegram.org/#/im" class="icon-telegram"></a>
		 	</div>
	 	</div>
	</footer>
</div>
</body>
</html>