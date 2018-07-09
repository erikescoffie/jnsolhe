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
    <a id="btnvp" href="verProy.php">Regresar</a> 
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

		$sql = mysqli_query($conexion, "SELECT * FROM proyectos WHERE correo='$correo'");
		$registro = mysqli_fetch_array($sql)

	?>
	<section id="tablas">
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
        	
        	<td> <label id="labelver" for="">Nombre proyecto:</label> </td>
        	<td> <input id="inputver" type="text" name="nombrePro" placeholder="Nombre" value="<?php echo $registro['nombrePro'];?>"><br><br> </td>
        </tr>

        <tr>
        	<td><label id="labelver" for="">Archivos:</label></td>
        	<td><input id="inputver" type="text" name="archivos" placeholder="Empresa" value="<?php echo $registro['archivos'];?>"><br><br> </td>    
        </tr>

        
		
		
		</table>

		<input id="bombon2" type="submit" name="actualizar" value="Actualizar"> 
</form>
</center>
</section>
</body>
</html>