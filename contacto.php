<?php
	// VARIABLE: Es un espacio reservado en la memoria, para almacenar datos, cuyo valor puede cambiar (TEMPORAL)
	//	PHP 			HTML
		$nombre 	=	$_POST['nombre']; 	//Cristian
		$email 		=	$_POST['email'];	//cristiandracedo@hotmail.com
		$consulta 	=	$_POST['consulta'];	//��Buenas Tardes, America!!

	// cuerpo del mail
	$mensaje="
	<strong>Nombre:</strong> $nombre<br/>
	<strong>email:</strong> $email<br/>
	<strong>tel:</strong> $tel <br/> 
	<strong>consulta:</strong> $consulta<br/>
	";

	// env�o del mail
		//destinatario		//asunto		//cuerpo  //remitente
	mail("info@misitio.com", "presupuesto", $mensaje, "From: $nombre <$email>\nReply-To:$email\nContent-Type: text/html; charset=utf-8");

	//Redireccionamiento a pagina Web
	header("Location: http://www.misitio.com/contacto.html");
?>