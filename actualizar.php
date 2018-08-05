<?php

include ("conectar.php");

<<<<<<< HEAD

$nombrePro =$_GET['nombrePro'];
$archivos=$_GET['archivos'];
$correo=$_GET['correo'];

$querys = ("UPDATE proyectos SET nombrePro='$nombrePro', archivos='$archivos' WHERE correo='$correo'");

$resultado = $conexion -> query($querys) || die ("Ha occurrido un error al guardar los datos");
	{
		echo '<p>La información se actualizo correctamente.<p>';
		echo '<META HTTP-EQUIV=Refresh CONTENT="1; URL=verProy.php">';
=======
$nombre=$_GET['nombre'];
$nombreempresa=$_GET['nombreempresa'];
$telefono=$_GET['telefono'];
$correo=$_GET['correo'];
$contrasenia=$_GET['contrasenia'];
$rcontrasenia=$_GET['rcontrasenia'];

$querys = ("UPDATE usuarios SET nombre='$nombre', nombreempresa='$nombreempresa', telefono='$telefono', correo='$correo', contrasenia='$contrasenia', rcontrasenia='$rcontrasenia' WHERE correo='$correo'");

$resultado = $conexion -> query($querys) || die ("Ha occurrido un error al guardar los datos");
	{
		//echo '<p>Se guardo correctamnete, gracias.<p>';
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=verProyectos.php">';
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
	}

?>