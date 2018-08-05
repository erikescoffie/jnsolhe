<?php

include ("conectar.php");


$nombre =$_GET['nombre'];
$nombreempresa=$_GET['nombreempresa'];
$correo=$_GET['correo'];
$telefono=$_GET['telefono'];
$contrasenia=$_GET['contrasenia'];
$rcontrasenia=$_GET['rcontrasenia'];

$querys = ("UPDATE usuarios SET nombre='$nombre', nombreempresa='$nombreempresa', correo='$correo', telefono='$telefono', contrasenia='$contrasenia', rcontrasenia='$rcontrasenia' WHERE correo='$correo'");

$resultado = $conexion -> query($querys) || die ("Ha occurrido un error al guardar los datos");
	{
		echo '<p>La información se actualizo correctamente.<p>';
		echo '<META HTTP-EQUIV=Refresh CONTENT="1; URL=verDatos.php">';
	}

?>