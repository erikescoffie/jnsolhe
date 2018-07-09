<?php
session_start();
include 'conectar.php';


if(isset($_SESSION['correo'])) {?>

<<<<<<< HEAD


<!DOCTYPE html>
=======
  <!DOCTYPE html>
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
<html>
      <head>
      <title></title>
      <meta charset="utf-8">
<<<<<<< HEAD
      <title></title>
      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
      <link rel="stylesheet" href="css/estilo.css" />
      <link rel="stylesheet" href="css/estilomovil.css"/>
</head>
<body>

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
    <a id="btnvp" href="verProyectos.php">Regresar</a> 
    <a id="btnvp" href="logout.php">Cerrar Sesión</a>
  </article>
</section>

<h1 class="titu">TUS DATOS</h1>
=======
      <link rel="stylesheet" href="consulta.css">
      <link rel="stylesheet" href="estilocabecera.css">
      <link rel="stylesheet" href="cabecerabtnizq.css">
      <link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
<body>
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
  
  <?php 

  include ("conectar.php");
  $correo=$_SESSION['correo'];

  $sql=("SELECT nombre, nombreempresa, telefono, correo FROM usuarios WHERE correo='$correo'");
  $resp=$conexion -> query($sql);

  ?>

<<<<<<< HEAD
=======
<center>
      <table id='tabla' cellspacing='5'>
<tr  align='center'>
      
  <th>Nombre</th>
  <th>Empresa</th>
  <th>Telefono</th>
  <th>Correo</th>
  <th colspan='2'>MOVIMIENTOS</th>
</tr>

>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
  <?php 
    while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
      {
  ?>

<<<<<<< HEAD
</table>
<center>
<table>
  <tr>
    <th>Nombre</th>
    <td><?php echo $registro['nombre'] ?></td>
  </tr>

  <tr>
    <th>Nombre de la empresa</th>
    <td><?php echo $registro['nombreempresa'] ?></td>
  </tr>

  <tr>
    <th>Telefono</th>
    <td><?php echo $registro['telefono'] ?></td>
  </tr>

  <tr>
    <th>Correo</th>
    <td><?php echo $registro['correo'] ?></td>
  </tr>

  <tr>
    <th>Editar</th>
    <td><a href="editaralumno.php?editar=1&correo=<?php echo $registro['correo']; ?>"> <i class="fas fa-edit"></i></a></td> 
  </tr>

  <tr>
    <td></td>
  </tr>
</table>
</center>

<?php 
    }
  ?>
=======
  <tr>
    <td><?php echo $registro['nombre'] ?></td>
      <td><?php echo $registro['nombreempresa'] ?></td>
      <td><?php echo $registro['telefono'] ?></td>
      <td><?php echo $registro['correo'] ?></td>
    
    <td><a href="editaralumno.php?editar=1&correo=<?php echo $registro['correo']; ?>">Editar</a></td> 
  </tr>

    <?php 
      }
   ?>

</table>
</center>
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
</body>
</html>

<?php
}else{
<<<<<<< HEAD
  echo '<script> window.location="index.php"; </script>';
=======
  echo '<script> window.location="inicioadministrador.php"; </script>';
>>>>>>> 44ccdcb7691a27fb82c50a669cde286882fdb9ba
}
?>