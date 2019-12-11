<?php
include('conexion.php');

	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$comentario=$_POST['comentario'];

$resultado= mysqli_query($conexion, "INSERT INTO consulta VALUES (NULL, '$nombre', '$email', '$comentario')");

if ($resultado !=0) {

//email para mi
	$destino='mm@gmail.com'; 
	$remitente="From: $nombre <$email>"; 
	$asunto= $nombre . ' envió una consulta a traves de la web';
	$contenido= 'Nombre: ' . $nombre . "\r\n"; 
	$contenido.='Email: '.$email. "\r\n";
	$contenido.='Comentario: '.$comentario; 

//email para el cliente
	$remitente_usuario="From: sitio web <mm@gmail.com>";
	$asunto_usuario='Aviso de recibo de consulta';
	$contenido_usuario='Hola '.$nombre.' enviaste el siguiente comentario a traves de la web: '.$comentario. "\r\n";
	$contenido_usuario.='A la brevedad nos comunicaremos';

//emails
	mail($destino,$asunto,$contenido,$remitente);
	mail($email,$asunto_usuario, $contenido_usuario,$remitente_usuario);


	header('location:consultas.php?envio=ok#consulta');

} else {
	header('location:consultas.php?envio=error#consulta');

}


?>