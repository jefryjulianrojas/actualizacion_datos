<?php
// Initialize the session
session_start();
 
// Verificar si el usuario está autenticado
if (!isset($_SESSION["cliente_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: index.php");
  exit();
}
error_reporting(0);

$nombre = $_SESSION["cliente_nombre"];

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Documentos Anexados Por El proveedor</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"/>

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid"> <a class="navbar-brand navbar-logo" href="#"> <img src="images/logo-white.png" alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="indexc.php">Inicio</a></li>
        <li class="nav-item"><a href="logoutc.php">Cerrar Sesion</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-- Banner Image -->
    <style>
    .responsive-text {
        width: 100%; /* Puedes ajustar el valor del ancho según tus necesidades */
  margin: 0 auto; /* Esto centra el párrafo horizontalmente */
  font-size: 22px;
        font-weight: 600;/* Tamaño de fuente base */
}

/* Ajustar estilos para pantallas pequeñas */
@media screen and (max-width: 800px) {
  .responsive-text {
      width: 100%; /* Puedes ajustar el valor del ancho según tus necesidades */
  margin: 0 auto; /* Esto centra el párrafo horizontalmente */
    font-size: 20px;
      font-weight: 600;/* Tamaño de fuente más pequeño para pantallas pequeñas */
  }
}
        .banner3 {
	background:url(responsa.jpg) no-repeat 0% 0% / 100% 100%;
	color:#ffffff;
	text-align: center;
	width: 100%;
}
    </style>
<div class="banner3 text-center" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <h1 class="text-capitalize"> Documentos Anexados Por El Proveedor</h1>
        <br>
        <br>  <div class="text-wrapper">
      <p class="responsive-text">
        </p>
        </div>
      
                 
        
        <br>
         </div>
  </div>
</div>

<!-- End Banner Image --> 

<!-- About -->
    <style>
    .iframe-container {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 100%; /* Proporción 1:1, puedes ajustarla según tus necesidades */
  overflow: hidden;
}

.iframe-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
        
         /* Estilos para la lista de archivos */
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 5px;
        }
        li a {
            text-decoration: none;
            color: Black;
        }
          .oculto {
            margin-left: -9999px;
            position: absolute;
        }
        
        
           input[type="text"],
 {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }

#lista-archivos {
    list-style-type: none; /* Quita los puntos de lista */
    padding: 0; /* Quita el espacio interior */
}

#lista-archivos li {
    margin-bottom: 10px; /* Espacio entre elementos de la lista */
}

#lista-archivos li a {
    text-decoration: none; /* Quita el subrayado del enlace */
    color: #333; /* Color del texto */
    display: block; /* Hace que los enlaces ocupen todo el ancho de la lista */
    padding: 5px; /* Espaciado dentro del enlace */
    border: 1px solid #ccc; /* Borde alrededor del enlace */
    border-radius: 5px; /* Borde redondeado */
    transition: background-color 0.3s; /* Transición suave del color de fondo */
}

#lista-archivos li a:hover {
    background-color: #f0f0f0; /* Cambia el color de fondo al pasar el mouse sobre el enlace */
}

    #input1 {
            padding: 10px; /* Espaciado interno */
            border: 2px solid #ccc; /* Borde */
            border-radius: 5px; /* Bordes redondeados */
            font-size: 16px; /* Tamaño de fuente */
            width: 300px; /* Ancho del input */
            box-sizing: border-box; /* Incluir borde y padding en el ancho total */
            /* Otros estilos según sea necesario */
        }
    
    </style>

<div class="about-us section-padding" data-scroll-index='1'>
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title text-center">
         
       
        <h3>Selecciona El Proveedor</h3>
          <br>
          <?php
         $variable_oculta = "archivos_adjuntos/";
?>

    <form action="" method="post">
         <input type="text" id="input1"name="input1" placeholder="Ingresa un valor">
    <br><br>
    <!-- Segundo input para mostrar el resultado de la concatenación -->
   
        
          </form>
               
   
          
        <form action="" method="post">
        <input type="hidden" id="directorio" name="directorio" placeholder="Resultado de la concatenación" >
        <button type="submit" name="enviar"  class="banner-btn" onclick="concatenar()">Consultar</button>
       </form>
        <br>
        <br>

    <script>
        // Variable para almacenar la primera parte de la concatenación
        var variable = "archivos_adjuntos/";

        // Función para realizar la concatenación y mostrar el resultado
        function concatenar() {
            // Obtener el valor ingresado en el primer input
            var dato = document.getElementById('input1').value;
            
            // Concatenar la variable y el dato ingresado
            var resultado = variable + dato;
            
            // Mostrar el resultado en el segundo input
            document.getElementById('directorio').value = resultado;
        }
    </script>
  
    <!-- Lista de archivos -->
    <ul id="lista-archivos">
        <?php
        // Verifica si se envió una solicitud POST y si se proporcionó una ruta de directorio
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['directorio'])) {
            $directorio = $_POST['directorio'];

            // Escanear el directorio y mostrar los archivos
            if (is_dir($directorio)) {
                $archivos = scandir($directorio);
                foreach ($archivos as $archivo) {
                    if ($archivo != '.' && $archivo != '..') {
                        echo '<li><a href="#" class="archivo" data-url="'.$directorio.'/' . $archivo . '">' . $archivo . '</a></li>';
                    }
                }
            } else {
                echo '<li>No se encontró el directorio</li>';
            }
        }
        ?>
    </ul>

    <!-- Contenedor para la vista previa del PDF -->
    <div id="vista-previa-pdf"></div>
         <br>
         <br>
