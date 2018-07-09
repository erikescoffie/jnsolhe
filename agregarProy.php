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


      <div id="caja">      
        <form method="POST" action="insertarProy.php" ><br><br>

           <label>archivos:</label>
           <input id="tamañotxt" type="text" name="archivos" placeholder="Ingresa Nombre"><br><br><br>


           <?php 
                include ("conectar.php");
                $sql2=("SELECT correo FROM usuarios");
                $resp2=$conexion -> query($sql2);
              ?>

           <label>Correo:</label>
            <select id="tamañotxt" name='correo'> 
              <?php 
                while ($registro2 = $resp2 -> fetch_array(MYSQLI_BOTH))
                  {
              ?>

              <option value='<?php echo $registro2['correo'] ?>' selected><?php echo $registro2['correo'] ?></option> 

              <?php 
                  }
              ?> 

            </select><br><br><br>

           <label>nombrePro:</label>
           <input id="tamañotxt" type="text" name="nombrePro" placeholder="Ingresa Nombre"><br><br><br>
           
           
          
           
          <input id="bombon2" type="submit" name="" value="Registrar" size="0"> 
        </form>
	
</body>
</html>