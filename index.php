<?php
	session_start();
	include 'conectar.php';
	if(isset($_SESSION['correo'])){
	echo '<script> window.location="verProyectos.php"; </script>';
	}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta charset="utf-8">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="css/estilo.css" />
  <link rel="stylesheet" href="css/estilomovil.css"/>

  <link rel="stylesheet" href="css/estilosdos.css" />
  <link rel="stylesheet" href="css/fadeIn.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title> JN.SOLHE </title>
  <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
  <script type="text/javascript" src="jq/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/miscript.js"></script>
  <script type="text/javascript" src="js/fadeIn.js"></script>
</head>

<body>
  <header>
    <nav>
      <ul id="izq">
          <li><a href="#banner" class="letra" id="ini">Inicio</a></li>
          <li><a href="#s" class="letra" id="services">Servicios</a></li>
          <li><a href=".client" class="letra" id="client">Clientes</a></li>
      </ul>

      <img class="logo" src="img/logo.png">

      <ul id="der">
          <li><a like href=".consult" class="letra" id="consult">Consultoria</a></li>
          <li><a href=".project" class="letra" id="project">Proyecto</a></li>
          <li><a href=".contact" class="letra" id="contact">Contacto</a></li>
      </ul>
    </nav>

  </header>

  <div class="contenedor" id="banner">
    <video autoplay="true" preload="auto" loop="loop" muted="muted">
      <source src="video/video1.mp4">
    </video>

    <div class="fondo"></div>
  </div>

  <section id="s" id="tituloservicios" class="fadein servicios">
    <h1 class="titu">SERVICIOS</h1>
    <p id="descripcion">Branding digital es la gestión estratégica y creativa que se hace en los medios digitales para construir la identidad de una marca y hacerla relevante, diferente y sostenible en el tiempo. En JN.Solhe ayudamos a las organizaciones a crear, getionar y posicionar sus marcas en la mente de los consumidores.</p>
  </section>

  <section class="fadein servicios" id="servicios">
    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>Desarrollo de Marca</h2>
      <p>Es un concepto mucho más amplio que “diseñar un logotipo”.</p>
    </article>

    <article class="fadein">
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>Transformación Digital</h2>
      <p>texto</p>
    </article>

    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>Social Media</h2>
      <p>texto</p>
    </article>
  </section>

  <section id="servicios" class="fadein servicios">
    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>Medios</h2>
      <p>texto</p>
    </article>

    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>Consultoría</h2>
      <p>texto</p>
    </article>

    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>Comunicación Interna</h2>
      <p>texto</p>
    </article>
  </section>


  <section id="tituloservicios" class="fadein client">
    <h1 class="titu">CLIENTES</h1>
    <p>texto</p>
  </section>

  <section id="clientes" class="fadein client">
    <article>
      <img src="imagenes/logomedusas.jpg" class="imgcli" alt="">
    </article>
    <article>
      <img src="imagenes/logodreams.jpg" class="imgcli" alt="">
    </article>
    <article>
      <img src="imagenes/logoodels.jpg" class="imgcli" alt="">
    </article>
    <article>
      <img src="imagenes/kintec.jpg" class="imgcli" alt="">
    </article>
    <article>
      <img src="imagenes/logors.jpg" class="imgcli" alt="">
    </article>
    <article>
      <img src="imagenes/logoclinum.jpg" class="imgcli" alt="">
    </article>
  </section>

  <section id="tituloservicios" class="fadein consult">
    <h1 class="titu">CONSULTORIA</h1>
    <p>texto</p>
  </section>

  <section id="consultoria" class="fadein consult">
    <article>
      <h1 class="titu">ortopedia del sureste</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos voluptas quidem illum accusamus quae beatae in. Vel tempore
        laudantium consequatur, maxime quas ipsa voluptas, provident qui dolores libero suscipit quasi!</p>
    </article>

    <article>
      <figure>
        <img src="imagenes/ortopediaproy.jpg" alt="">
      </figure>
    </article>
  </section>

  <section id="tituloservicios" class="fadein project">
    <h1 class="titu">PROYECTOS</h1>
    <p>texto</p>
  </section>

  <section id="proyecto" class="fadein project">
    <article>
      <figure>
        <img src="imagenes/eltrenecitopro.jpg" alt="">
      </figure>
    </article>

    <article>
      <h1 class="titu">El trenecito</h1>
      <p>Logotipo para feria infantil en la Cd del Carmen, Campeche.</p>
    </article>
  </section>

  <section id="proyecto" class="fadein project">
    <article>
      <h1 class="titu">SANTOCIELO</h1>
      <p>Proyecto de Naming e Identidad Corporativa para Empresa yucateca productora de concentrado de Horchata, molida artesanalmente, necesitaba la marca una diferenciación en cuanto a los nombres e imagen de la competencia en Yucatán, el nombre hace alusión a la expresión coloquial de sorpresa o asombro que es usado en todo México, se incluyo una flor que fue extraída de los patrones de ladrillos y lozas de las casonas coloniales de nuestra ciudad, el color bugambilia que representa el rosa mexicano y una tipografía muy contemporánea que refleja actualidad.</p>
    </article>

    <article>
      <figure>
        <img src="imagenes/santocieloproy.jpg" alt="">
      </figure>
    </article>
  </section>

  <section class="fadein contact">
    <section id="tituloservicios">
      <h1 class="titu">CONTACTANOS</h1>
      <p>texto</p>
    </section>

    <div id="contacto">
      
        <form action="">

          <input type="text" placeholder="Nombre *" class="estiloinput">
          <br>
          <br>

          <input type="email" placeholder="Correo *" class="estiloinput">
          <br>
          <br>

          <input type="tel" placeholder="Telefono *" class="estiloinput">
          <br>
          <br>

          <textarea placeholder="Comentario *" class="estiloinput"></textarea>
          <br>
          <br>

          <center>
            <button id="btnenviar">Enviar</button>
          </center>
        </form>
        <br>
        <br>
    </div>
    </section>
  </section>

  <footer>
    <div class="fondo"></div>
    <section id="piedepag">
      <article>
        <h1><i class="fas fa-phone fa-2x"></i> Telefono</h1> <br>
        <p>999999999</p>
      </article>

      <article>
        <h1><i class="fas fa-map-marker fa-2x"></i> Dirección</h1> <br>
        <p>L 87</p>
      </article>

      <article>
        <h1><i class="fas fa-envelope fa-2x"></i> email</h1> <br>
        <p>contacto@gmail.com</p>

        <form method="POST" action="validar.php">
          <input type="text" id="logininpit" placeholder="Correo" name="correo"> <br>
          <input type="password" id="logininpit" placeholder="Contraseña" name="contrasenia"> <br><br>
          <button id="btnenviar" name="enviar" type="submit">Entrar</button> 
        </form>

        <button id="myBtn" class="btnreg">Registrate</button>
      </article>
    </section>



        
        <div id="myModal" class="modal">

          
          <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Registrate</h1>
              <form method="POST" action="insertaru.php">
                <input type="text" id="logr" placeholder="Nombre" name="nombre"> <br><br>
                <input type="text" id="logr" placeholder="Correo" name="correo"> <br><br>
                <input type="text" id="logr" placeholder="Nombre de la empresa" name="nombreempresa"> <br><br>
                <input type="text" id="logr" placeholder="Telefono" name="telefono"> <br><br>
                <input type="password" id="logr" placeholder="Contraseña" name="contrasenia"> <br><br>
                <input type="password" id="logr" placeholder="Confirma contraseña" name="rcontrasenia"> <br><br> <br>
                <button id="btnenviar" name="" type="submit">Registrate</button> 
              </form>
          </div>

        </div>


    <section id="final">
      <a href="" id="hrefred"><i class="fab fa-behance-square fa-3x redess"></i></a>
      <a href="" id="hrefred"><i class="fab fa-facebook-square fa-3x redess"></i></a>
      <a href="" id="hrefred"><i class="fab fa-pinterest fa-3x redess"></i></a>
      <a href="" id="hrefred"><i class="fab fa-instagram fa-3x redess"></i></a>
    </section>

    <section id="derechos">
      <p>© JN SOLHE | All right reserved</p>
    </section>
  </footer>

 <!-- <script>
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll > "0") {
        $(".logo").addClass("estilo");
        $("header").css({ "background-color": "#141414" });
      } else {
        $(".logo").removeClass("estilo");
        $("header").css({ "background-color": "transparent" });
      }
    });
  </script>-->

  <script>  
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
  </script>

</body>

</html>