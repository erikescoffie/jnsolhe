<?php
	session_start(); 
?>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667

<?php
	include 'conectar.php';
	if(isset($_POST['enviar'])){
		$correo = $_POST['correo'];
		$contrasenia = $_POST['contrasenia'];

		$log = mysqli_query($conexion, "SELECT correo, contrasenia FROM `usuarios` WHERE correo='$correo' AND contrasenia='$contrasenia' ");


		if (mysqli_num_rows($log)>0) {
			$row = mysqli_fetch_array($log);
			$_SESSION["correo"] = $row['correo']; 
		  	echo 'Iniciando sesión para '.$_SESSION['correo'].' <p>';
			echo '<script> window.location="verProyectos.php"; </script>';
		}
		else{
			echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
			echo '<script> window.location="index.php"; </script>';
		}
	}
?>	
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			include 'conectar.php';
			if(isset($_POST['enviar'])){
				$correo = $_POST['correo'];
				$contrasenia = $_POST['contrasenia'];
				$log = mysqli_query($conexion, "SELECT correo, contrasenia FROM usuarios WHERE correo='$correo' AND contrasenia='$contrasenia'");
				if (mysqli_num_rows($log)>0) {
					$row = mysqli_fetch_array($log);
					$_SESSION["correo"] = $row['correo']; 
				  	echo 'Iniciando sesión para '.$_SESSION['correo'].' <p>';
					echo '<script> window.location="verProyectos.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="index.php"; </script>';
				}
			}
		?>	
</body>
</html>
>>>>>>> b67a8f8c970304caf810bcb4a58f950abb6aebdb
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