<a href="carpetas.php"  style="text-decoration: none; color: black; display: flex; justify-content: center; align-items: center;">Regresar</a>
          
          
    <!-- Script para mostrar vista previa de PDF -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var archivosPDF = document.querySelectorAll('.archivo');
            archivosPDF.forEach(function(archivo) {
                archivo.addEventListener('click', function(event) {
                    event.preventDefault();
                    var url = this.getAttribute('data-url');
                    mostrarVistaPreviaPDF(url);
                });
            });

            function mostrarVistaPreviaPDF(url) {
                var visorPDF = document.getElementById('vista-previa-pdf');
                visorPDF.innerHTML = '<embed src="' + url + '" type="application/pdf" width="100%" height="600px" />';
            }
        });
    </script>
        <br>
        <br>
    
    </div>
  </div>
</div>

<!-- End About --> 


<!-- Testimonials -->
<div class="testimonials">
  <div class="testimonials-overlay section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="owl-carousel owl-theme">
            <div class="testimonial-item text-center">
              <div class="icon"> <i class="fas fa-comments"></i> </div>
              <p class="m-auto">Agradecemos su colaboración y dedicación para mantener sus datos actualizados. Si tienen alguna pregunta o necesitan asistencia durante el proceso, no duden en ponerse en contacto con nuestro equipo de soporte, quienes estarán encantados de ayudarles en todo lo que necesiten. Una vez más, ¡bienvenidos a nuestra página de actualización de datos personales! Juntos, avanzamos hacia un futuro más próspero y exitoso. .</p>
              <div class="testimonial-author text-center">
                <h5>Tecnología.</h5>
                <h6>Francisco Rocha</h6>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Testimonials --> 


<!-- End Contact -->
<footer class="footer-copy">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p>2024 &copy; Todos los derechos reservados <a href="https://franciscorocha.com/site/" target="_blank" rel="dofollow">Francisco Rocha</a></p>
      </div>
    </div>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<!-- owl carousel js --> 
<script src="js/owl.carousel.min.js"></script> 
<!-- magnific-popup --> 
<script src="js/jquery.fancybox.min.js"></script> 

<!-- scrollIt js --> 
<script src="js/scrollIt.min.js"></script> 

<!-- isotope.pkgd.min js --> 
<script src="js/isotope.pkgd.min.js"></script> 
<script>
  $(window).on("scroll",function () {

      var bodyScroll = $(window).scrollTop(),
          navbar = $(".navbar");

      if(bodyScroll > 130){

          navbar.addClass("nav-scroll");
          $('.navbar-logo img').attr('src','images/logo-black.png');


      }else{

          navbar.removeClass("nav-scroll");
          $('.navbar-logo img').attr('src','images/logo-white.png');

      }

  });

  $(window).on("load",function (){



var bodyScroll = $(window).scrollTop(),
navbar = $(".navbar");

if(bodyScroll > 130){

navbar.addClass("nav-scroll");
$('.navbar-logo img').attr('src','images/logo-black.png');


}else{

navbar.removeClass("nav-scroll");
$('.navbar-logo img').attr('src','images/logo-white.png');

}

/* smooth scroll
  -------------------------------------------------------*/
  $.scrollIt({

easing: 'swing',      // the easing function for animation
scrollTime: 900,       // how long (in ms) the animation takes
activeClass: 'active', // class given to the active nav element
onPageChange: null,    // function(pageIndex) that is called when page is changed
topOffset: -63
});

/* isotope
-------------------------------------------------------*/
var $gallery = $('.gallery').isotope({});
$('.gallery').isotope({

    // options
    itemSelector: '.item-img',
    transitionDuration: '0.5s',

});


$(".gallery .single-image").fancybox({
  'transitionIn'  : 'elastic',
  'transitionOut' : 'elastic',
  'speedIn'   : 600,
  'speedOut'    : 200,
  'overlayShow' : false
});


/* filter items on button click
-------------------------------------------------------*/
$('.filtering').on( 'click', 'button', function() {

    var filterValue = $(this).attr('data-filter');

    $gallery.isotope({ filter: filterValue });

    });

$('.filtering').on( 'click', 'button', function() {

    $(this).addClass('active').siblings().removeClass('active');

});

})

$(function () {
$( ".cover-bg" ).each(function() {
    var attr = $(this).attr('data-image-src');

    if (typeof attr !== typeof undefined && attr !== false) {
      $(this).css('background-image', 'url('+attr+')');
    }

  });

  /* sections background color from data background
  -------------------------------------------------------*/
  $("[data-background-color]").each(function() {
      $(this).css("background-color", $(this).attr("data-background-color")  );
  });


/* Owl Caroursel testimonial
  -------------------------------------------------------*/
  
  $('.testimonials .owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
    items:1,
    margin:30,
    dots: true,
    nav: false,
    
  });

});

</script>
</body>
</html>
