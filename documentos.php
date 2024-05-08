<?php

// Initialize the session
session_start();
 

// Verificar si el usuario está autenticado
if (!isset($_SESSION["proveedor_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: inicio.php");
  exit();

}

error_reporting(0);
 $numero_identificacion=$_SESSION["proveedor_numero"];
 $id=$_SESSION["proveedor_id"];
// Conexión a la base de datos
$conn = new mysqli("localhost", "root","", "proveedores");



date_default_timezone_set('America/Bogota');




        $directorio =  'archivos_adjuntos/'.$numero_identificacion.'/';





foreach ($_FILES['archivo']['tmp_name'] as $key => $tmp_name) {

    if ($_FILES['archivo']['name'][$key]) {
        
        $filename = $_FILES['archivo']['name'][$key];
        $temporal = $_FILES['archivo']['tmp_name'][$key];

        

      

            
        
        if (!file_exists($directorio)) {
            mkdir($directorio, 0777);
        }

        $dir = opendir($directorio);
        $ruta = $directorio.$filename;

        move_uploaded_file($temporal, $ruta); 
        
        
         $sql5 = "UPDATE archivo SET   nombre_archivo='$filename', ruta_archivo='$ruta' WHERE id_proveedor='$id' ";
        
        if ($conn->query($sql5) === TRUE) {
            echo "<script language='JavaScript'>
                alert(' Los Archivos Se Cargaron Exitosamente. ');
                location.assign('documentos.php');
                </script>";
                    
        }else{
            echo "Los archivos NO fueron almacendos correctamente";
        }
        
        

    }
}
$conn->close();
?>





<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Actualizacion De Datos De  Proveedores</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    
    <style>
        
           * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    text-decoration: none !important;
    list-style: none !important;
    outline: none !important;
    margin: 0;
    padding: 0;
}
    @media (min-width: 992px)
.navbar-expand-lg {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
}
    .navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem;
}
    
    .navbar {
	position: fixed;
	right: 0;
	left: 0;
	width: 100%;
	padding-left: 0;
	padding-right: 0;
	min-height: 50px;
	line-height: 50px;
	background: transparent;
	z-index: 1030;
}
.navbar .active {
	color: #ffaf53 !important;
}
.navbar .navbar-brand {
}
.navbar .nav-item {
	margin: 0 60px;
	padding: 0;
}
.navbar .nav-item a {
	color: #ffffff;
	font-weight: 300;
}
.navbar .nav-link {
	position: relative;
	padding: 0;
}
.navbar .navbar-toggler {
	cursor: pointer;
}
.navbar .navbar-toggler span {
	color: #fff;
}
.navbar-style2 .active:after, .navbar-style2 .nav-link:after {
	display: none;
}
.nav-scroll {
	background: #fff;
	-webkit-box-shadow: 0 1px 8px 3px rgba(0, 0, 0, 0.0509803922);
	box-shadow: 0 1px 8px 3px rgba(0, 0, 0, 0.0509803922);
	-webkit-transition: all .4s ease;
	transition: all .4s ease;
}
.nav-scroll .navbar-nav > li > a {
	color: #333;
}
.nav-scroll .navbar-brand img {
	-webkit-transform: scale(1.03) !important;
	transform: scale(1.03) !important;
}
.nav-scroll .navbar-toggler {
	cursor: pointer;
}
.nav-scroll .navbar-toggler span {
	color: #333;
}
.nav-scroll .nav-link:hover:after {
	background-color: #2388ed;
}
.nav-scroll .active {
	position: relative;
}
  body {
    font-family: Arial, sans-serif;
    background-color: #ffffff;
    margin: 0;
    padding: 20px;
  }

  .form-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .left-section {
    flex-basis: calc(100% - 10px);
    margin-right: 20px;
  }

  .right-section {
    flex-basis: calc(100% - 10px);
    margin-right: 20px;
  }

  .form-section {
    background-color: #fff;
    padding: 0px;
    margin-bottom: 20px;
    border-radius: 5px;
  }

  .form-section label {
    display: block;
    margin-bottom: 5px;
  }

  .form-section input[type="text"],
  .form-section input[type="email"],
  .form-section input[type="date"],
  .form-section input[type="tel"],
  .form-section select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }

    
.form-section1 input[type="text"],
  .form-section1 input[type="email"],
  .form-section1 input[type="date"],
  .form-section1 input[type="tel"],
  .form-section1 select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }
    .form-section textarea{
    width: 100%;
    height: 30%;
    padding: 16px;
    margin-bottom: 20px;
    box-sizing: border-box;
  }
    
    
     .form-section1 textarea {
   width: 100%;
    height: 30%;
    padding: 16px;
    margin-bottom: 20px;
    box-sizing: border-box;
  }
    
  @media (max-width: 768px) {
    .left-section,
    .right-section {
      flex-basis: 100%;
      margin-right: 0;
    }
  }
    
     .input-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
  }

  .responsive-input {
    width: 100%; /* El input ocupará todo el ancho del contenedor */
    padding: 10px; /* Espacio interior */
    margin-bottom: 10px; /* Espacio inferior */
    box-sizing: border-box; /* Incluir el padding y border en el ancho total */
  }
    
     .input-container {
    max-width: 200px;
    margin: 0 auto;
    padding: 20px;
  }

  .responsive-input {
    width: 20%; /* El input ocupará todo el ancho del contenedor */
    padding: 10px; /* Espacio interior */
    margin-bottom: 10px; /* Espacio inferior */
    box-sizing: border-box; /* Incluir el padding y border en el ancho total */
       float: center;
  }
    
     .div-centrado {
  width: 88%; /* Puedes ajustar el ancho según necesites */
  margin: 0 auto;
}
      
      .radio-label {
  position: relative;
  padding-left: 1px;
  margin-right: 2px;
  cursor: pointer;
}

