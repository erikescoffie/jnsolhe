<?php

include ("conectar.php");

$archivos=$_POST['archivos'];
$correo=$_POST['correo'];
$nombrePro=$_POST['nombrePro'];

<<<<<<< HEAD
=======
$checkemail=mysqli_query($conexion, "SELECT * FROM proyectos WHERE correo='$correo'");
$f1=mysqli_fetch_array($checkemail);

if($f1>0)
	{
		echo '<script>alert("Correo existente")</script> ';
	}

	else

	{

>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
$consulta="INSERT INTO proyectos (archivos,correo,nombrePro) VALUES('$archivos', '$correo','$nombrePro')";
                          
$resultado = $conexion -> query($consulta) || die ("Ha occurrido un error al guardar los datos");

if($resultado)
	{
<<<<<<< HEAD
		echo '<p>La información se guardo correctamente.<p>';
		echo '<META HTTP-EQUIV=Refresh CONTENT="1; URL=verProy.php">';
	}
=======
		echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=verProy.php">';
	}
}
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
?>