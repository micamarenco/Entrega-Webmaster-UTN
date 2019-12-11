<?php
include('conexion.php');

	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$producto=$_POST['producto'];
	$relleno=$_POST['relleno'];
	$cobertura=$_POST['cobertura'];
	$forma=$_POST['forma'];
	$pisos=$_POST['pisos'];
	$color=$_POST['color'];
	$aclaraciones=$_POST['aclaraciones'];


$resultado= mysqli_query($conexion, "INSERT INTO pedido VALUES (NULL, '$nombre', '$email', '$producto', '$relleno', '$cobertura', '$forma', '$pisos','$color','$aclaraciones')");

if ($resultado !=0) {

//email para mi
	$destino='mm@gmail.com'; 
	$remitente="From: $nombre <$email>"; 
	$asunto= $nombre . ' envió un pedido a traves de la web';
	$contenido= 'Nombre: ' . $nombre . "\r\n"; 
	$contenido.='Email: '.$email. "\r\n";
	

//email para el cliente
	$remitente_usuario="From: sitio web <mm@gmail.com>";
	$asunto_usuario='Aviso de recibo de pedido';
	$contenido_usuario='Hola '.$nombre.' hiciste el siguiente pedido a traves de la web: '.$contenido. "\r\n";
	$contenido_usuario.='A la brevedad nos comunicaremos';

//emails
	mail($destino,$asunto,$contenido,$remitente);
	mail($email,$asunto_usuario, $contenido_usuario,$remitente_usuario);


	header('location:pedido.php?envio=ok#pedido');

} else {
	header('location:pedido.php?envio=error#pedido');

}


?>
