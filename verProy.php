<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
  	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  	<link rel="stylesheet" href="css/estilo.css" />
 	<link rel="stylesheet" href="css/estilomovil.css"/>
</head>
<body>
	 <?php 

  include ("conectar.php");
  $sql=("SELECT * FROM usuarios");
  $resp=$conexion -> query($sql);

  ?>


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
    <a id="btnvp" href="panelAdmi.php">Regresar</a> 
    <a id="btnvp" href="logout.php">Cerrar Sesión</a>
  </article>
</section>
			
<center>
	 <section>
    <h1>BIENVENIDO</h1>
  </section>
</center>

<?php 
  include ("conectar.php");
  $sql=("SELECT * FROM proyectos");
  $resp=$conexion -> query($sql);
?>

<center>
  <table border="1">
    <tr>   
<<<<<<< HEAD
      <th>CORREO</th>
      <th>PROYECTO</th>
      <th>DOCUMENTACION</th>
      <th>EDITAR</th>
=======
      <th>PROYECTO</th>
      <th>DOCUMENTACION</th>
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
    </tr>

      <?php 
        while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
        {
      ?>

    <tr>
<<<<<<< HEAD
      <td><?php echo $registro['correo'] ?></td>
      <td><?php echo $registro['nombrePro'] ?></td>
      <td><?php echo $registro['archivos'] ?></td>
      <td><a href="editarProy.php?editar=1&correo=<?php echo $registro['correo']; ?>"> <i class="fas fa-edit"></i></a></td> 
=======
      	<td><?php echo $registro['nombrePro'] ?></td>
      	<td><?php echo $registro['archivos'] ?></td>
   		<td><a href="editarProy.php?editar=1&correo=<?php echo $registro['correo']; ?>"> <i class="fas fa-edit"></i></a></td> 
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
  </tr>
    </tr>

      <?php 
        }
      ?>
  </table>
</center>
	
</body>
</html>