.radio-label input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}

.radio-label:hover input ~ .checkmark {
  background-color: #ccc;
}

.radio-label input:checked ~ .checkmark {
  background-color: #2196F3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.radio-label input:checked ~ .checkmark:after {
  display: block;
}

.radio-label .checkmark:after {
  top: 6px;
  left: 6px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}
    
       table {
      border-collapse: collapse;
      width: 75%;
            margin: 0 auto;
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 4px;
    }

    th {
      background-color: #f2f2f2;
    }
         th:nth-child(2),
        td:nth-child(2) {
            width: 200px; /* Cambia este valor según sea necesario */
        }
        
         th:nth-child(3),
        td:nth-child(3) {
            width: 300px; /* Cambia este valor según sea necesario */
        }
        
        
 .radio-label {
      font-size: 16px; /* Modificar el tamaño de la letra */
    }

     .btn {
    
    padding: 10px 20px;
    background-color: #BDBDBD; /* Color de fondo */
    color: Black; /* Color del texto */
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    border: none;
    border-radius: 5px; /* Borde redondeado */
    cursor: pointer;
         display: block;
    margin: 0 auto; /* Centrar horizontalmente */
  }

  /* Estilos cuando se pasa el cursor sobre el botón */
  .btn:hover {
    background-color: #A3A3A3; /* Cambio de color al pasar el cursor */
  }
    
    .banner {
	background:url(imagen_proveedor.jpg) no-repeat 0% 0% / 100% 100%;
	color:#ffffff;
	text-align: center;
	width: 100%;
}
    
.banner-overlay {
    background: linear-gradient(to bottom, rgb(57 57 57 / 80%) 104%, #e5dfd8 14%);
    padding: 180px 0px 180px;
}
    @media (max-width: 768px)
.banner-overlay {
    padding: 150px 0px 100px;
}

 .footer-copy {
	background: #242424;
	color: #ffffff;
	font-size: 13px;
	text-align: center;
	padding:7px 0px;
}
    p {
	line-height: 1.6;
	font-weight: 400;
	margin: 0;
}
        
         .container01 {
            text-align: ñeft; /* Alineación del texto a la derecha */
            margin-right: 20px; /* Margen derecho para ajustar la posición */
        }

        /* Estilo para el botón */
        .btn01 {
            background-color: #BDBDBD;
            color: black;
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .btn1 {
    
    padding: 10px 20px;
    background-color: #fff; /* Color de fondo */
    color: Black; /* Color del texto */
    text-align: right;
    text-decoration: none;
    font-size: 16px;
    border: none;
   
    cursor: pointer;
         display: block;
    margin: 0 auto; /* Centrar horizontalmente */
  }
        
 
</style>
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid"> <a class="navbar-brand navbar-logo" href="#"> <img src="images/logo-white.png" alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="indexp.php">Inicio</a></li>
        <li class="nav-item"><a href="logoutp.php">Cerrar Sesion</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-- Banner Image -->

<div class="banner text-center" data-scroll-index='0'>
  <div class="banner-overlay">
      
    <div class="container">
        <h2>Documentacion de Proveedores</h2>
         </div>
  </div>
</div>
    <div class="div-centrado">
   

           <style>
      ul {
    list-style-type: square; /* Cambiar el tipo de viñeta */
}
               
                li {
            font-size: 14px; /* Tamaño de fuente deseado */
        }
    </style>
           
   <h1 style="color: black;">5. DOCUMENTACION</h1><br>
       <hr>
         
          <br>
        
       <form action="documentos.php" method="post" enctype="multipart/form-data">
           
  
                
 <div class="div-centrado">
               
           
                <input type="file" name="archivo[]" id="archivo[]"  multiple accept=".pdf" >
           <div id="nombre-archivo">
               <script>
document.getElementById('archivo[]').addEventListener('change', function(e) {
    var input = e.target;
    var nombre = '';
    for (var i = 0; i < input.files.length; i++) {
        nombre += input.files[i].name + '<br>';
    }
    document.getElementById('nombre-archivo').innerHTML = '<h2>Nombres de Archivos:</h2>' + nombre;
});
</script>
           </div>
           <br>
           <br>
        
           
           <h2 style="color:black">Archivos subidos:</h2>
     <br>
  
<?php           // Ruta de la carpeta que deseas ver


// Escanear la carpeta
$contenido = scandir($directorio);

// Mostrar el contenido

echo "<ul>";
foreach ($contenido as $item) {
    if ($item != "." && $item != "..") {
        echo "<li>$item</li>";
    }
}
echo "</ul>";
?>

          

     


 
     
   
           <br>
           <br>
           
           <div class="container01">
                <button  type="submit" class="btn01">Cargar</button>
           </div>
     
     <br>
      <a href="guardar_datos_ex.php"class="btn1"><img src="sigui.png" title="siguiente" alt="siguiente" /></a>
           </div>
            </form>
       
      
 <div class="container01">
     <br>
     <br>
               
           </div>
      
      
         <br>
         <br>
      
       
    
    </div>
        
    



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
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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


