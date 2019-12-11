<?php   
include ('conexion.php');

$resultado=mysqli_query($conexion, "SELECT idproducto, producto, precio FROM listado-de-precios ")
?>
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
	<title> Lista de Precios </title>
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat|Montserrat+Subrayada&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/presupuesto.css">
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
				<div class="col-2 activo">
					<a href="presupuesto.php"> Precios </a>	
				</div>
				<div class="col-2 ">
					<a href="pedido.php">Pedidos</a>	
				</div>
			</div>
		</div>
	<!-- HACER UN LISTADO DE PRECIOS QUE SE ACTUALICE POR LA BASE DE DATOS -->
		<div class="listado">
			<div class="row">
				<div class="col-3 precios-poductos">
					<h3> PRODUCTOS </h3>
				<?php 
				$sql1="SELECT * FROM productos";
				$produ=mysqli_query($conexion, $sql1);
				while($mostrar1=mysqli_fetch_array($produ)){
				?>
				<table>
					<ul>
					<li><a><?php echo $mostrar1['producto']?>:  $ <?php echo $mostrar1['precio']?> </a> </li> 
					</ul>
				</table>
				<?php
				}
				?>
				</div>
				<div class="col-3 precios-rellenos">
					<h3> RELLENOS </h3>
					<?php 
					$sql2="SELECT * FROM rellenos";
					$rell=mysqli_query($conexion, $sql2);
					while($mostrar2=mysqli_fetch_array($rell)){
					?>
					<table>
						<ul>
							<li><a><?php echo $mostrar2['relleno']?>:  $ <?php echo $mostrar2['precio']?></a></li>
						</ul>
					</table>
					<?php
					}
					?>
				</div>
				<div class="col-3 precios-coberturas">
					<h3> COBERTURAS </h3>
					<?php 
					$sql3="SELECT * FROM coberturas";
					$cob=mysqli_query($conexion, $sql3);
					while($mostrar3=mysqli_fetch_array($cob)){
					?>
					<table>
						<ul>
							<li><a><?php echo $mostrar3['cobertura']?>: $ <?php echo $mostrar3['precio']?></a></li>
						</ul>
					</table>
					<?php
					}
					?>
				</div>
				<div class="col-3  precios-formas">
					<h3> PARA TORTAS </h3>
					<h5 class="forma"> Formas </h5>
					<?php 
					$sql4="SELECT * FROM formas";
					$form=mysqli_query($conexion, $sql4);
					while($mostrar4=mysqli_fetch_array($form)){
					?>
					<table>
						<ul>
							<li><a><?php echo $mostrar4['forma']?>:  $ <?php echo $mostrar4['precio']?></a></li>
						</ul>
					</table>
					<?php
					}
					?>
					<?php 
					$sql5="SELECT * FROM pisos";
					$piso=mysqli_query($conexion, $sql5);
					while($mostrar5=mysqli_fetch_array($piso)){
					?>
					<h5 class="pisos">Pisos Extras</h5>
					<table>
						<ul> 
							<li><a>Cada uno:  $ <?php echo $mostrar5['precio']?></a></li>
						</ul>
					</table>
					<?php
					}
					?>
				</div>
				
		</div>
		</div>	
		
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