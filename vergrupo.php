<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
  <header>
    <div>
      <a class="bombon" href="vergrupowsa.php">Cerrar Sesión</a>
    </div>
  </header>
			

  <center>
  	 <section>
      <h1>Lista de grupos</h1>
    </section>
  </center>

  <?php 

  include ("conectar.php");
  $sql=("SELECT * FROM proyectos");
  $resp=$conexion -> query($sql);

  ?>

<center>
      <table id='tabla' cellspacing='5'>
<tr  align='center'>
      
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