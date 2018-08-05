<?php

include ("conectar.php");


$nombrePro =$_GET['nombrePro'];
$archivos=$_GET['archivos'];
$correo=$_GET['correo'];

$querys = ("UPDATE proyectos SET nombrePro='$nombrePro', archivos='$archivos' WHERE correo='$correo'");

$resultado = $conexion -> query($querys) || die ("Ha occurrido un error al guardar los datos");
	{
		echo '<p>La información se actualizo correctamente.<p>';
		echo '<META HTTP-EQUIV=Refresh CONTENT="1; URL=verProy.php">';
	}

?>