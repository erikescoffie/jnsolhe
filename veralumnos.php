<?php
session_start();
include 'conectar.php';


if(isset($_SESSION['correo'])) {?>

  <!DOCTYPE html>
<html>
      <head>
      <title></title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="consulta.css">
      <link rel="stylesheet" href="estilocabecera.css">
      <link rel="stylesheet" href="cabecerabtnizq.css">
      <link href="https://fonts.googleapis.com/css?family=Abel|Oswald" rel="stylesheet">
</head>
<body>
  
  <?php 

  include ("conectar.php");
  $correo=$_SESSION['correo'];

  $sql=("SELECT nombre, nombreempresa, telefono, correo FROM usuarios WHERE correo='$correo'");
  $resp=$conexion -> query($sql);

  ?>

<center>
      <table id='tabla' cellspacing='5'>
<tr  align='center'>
      
  <th>Nombre</th>
  <th>Empresa</th>
  <th>Telefono</th>
  <th>Correo</th>
  <th colspan='2'>MOVIMIENTOS</th>
</tr>

  <?php 
    while ($registro = $resp -> fetch_array(MYSQLI_BOTH))
      {
  ?>

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
</body>
</html>

<?php
}else{
  echo '<script> window.location="inicioadministrador.php"; </script>';
}
?>