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
  <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
=======
<<<<<<< HEAD
  <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
=======
<<<<<<< HEAD
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
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
<<<<<<< HEAD
    <a id="btnvp" href="verDatos.php">Ver datos</a> 
    <a id="btnvp" href="logout.php">Cerrar Sesión</a>
  </article>
</section>
			
<center>
	 <section>
    <h1 class="titu">BIENVENIDOS</h1>
=======
    <a id="btnvp" href="veralumnos.php">Ver datos</a> 
    <a id="btnvp" href="logout.php">Cerrar Sesión</a>
  </article>
</section>
<<<<<<< HEAD
=======
=======
</head>
<body>
<header>
  <div>
    <a href="logout.php">Cerrar Sesión</a>
  </div>
</header>
>>>>>>> b67a8f8c970304caf810bcb4a58f950abb6aebdb
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
			
<center>
	 <section>
    <h1>BIENVENIDO</h1>
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
  </section>
</center>

<?php 
  include ("conectar.php");
  $sql=("SELECT * FROM proyectos");
  $resp=$conexion -> query($sql);
?>

<center>
<<<<<<< HEAD
  <table border="1">
=======
<<<<<<< HEAD
  <table border="1">
=======
  <table>
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
    <tr>   
      <th>PROYECTO</th>
      <th>DOCUMENTACION</th>
    </tr>

      <?php 
        while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
        {
      ?>

    <tr>
<<<<<<< HEAD
      <td><?php echo $registro['nombrePro'] ?></td>
=======
      <td><?php echo $registro['proyecto'] ?></td>
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
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