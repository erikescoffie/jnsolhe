<?php

include ("conectar.php");

$correo=$_POST['correo'];
$contrasenia=$_POST['contrasenia'];


echo $nombre;


$consulta="INSERT INTO admi (correo, contrasenia) VALUES('$correo','$contrasenia')";
                          
$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';
	}
?>
