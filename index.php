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
  <link rel="stylesheet" href="css/estilomovil.css" />

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
          <li><a href="#" id="ini">Inicio</a></li>
          <li><a href="#" id="services">servicios</a></li>
          <li><a href="#" id="client">clientes</a></li>
      </ul>

      <img class="logo" src="img/logo.png">

      <ul id="der">
          <li><a href="#" id="consult">consultoria</a></li>
          <li><a href="#" id="project">proyecto</a></li>
          <li><a href="#" id="contact">contacto</a></li>
      </ul>
    </nav>

  </header>

  <div class="contenedor" id="banner">
    <video autoplay="true" preload="auto" loop="loop" muted="muted">
      <source src="video/video1.mp4">
    </video>

    <div class="fondo"></div>
  </div>

  <section id="tituloservicios" class="fadein servicios">
    <h1>SERIVICIOS</h1>
    <p>texto</p>
  </section>

  <section class="fadein servicios" id="servicios">
    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>branding</h2>
      <p>texto</p>
    </article>

    <article class="fadein">
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>branding</h2>
      <p>texto</p>
    </article>

    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>branding</h2>
      <p>texto</p>
    </article>
  </section>

  <section id="servicios" class="fadein servicios">
    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>branding</h2>
      <p>texto</p>
    </article>

    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>branding</h2>
      <p>texto</p>
    </article>

    <article>
      <i class="fas fa-laptop fa-9x iconoservicio"></i>
      <h2>branding</h2>
      <p>texto</p>
    </article>
  </section>

  <section id="tituloservicios" class="fadein client">
    <h1>CLIENTES</h1>
    <p>texto</p>
  </section>

  <section id="clientes" class="fadein client">
    <article>
      <img src="imagenes/1.png" alt="">
    </article>
    <article>
      <img src="imagenes/2.png" alt="">
    </article>
    <article>
      <img src="imagenes/3.png" alt="">
    </article>
    <article>
      <img src="imagenes/4.jpg" alt="">
    </article>
    <article>
      <img src="imagenes/1.png" alt="">
    </article>
    <article>
      <img src="imagenes/1.png" alt="">
    </article>
  </section>

  <section id="clientes" class="fadein client">
    <article>
      <img src="imagenes/1.jpg" alt="">
    </article>
    <article>
      <img src="imagenes/1.jpg" alt="">
    </article>
    <article>
      <img src="imagenes/1.jpg" alt="">
    </article>
    <article>
      <img src="imagenes/1.jpg" alt="">
    </article>
    <article>
      <img src="imagenes/1.jpg" alt="">
    </article>
    <article>
      <img src="imagenes/1.jpg" alt="">
    </article>
  </section>

  <section id="tituloservicios" class="fadein consult">
    <h1>CONSULTORIA</h1>
    <p>texto</p>
  </section>

  <section id="consultoria" class="fadein consult">
    <article>
      <h1 class="titu">Titulo</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos voluptas quidem illum accusamus quae beatae in. Vel tempore
        laudantium consequatur, maxime quas ipsa voluptas, provident qui dolores libero suscipit quasi!</p>
    </article>

    <article>
      <img src="imagenes/1.png" alt="">
    </article>
  </section>

  <section id="tituloservicios" class="fadein project">
    <h1 class="titu">PROYECTO</h1>
    <p>texto</p>
  </section>

  <section id="proyecto" class="fadein project">
    <article>
      <img src="imagenes/2.png" alt="">
    </article>

    <article>
      <h1 class="titu">Titulo</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos voluptas quidem illum accusamus quae beatae in. Vel tempore
        laudantium consequatur, maxime quas ipsa voluptas, provident qui dolores libero suscipit quasi!</p>
    </article>
  </section>

  <section id="tituloservicios" class="fadein contact">
    <h1>CONTACTANOS</h1>
    <p>texto</p>
  </section>

  <div id="googlemaps" class="fadein contact"></div>
  <div id="fondos" class="fadein contact"></div>
  <div id="contacto" class="fadein contact">
    <article>
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
    </article>
  </div>


  <footer class="">
    <section id="ultima">
      <article id="infofooter">
        <p>
          <i class="fas fa-home"></i> Calle X por Y y Z</p>
        <p>
          <i class="far fa-clock"></i> L - V 7:00 AM 11:00 PM</p>
      </article>

      <article>

      </article>

      <article>
        <i class="fab fa-facebook-f icono"></i>
        <i class="fab fa-linkedin-in icono"></i>
        <i class="fab fa-twitter icono"></i>

        <form method="POST" action="validar.php">
          <input type="text" name="correo" id="logininpit" placeholder="Usuario"> <br> <br>
          <input type="password" name="contrasenia" id="logininpit" placeholder="Correo"> <br> <br>
          <input id="btnloguin" type="submit" name="enviar" value="Entrar" size="0">
        </form>
        <br>
      </article>
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




  <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

  <script type="text/javascript">

    // The latitude and longitude of your business / place
    var position = [27.1959739, 78.02423269999997];

    function showGoogleMaps() {

      var latLng = new google.maps.LatLng(position[0], position[1]);



      var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        scaleControl: false, // allow users to zoom the Google Map

        styles: [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#212121"
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#212121"
              }
            ]
          },
          {
            "featureType": "administrative",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "administrative.country",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "administrative.locality",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#bdbdbd"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#181818"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#1b1b1b"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#2c2c2c"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#8a8a8a"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#373737"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#3c3c3c"
              }
            ]
          },
          {
            "featureType": "road.highway.controlled_access",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#4e4e4e"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "transit",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#000000"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#3d3d3d"
              }
            ]
          }
        ],

        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
      };

      map = new google.maps.Map(document.getElementById('googlemaps'),
        mapOptions);

      // Show the default red marker at the location
      marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
      });
    }

    google.maps.event.addDomListener(window, 'load', showGoogleMaps);

  </script>

</body>

</html>