<?php  
	//$conexion = new mysqli("localhost", "usuario", "contraseña", "nombredelabasededatos")

<<<<<<< HEAD
	$conexion = new mysqli("localhost", "root", "", "jnsolhe");
=======
<<<<<<< HEAD
	$conexion = new mysqli("localhost", "root", "", "jnsolhe");
=======
	$conexion = new mysqli("localhost", "root", "", "prueba");
>>>>>>> b67a8f8c970304caf810bcb4a58f950abb6aebdb
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba

	//para comprobar la conexion
	if ($conexion -> connect_errno)
	{
		printf("Conexion fallida:", $conexion->connect_error); //imprime el error de conexion
	}
?>