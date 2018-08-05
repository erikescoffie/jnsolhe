<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
  	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  	<link rel="stylesheet" href="css/estilo.css" />
 	<link rel="stylesheet" href="css/estilomovil.css"/>
</head>
<body>

<<<<<<< HEAD
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
      <div>      
        <form method="POST" action="insertarProy.php" ><br><br>

           
           <input id="inputAdmi" type="text" name="archivos" placeholder="Archivos"><br><br><br>

          <?php 
=======

      <div id="caja">      
        <form method="POST" action="insertarProy.php" ><br><br>

           <label>archivos:</label>
           <input id="tamañotxt" type="text" name="archivos" placeholder="Ingresa Nombre"><br><br><br>


           <?php 
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
                include ("conectar.php");
                $sql2=("SELECT correo FROM usuarios");
                $resp2=$conexion -> query($sql2);
              ?>

<<<<<<< HEAD
           
            <select id="" name='correo'> 
=======
           <label>Correo:</label>
            <select id="tamañotxt" name='correo'> 
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
              <?php 
                while ($registro2 = $resp2 -> fetch_array(MYSQLI_BOTH))
                  {
              ?>

              <option value='<?php echo $registro2['correo'] ?>' selected><?php echo $registro2['correo'] ?></option> 

              <?php 
                  }
              ?> 

            </select><br><br><br>

<<<<<<< HEAD
           
           <input id="inputAdmi" type="text" name="nombrePro" placeholder="Nombre del proyecto"><br><br><br>
=======
           <label>nombrePro:</label>
           <input id="tamañotxt" type="text" name="nombrePro" placeholder="Ingresa Nombre"><br><br><br>
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
           
           
          
           
          <input id="bombon2" type="submit" name="" value="Registrar" size="0"> 
        </form>
<<<<<<< HEAD
        </center>
=======
>>>>>>> 6f4a49fe3e718aa8dc6a30d19aa7baeaf32b6667
	
</body>
</html>