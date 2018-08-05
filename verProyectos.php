<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
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
    <a id="btnvp" href="verDatos.php">Ver datos</a> 
    <a id="btnvp" href="logout.php">Cerrar Sesión</a>
  </article>
</section>
			
<center>
	 <section>
    <h1 class="titu">BIENVENIDOS</h1>
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
      <th>PROYECTO</th>
      <th>DOCUMENTACION</th>
    </tr>

      <?php 
        while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
        {
      ?>

    <tr>
      <td><?php echo $registro['nombrePro'] ?></td>
      <td><?php echo $registro['archivos'] ?></td>
    </tr>

      <?php 
        }
      ?>
  </table>
</center>
</body>
</html>

<?php
}else{
  echo '<script> window.location="index.php"; </script>';
}
?>