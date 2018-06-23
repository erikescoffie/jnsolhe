<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
<<<<<<< HEAD
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
    <a id="btnvp" href="veralumnos.php">Ver datos</a> 
    <a id="btnvp" href="logout.php">Cerrar Sesión</a>
  </article>
</section>
=======
</head>
<body>
<header>
  <div>
    <a href="logout.php">Cerrar Sesión</a>
  </div>
</header>
>>>>>>> b67a8f8c970304caf810bcb4a58f950abb6aebdb
			
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
  <table>
    <tr>   
      <th>PROYECTO</th>
      <th>DOCUMENTACION</th>
    </tr>

      <?php 
        while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
        {
      ?>

    <tr>
      <td><?php echo $registro['proyecto'] ?></td>
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