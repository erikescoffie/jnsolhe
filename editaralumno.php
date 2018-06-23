<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" href="estilocabecera.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
 <body>

	 <header id="cabecera2">
	    <div id="cabeza2">
	      <a class="bombon" href="veralumnos.php">Regresar</a>
	      <a class="bombon" href="inicio.php">Cerrar Sesión</a>
	    </div>
	 </header>

	<div>
		<h1>Actualizar datos de alumno</h1>
	</div>

	<?php 
		include("conectar.php");
		if (isset($_GET['editar'])) 
		{
		$correo=$_GET['correo'];
		}

		$sql = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
		$registro = mysqli_fetch_array($sql)

	?>
	<center>
		<table>
		<form name="form1" method="GET" action="
			<?php 
			if($_GET['editar']==1)
			{
				echo "actualizar.php";
			} 
				else
			{
				echo "verProyectos.php";
			}   
		?> ">

        <tr>
	        <label for="">Nombre:</label>
	        <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $registro['nombre'];?>"><br><br>
        </tr>

        <tr>
	        <label for="">Empresa:</label>
	        <input type="text" name="nombreempresa" placeholder="Empresa" value="<?php echo $registro['nombreempresa'];?>"><br><br>        	
        </tr>

        <tr>
	        <label for="">Correo:</label>
	        <input type="text" name="correo" placeholder="Correo" value="<?php echo $registro['correo'];?>"><br><br>        	
        </tr>

        <tr>
        	<label for="">Telefono:</label>
       		<input type="tel" name="telefono" placeholder="Telefono" value="<?php echo $registro['telefono'];?>"><br><br>
        </tr>
        
        <tr>
        	<label for="">Contraseña:</label>
       		<input type="password" name="contrasenia" placeholder="Contraseña" value="<?php echo $registro['contrasenia'];?>"><br><br>
        </tr>

        <tr>
        	<label for="">Confirmar contraseña:</label>
       		<input type="password" name="rcontrasenia" placeholder="Repita la contraseña" value="<?php echo $registro['rcontrasenia'];?>"><br><br>
        </tr>

        <input id="bombon2" type="submit" name="actualizar" value="Actualizar"> 
		
		</form>
		</table>

</center>
</body>
</html>