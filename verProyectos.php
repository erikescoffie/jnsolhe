<?php
session_start();
include 'conectar.php';

if(isset($_SESSION['correo'])) {?>

<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<header>
  <div>
    <a href="logout.php">Cerrar Sesión</a>
  </div>
</header>
			
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