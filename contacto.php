<?php
//valor que se almacena en la memoria y que puede variar
// captura de variables
$nombre 	= 	$_POST['nombre'];
$email 		= 	$_POST['email'];
$tel 		= 	$_POST['tel'];
$consulta 	= 	$_POST['consulta'];

// cuerpo del mail
$mensaje="
<strong>Nombre:</strong> $nombre<br/>
<strong>email:</strong> $email<br/>
<strong>tel:</strong> $tel <br/> 
<strong>consulta:</strong> $consulta<br/>
";

// env�o del mail
mail("micorreo@midominio.com", "Consulta Web", $mensaje, "From: $nombre <$email>
	\n
	Reply-To:$email
	\n
	Content-Type: text/html; charset=utf-8");

//Redireccionamiento a pagina Web
header ("Location: http://www.misitio.com/mipagina.html");
?>