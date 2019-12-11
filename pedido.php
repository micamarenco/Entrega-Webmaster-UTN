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
	<title> Pedido </title>
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat|Montserrat+Subrayada&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/pedido.css">
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
			<div class="col-2 ">
				<a href="consultas.php">Consultas </a>	
			</div>
			<div class="col-2 ">
				<a href="presupuesto.php"> Precios </a>	
			</div>
			<div class="col-2 activo">
				<a href="pedido.php">Pedidos</a>	
			</div>
		</div>
	</div>
	<section class="pagina5">
			<div class="contenedor-pedidos">
				<div class="row">
					<div class="col-10">
						<h2> Realizar el Pedido </h2> 
						<p class="horario"> Mínimo 48hs antes </p>
						<p class="completar"> Realizar un formulario por cada producto que se desea encargar </p>
						<form action="procesador-formulario-pedido.php" method="POST" class="formulario2">
							<div class="row">
							<div class="col-6">
								<p>
									<label for="nombre">Nombre </label>
									<input type="text" id="nombre" name="nombre" required>
								</p>
								<p>
									<label for="email">Email </label>
									<input type="text" id="email" name="email" required>
								</p>
								<p>
									<label for="producto">Producto</label>
										<select name="producto" id="" >
											<option value="defecto"> Seleccionar... </option>
											<option value="torta"> Torta </option>
											<option value="brownie"> Brownie </option>
											<option value="tiramisu"> Tiramisú </option>
											<option value="cupcakes"> CupCakes </option>
											<option value="profiteroles"> Profiteroles </option>
											<option value="otro"> Otro.. </option>
										</select>
									</p>
									<p>
										<label for="relleno">Relleno</label>
										<select name="relleno" id="" >
											<option value="defecto"> Seleccionar... </option>
											<option value="dulce-de-leche"> Dulce de Leche </option>
											<option value="crema"> Crema </option>
											<option value="crema-durazno"> Crema con Durazno </option>
											<option value="crema-frutilla">Crema con Frutilla </option>
											<option value="nutella"> Nutella </option>
											<option value="chocolate"> Chocolate </option>
											<option value="otro"> Otro.. </option>
										</select>
									</p>
									<p>
										<label for="cobertura">Cobertura</label>
										<select name="cobertura" id="">
											<option value="defecto"> Seleccionar... </option>
											<option value="frutas"> Con frutas </option>
											<option value="fondant"> Fondant </option>
											<option value="chocolate">chocolate </option>
											<option value="granas"> granas </option>
											<option value="nada">nada</option>
											<option value="otro">otro</option>	
										</select>
									</p>
									<p>
										<label for="forma">Forma</label>
										<select name="forma" id="">
											<option value="defecto"> Seleccionar... </option>
											<option value="cuadrada"> Cuadrada </option>
											<option value="rectangular"> Rectangular </option>
											<option value="circular">Circular </option>
											<option value="numerica"> Numerica </option>
											<option value="otra"> otra </option>
										</select>
									</p>
							</div>
							<div class="<col-6>">
								<p>
									<label for="pisos">Cantidad de Pisos</label>
									<input type="text" id="" name="pisos">
								</p>
								<p>
									<label for="color">Color </label>
									<input type="text" id="" name="color">
								</p>
								<p class="aclaraciones">
									<label for="aclaraciones"> Aclaraciones </label>
									<input type="text" name="aclaraciones" placeholder="especificar los -otro-">
								</p>
								<p class="centrado">
									<input type="submit" value="Enviar">
									<input type="reset" value="Cancelar">
								</p>
							</div>
						</div>
					</form>
					<?php 
							if (isset($_GET['envio']) && $_GET['envio']=='ok'){ ?>

							<div class="mensaje"> EL PEDIDO SE REALIZÓ CORRECTAMENTE </div>
							
							<?php } else if (isset($_GET['envio']) && $_GET['envio']=='error'){  ?>

							<div class="mensaje"> EL PEDIDO NO SE HA PODIDO REALIZAR </div>
							
						<?php } ?>
						
				</div>
					<div class="col-2">
					 <!-- foto del costado-->
					</div>				
				</div>		
					
			</div>								 	
	</section >



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

<script src="js/bootstrap.bundle.js"></script>
</body>
</html>