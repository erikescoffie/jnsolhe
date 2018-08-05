<?php

include ("conectar.php");

$archivos=$_POST['archivos'];
$correo=$_POST['correo'];
$nombrePro=$_POST['nombrePro'];

$consulta="INSERT INTO proyectos (archivos,correo,nombrePro) VALUES('$archivos', '$correo','$nombrePro')";
                          
$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
		echo '<p>La información se guardo correctamente.<p>';
		echo '<META HTTP-EQUIV=Refresh CONTENT="1; URL=verProy.php">';
	}
?>