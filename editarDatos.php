<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="cabecerabtnizq.css">
	<link rel="stylesheet" href="estilocabecera.css">
	<link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css" />
      <link rel="stylesheet" href="css/estilomovil.css"/>
</head>
 <body>

	 <header id="cabecera2">
	    <section id="footervp">
  <article>
    
  </article>

  <article>
    <center>
    <figure id="logovp">
        <img src="img/logo.png" alt="">
      </figure>
    </center>
  </article>

  <article>
    <a id="btnvp" href="verDatos.php">Regresar</a> 
    <a id="btnvp" href="logout.php">Cerrar Sesión</a>
  </article>
</section>
	 </header> <br> <br> <br> <br>
	 <section>
	 	<h1 class="titu">ACTUALIZAR</h1>
	 </section>

	<?php 
		include("conectar.php");
		if (isset($_GET['editar'])) 
		{
		$correo=$_GET['correo'];
		}

		$sql = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
		$registro = mysqli_fetch_array($sql)

	?>
	<section id="tablas">
	<center>
		<table>
		<form name="form1" method="GET" action="
			<?php 
			if($_GET['editar']==1)
			{
				echo "editarDatosPers.php";
			} 
				else
			{
				echo "veralumnos.php";
			}   
		?> ">

        <tr>
        	<td> <label id="labelver" for="">Nombre:</label> </td>
        	<td> <input id="inputver" type="text" name="nombre" placeholder="Nombre" value="<?php echo $registro['nombre'];?>"><br><br> </td>
        </tr>

        <tr>
        	<td><label id="labelver" for="">Empresa:</label></td>
        	<td><input id="inputver" type="text" name="nombreempresa" placeholder="Empresa" value="<?php echo $registro['nombreempresa'];?>"><br><br> </td>    
        </tr>

        <tr>
	        <td><label id="labelver" for="">Correo:</label></td>
	        <td><input id="inputver" type="text" name="correo" placeholder="Correo" value="<?php echo $registro['correo'];?>"><br><br></td>        	
        </tr>

        <tr>
        	<td><label id="labelver" for="">Telefono:</label></td>
       		<td><input id="inputver" type="tel" name="telefono" placeholder="Telefono" value="<?php echo $registro['telefono'];?>"><br><br></td>
        </tr>
        
        <tr>
        	<td><label id="labelver" for="">Contraseña:</label></td>
       		<td><input id="inputver" type="password" name="contrasenia" placeholder="Contraseña" value="<?php echo $registro['contrasenia'];?>"><br><br></td>
        </tr>

        <tr>
        	<td><label id="labelver" for="">Confirmar contraseña:</label></td>
       		<td><input id="inputver" type="password" name="rcontrasenia" placeholder="Repita la contraseña" value="<?php echo $registro['rcontrasenia'];?>"><br><br></td>
        </tr>

       <td> </td>
		
		
		</table>

		<input id="bombon2" type="submit" name="actualizar" value="Actualizar"> 
</form>
</center>
</section>
</body>
</html>