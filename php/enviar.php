<?php 
	$nombre = $_POST['email'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];
	$mensaje = "Enviado el:" date('d/m/y', time());

	$para = 'gonzaloduque4@gmail.com';

	mail($para, utf8_decode($mensaje), $header);

	header("Location:index.html");
 ?>