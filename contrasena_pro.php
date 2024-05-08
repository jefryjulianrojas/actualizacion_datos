<?php
// Initialize the session
session_start();
 
// Verificar si el usuario está autenticado
if (!isset($_SESSION["proveedor_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: loginp.php");
  exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proveedores";

$link = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
 
$nueva_contrasena = $_POST["nueva_contrasena"];
$usuario_id = $_SESSION["proveedor_id"];

$sql = "UPDATE proveedor SET contrasena = '$nueva_contrasena' WHERE id_proveedor = '$usuario_id'";

$resultado=mysqli_query($link, $sql);

if ($resultado === TRUE) {
       echo "<script language='JavaScript'>
            alert('contraseña cambiada con exito');
            location.assign('indexp.php');
             </script>";
} else {
    echo "Error al actualizar la contraseña: " . $link->error;
}

$link->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Actualizacion De Datos De  Proveedores</title>
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
        <li class="nav-item"><a href="indexp.php">Inicio</a></li>
        <li class="nav-item"><a href="logout.php">Cerrar Sesion</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-- Banner Image -->
    <style>
                     .styled {
    font-size: 16px;
  line-height: 1.5; /* Espacio entre líneas 1.5 veces el tamaño de la fuente */
  color: #666; /* Color de texto gris */
  margin-bottom: 20px; /* Margen inferior de 20px */
}
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
        
        .big-button {
  padding: 20px 40px; /* Ajusta el relleno para aumentar o disminuir el tamaño del botón */
  font-size: 18px; /* Tamaño del texto */
  font-weight: bold; /* Negrita */
  border: none; /* Quita el borde */
  border-radius: 10px; /* Bordes redondeados */
  background-color: #4CAF50; /* Color de fondo */
  color: white; /* Color del texto */
  cursor: pointer; /* Cambia el cursor al pasar por encima */
  transition: background-color 0.3s; /* Efecto de transición suave */
}

.big-button:hover {
  background-color: #45a049; /* Cambia el color de fondo al pasar por encima */
    
    
}
        
        .boton {
  

display: inline-block;
  
 
padding: 10px 20px;
  
  
background-color: #007bff; /* Color de fondo del botón */
  


 
color: #fff; /* Color del texto del botón */
  border: 2px solid #007bff; /* Borde del botón */
  

border-radius: 5px; /* Radio de los bordes */
  
 

  
text-decoration: none; /* Eliminar subrayado del enlace */
  
 
font-weight: bold; /* Estilo de texto en negrita */
}
        input[type="password"] {
    width: 35%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }
    </style>
<div class="banner2 text-center" data-scroll-index='0'>
  <div class="banner-overlay">
    <div class="container">
      <h1 class="text-capitalize"> Cambia Tu contraseña Por Razones De Seguridad.</h1>

        
    
        </div>
      
            
        
      
         </div>
  </div>


<!-- End Banner Image --> 

<!-- About -->


<div class="about-us section-padding" data-scroll-index='1'>
  <div class="container">
    <div class="row">
      <div class="col-md-12 section-title text-center">
               <h3>Digita Tu Nueva Contraseña</h3>
           
           
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="nueva_contrasena">Nueva Contraseña:</label>
    <br>
    <input type="password" name="nueva_contrasena" required>

    <br>

    <button type="submit"  class="banner-btn">Cambiar Contraseña</button>
</form>
         
         
  
          
              
        
    
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
