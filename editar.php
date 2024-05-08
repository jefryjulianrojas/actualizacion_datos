<?php
// Initialize the session
session_start();
 
// Verificar si el usuario está autenticado
if (!isset($_SESSION["usuario_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: login.php");
  exit();
    
    include ("config.php");
$idu= $_SESSION["usuario_id"];
}?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Actualizacion De Datos Personales</title>
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid"> <a href="index1.php" class="navbar-brand navbar-logo" href="#"> <img src="images/logo-white.png" alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="datos.php">Inicio</a></li>
        <li class="nav-item"><a href="logout.php">Cerrar Sesion</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-- Banner Image -->


<div class="banner text-center" data-scroll-index='0'>
  <div class="banner-overlay">
      
    <div class="container">
        <h2>Actualizacion De Datos Personales</h2>
         </div>
  </div>
</div>
    
    

      <div class="col-md-12 section-title text-center">
         
       
         


<!-- End Banner Image --> 

<!-- About -->
    <style>
   .form {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 50%; /* Espacio entre las columnas */
  }

  .form label {
    display: block; /* Mostrar las etiquetas en una nueva línea */
    margin-bottom: 5px;
  }

  .form input[type="text"],
  .form input[type="date"], 
  .form input[type="email"], 
  .form select {
    width: 35%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }
    .tabs {
        display: flex;
        flex-wrap: wrap;
    }
    .tab {
        flex: 1;
        padding: 10px;
        background-color: #f0f0f0;
        cursor: pointer;
        border: 1px solid #ccc;
        border-bottom: none;
        text-align: left;
    }
    .tab.active {
        background-color: #fff;
        border-bottom: 1px solid #fff;
    }
    .form {
        display: none;
        padding: 100px;
        border: 1px solid #ccc;
        background-color: #fff;
    }
    .form.active {
        display: block;
        }
         
  
    
    </style>



      <div class="col-md-12 section-title text-center">
          <br>
        
          <br>
          <br>
       <h2> EDITAR </h2>
        
        <?php
          
           include ("config.php");
$idu= $_SESSION["usuario_id"];
    
            if (isset($_POST['enviar'])) {
               
                $id =$_POST['id_programa'];
                $nivel =$_POST['nivel_educativo'];
                $programa=$_POST['nombre_programa'];
                $institucion=$_POST['institucion'];
                $fecha=$_POST['fecha_inicio'];
                $finalizado=$_POST['finalizado'];
                
                
                $sql="update educacion set  nivel_educativo='".$nivel."', nombre_programa='".$programa."',institucion='".$institucion."', fecha_inicio='".$fecha."',  finalizado='".$finalizado."' WHERE id_programa ='$id' ";
                
                $resultado=mysqli_query($link,$sql);
                   if($resultado){
        echo "<script language='JavaScript'>
            alert('Datos Actualizados Con Exito');
            location.assign('datos.php');
            </script>";
                
            

        }else{
        echo "<script language='JavaScript'>
            alert('Error,Datos No Actualizados');
            location.assign('datos.php');
            </script>";
        }
               

            }else{
                
                
                $id=$_GET['id'];
                $sql="select * from educacion where id_programa='".$id."' ";
                $resultado=mysqli_query($link,$sql);

                $fila=mysqli_fetch_assoc($resultado);
                    
                $nivel=$fila["nivel_educativo"];
                $programa=$fila['nombre_programa'];
                $institucion=$fila['institucion'];
                $fecha_inicio=$fila['fecha_inicio'];
                $finalizado=$fila['finalizado'];

                mysqli_close($link);
            

        ?>
          
          <div  id="form1" class="form active">
         
      <form action="<?=$_SERVER['PHP_SELF']?>" METHOD="POST">
          <input type="hidden" name="id_programa" value="<?php  echo $id?>"><br>
          
          
            <select id="nivel_educativo" name="nivel_educativo">
                <option value="PrimariaCompleto" <?php if ($fila['nivel_educativo'] == 'PrimariaCompleto') echo 'selected'; ?>>Primaria Completo</option>
                <option value="PrimariaIncompleta" <?php if ($fila['nivel_educativo'] == 'PrimariaIncompleta') echo 'selected'; ?> >Primaria Incompleta</option>
                <option value="BachilletaroCompleto" <?php if ($fila['nivel_educativo'] == 'BachilletaroCompleto') echo 'selected'; ?> >Bachilletaro Completo</option>
                <option value="BachilleratoIncompleto" <?php if ($fila['nivel_educativo'] == 'Si') echo 'selected'; ?> >Bachillerato Incompleto</option>
                <option value="Tecnico" <?php if ($fila['nivel_educativo'] == 'BachilleratoIncompleto') echo 'selected'; ?> >Tecnico</option>
                <option value="Tecnologo" <?php if ($fila['nivel_educativo'] == 'Tecnologo') echo 'selected'; ?> >Tecnologo</option>
                <option value="Pregrado" <?php if ($fila['nivel_educativo'] == 'Pregrado') echo 'selected'; ?> >Pregrado</option>
                <option value="Posgrado" <?php if ($fila['nivel_educativo'] == 'Posgrado') echo 'selected'; ?> >Posgrado</option>
            </select>
          
          
          
        <label for="nivel_educativo">Nivel Educativo:</label><br>
        <input type="text" name="nivel_educativo" value="<?php echo $nivel;?>"><br>
        
        <label for="nombre_programa">Nombre del Programa:</label><br>
        <input type="text" name="nombre_programa" value="<?php echo $programa;?>"><br>
        
        <label for="institucion">Institución:</label><br>
        <input type="text" name="institucion"value="<?php echo $institucion;?>"><br>
        
        <label for="fecha_inicio">Fecha de Inicio:</label><br>
        <input type="date" name="fecha_inicio" value="<?php echo $fecha_inicio;?>"><br>
        
                <label for="finalizado">Finalizado:</label>
<select id="finalizado" name="finalizado" onchange="mostrarFechaFinal1()">
    <option value="" >Seleccione una opcion</option>
    <option value="si" <?php if ($fila['finalizado'] == 'si') echo 'selected'; ?> >Si</option>
    <option value="no" <?php if ($fila['finalizado'] == 'no') echo 'selected'; ?> >No</option>
</select>

<div id="inputAdicional" style="display:none;">
    <label for="nombre_hijo">Fecha de Finalizacion</label>
            <input type="date" id="fecha_fin" name="fecha_fin" value="<?php echo $fecha_fin;?>"><br><br>
</div>

<div id="mensajeNoFinalizado" style="display:none;">
    No ha finalizado.
</div>

<script>
function mostrarFechaFinal1() {
    var finalizado = document.getElementById("finalizado").value;
    var inputAdicional = document.getElementById("inputAdicional");
    var mensajeNoFinalizado = document.getElementById("mensajeNoFinalizado");

    if (finalizado === "si") {
        
        inputAdicional.style.display = "block";
        mensajeNoFinalizado.style.display = "none";
    } else {
        inputAdicional.style.display = "none";
        mensajeNoFinalizado.style.display = "block";
    }
}
</script>
         
         
          <input type="hidden" name="idColaborador" value="<?php  echo $id?>"><br>
        

        <input type="submit" name="enviar"  class="banner-btn" value="ACTUALIZAR">
           
        
        
        <?php
            }
        ?>
          
          </form>
          
    </div>
  
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
