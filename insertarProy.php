<?php

include ("conectar.php");

$archivos=$_POST['archivos'];
$correo=$_POST['correo'];
$nombrePro=$_POST['nombrePro'];

$checkemail=mysqli_query($conexion, "SELECT * FROM proyectos WHERE correo='$correo'");
$f1=mysqli_fetch_array($checkemail);

if($f1>0)
	{
		echo '<script>alert("Correo existente")</script> ';
	}

	else

	{

$consulta="INSERT INTO proyectos (archivos,correo,nombrePro) VALUES('$archivos', '$correo','$nombrePro')";
                          
$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=verProy.php">';
	}
}
?>