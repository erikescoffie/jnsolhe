<?php

include ("conectar.php");

$nombre=$_POST['nombre'];
$nombreempresa=$_POST['nombreempresa'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$contrasenia=$_POST['contrasenia'];
$rcontrasenia=$_POST['rcontrasenia'];

$checkemail=mysqli_query($conexion, "SELECT correo FROM usuarios WHERE correo='$correo'");
$f1=mysqli_fetch_array($checkemail);

if($f1>0)
	{
		echo '<script>alert("Correo existente")</script> ';
	}

if($contrasenia != $rcontrasenia)
	{
		echo '<script>alert("Contraseñas diferentes")</script> ';
	}

	else

	{

$consulta="INSERT INTO usuarios (nombre, nombreempresa, telefono, correo,contrasenia,rcontrasenia) VALUES('$nombre', '$nombreempresa', '$telefono', '$correo', '$contrasenia','$rcontrasenia')";
                          
$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
<<<<<<< HEAD
		echo '<p>La información se guardo correctamente.<p>';
		echo '<META HTTP-EQUIV=Refresh CONTENT="1; URL=index.php">';
=======
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=index.php">';
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
	}
}
?>