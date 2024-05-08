<?php
// Initialize the session
session_start();
 
// Verificar si el usuario está autenticado
if (!isset($_SESSION["usuario_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: login.php");
  exit();
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
    
    <style>
        
        .contened {
    width: 90%; /* Ancho del contenedor */
    height: 50%; /* Alto del contenedor */
    padding: 20px; /* Espaciado interno */
    box-sizing: border-box; /* Incluye el borde en el tamaño total */
    margin: 20px auto; /* Margen superior e inferior automático, margen izquierdo y derecho automáticos */
    /* Otros estilos personalizados según necesidades */
}
        
         .form {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 50%; /* Espacio entre las columnas */
  }

  .form label {
    display: block; /* Mostrar las etiquetas en una nueva línea */
    margin-bottom: 5px;
  }

  .form textarea ,
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
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid"> <a href="index.php" class="navbar-brand navbar-logo" href="#"> <img src="images/logo-white.png" alt="logo" class="logo-1"> </a>
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





    <div class="row">
      <div class="contened">
          <center>
      
          <br>
          <br>
      <div class="tabs">
    <div class="tab" style="text-align: center" onclick="openForm(event, 'form1')">Datos personales</div>
    <div class="tab" style="text-align: center" onclick="openForm(event, 'form2')">Hijos</div>
    <div class="tab" style="text-align: center" onclick="openForm(event, 'form3')">Formacion</div>
    <div class="tab" style="text-align: center" onclick="openForm(event, 'form4')">Experiencia</div>
</div>

<div >
  
    <div id="form1" class="form active"> 
     <?php    include ("config.php");
        
        $id= $_SESSION["usuario_id"];
    
        

        
        $sql="SELECT * FROM colaboradores WHERE id='$id'";
        
        
          $resultado=mysqli_query($link,$sql);
    
    
      while($row=mysqli_fetch_assoc($resultado)){
    
        $tiene_hijos= $row['tiene_hijos'];
           $estado_civil= $row['estado_civil'];
        
        ?>
           <h3>Actualizar Datos</h3>
        <br>
        <br>
        <br>
        
    <form action="procesar_actualizacion.php" method="POST">
        
       <label for="direccion">Direccion:</label>
        
        <input type="text" name="direccion" value="<?php  echo $row['direccion']?>"  required>
       <br>

        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" value="<?php  echo $row['ciudad']?>"  required>

        <label for="barrio">Barrio:</label>
        <input type="text" name="barrio"  value="<?php  echo $row['barrio']?>" required>
        
        <label for="localidad">Localidad:</label>
        <input type="text" name="localidad" value="<?php  echo $row['localidad']?>" required><br>   

        <label for="correo">Correo:</label>
        <input type="text" name="correo"  value="<?php  echo $row['correo']?>" required>
        
        <label for="celular">Celular:</label>
        <input type="text" name="celular" value="<?php  echo $row['celular']?>" required>
        
    
        
        <label for="Estado_civil">Estado Civil:</label>
            <select id="estado_civil" name="estado_civil">
                <option value="selecciones">Seleccione la opcion indicada</option>
                <option value="soltero" <?php if ($estado_civil == 'Soltero/a') echo 'selected'; ?> >Soltero/a</option>
                <option value="casado" <?php if ($estado_civil == 'Casado/a') echo 'selected'; ?> >Casado/a</option>
                <option value="viudo" <?php if ($estado_civil == 'Viudo/a') echo 'selected'; ?> >Viudo/a</option>
                <option value="union Libre" <?php if ($estado_civil == 'Unión Libre') echo 'selected'; ?> >Unión Libre</option>
                <option value="Separado/a" <?php if ($estado_civil == 'Separado/a') echo 'selected'; ?> >Separado/a</option>
            </select>
        
        
        
         
        
        
        
        
        <label for="tiene_hijos">Tiene Hijos?</label>
            <select id="tiene_hijos" name="tiene_hijos">
                <option value="seleccione">Seleccione la opcion indicada:</option>
                <option value="Si" <?php if ($row['tiene_hijos'] == 'Si') echo 'selected'; ?>>Si</option>
                <option value="No"  <?php if ($row['tiene_hijos'] == 'No') echo 'selected'; ?>>No</option>
           
            </select>
        <br>
        <br>
        <hr>
        <br>
        <br>
        
               <label for="contacto">Nombre De Contacto En Caso De Emergencia:</label>
        <input type="text" name="nombre_contacto" value="<?php  echo $row['nombre_contacto']?>" required>
        
         <label for="parentesco">Parentesco:</label>
        <input type="text" name="parentesco_contacto" value="<?php  echo $row['parentesco_contacto']?>" required>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono_contacto"  value="<?php  echo $row['telefono_contacto']?>" required><br><br><br>
        
        <label for="contacto">Nombre De Contacto En Caso De Emergencia:</label>
        <input type="text" name="nombre_contacto2"  value="<?php  echo $row['nombre_contacto2']?>" required>
        
        <label for="parentesco">Parentesco:</label>
        <input type="text" name="parentesco_contacto2"  value="<?php  echo $row['parentesco_contacto2']?>" required>
        
        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono_contacto2"  value="<?php  echo $row['telefono_contacto2']?>" required><br>
        
        
        <br>

        <input type="submit" class="banner-btn" value="Actualizar">
  
     
        </form>
      <?php
      }
            
            ?>
</div>

<div id="form2" class="form">
    
  <?php  
    
    
     
        $sql="SELECT * FROM colaboradores WHERE id='$id'";
        
        
          $resultado=mysqli_query($link,$sql);
    
    
      while($row=mysqli_fetch_assoc($resultado)){
    
        
        
        ?>
        <h3> Hijos</h3>
    <br>
    <br>
  <?php   $tiene_hijos= $row['tiene_hijos'];
    ?>
   <style>
     
     .table-wrapper {
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  border: 1px solid #ddd;
}

/* Ajustar estilos para pantallas pequeñas */
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
  table thead {
    display: none;
  }
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: 10px;
  }
  table td {
    border-bottom: none;
    display: block;
    text-align: right;
  }
  table td::before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
  }
}
    </style>
    
    <body>
        
    
      
   <?php
    
    $id= $_SESSION["usuario_id"];
    
    $sql2="SELECT * FROM colaboradores INNER JOIN hijos ON colaboradores.id = hijos.idColaborador where colaboradores.id='$id'";
    
    $resultado2=mysqli_query($link,$sql2);
          ?> 
        <div class="table-wrapper">
            <table> 
           <tehead>
                <tr> 
                   
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Edad</th>
                    <th>Documento </th>
                    <th>Funciones </th>
                    
                </tr>
                
            </tehead>
    <?php
    
     while($filas=mysqli_fetch_assoc($resultado2)){
    
    ?>  
              <tbody>
           
                  <tr>
                        <td><?php  echo $filas['nombreHijo']?></td>
    
                        <td><?php  echo $filas['fecha_nacimiento']?></td> 
            
                        <td><?php  echo $filas['edad']?></td>
                      
                      <td> <?php echo "<a href='" . $filas["archivo_adjunto"] . "' target='_blank'><img src='archivopdf1.png' alt='Icono'></a>";?></td>
               
                        <td> <?php echo "<a href='editah.php?id=".$filas['id_hijo']."'><img src='configuracion.png' alt='Icono'></a>";?>
                   
                         <?php echo "<a href='eliminah.php?id=".$filas['id_hijo']."' onclick='return confirmar()'> <img src='elimina.png' alt='Icono'></a>";?>
                        </td>
                </tr>
          
           <br>
          
       
            <?php
     }
    
        
        
    
        
?>
    
                </tbody>
           </table> 
        </div>
     </body>
    <br>
    <br>
    <hr>
    
    <?php 
    
   
     $id= $_SESSION["usuario_id"];
    
    if ( $tiene_hijos == 'Si'){
        
        ?>
<br>
<br>
   
    <h3> Agregar Hijo</h3>
  <br>
    
           <form action="guardar_hijos.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="nombre">Nombre:</label>
       
        <input type="text" id="nombreHijo" name="nombreHijo" required>
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
    </div>
         <div>
            <label for="edad">Edad del Hijo (años):</label>
            <input type="text" id="edad" style ="text-align: center; border: none;  outline: none"name="edad" readonly>
        </div>
    <div>
        <label for="archivo_adjunto">Adjuntar Archivo (Registro civil):</label>
        <input type="file" id="archivo_adjunto" name="archivo_adjunto" accept=".pdf" required>
    </div>
               
                <input type="hidden" name="id" value="<?php  echo $id?>"><br>
        
    <button type="submit" class="banner-btn">Guardar</button>
</form>
    <?php
    }else{
     echo 'OMITA ESTE PASO';
    }
      }
    ?>

     <script>
        document.getElementById("fecha_nacimiento").addEventListener("change", function() {
            var fechaNacimiento = new Date(this.value);
            var hoy = new Date();
            var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
            var mes = hoy.getMonth() - fechaNacimiento.getMonth();
            if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNacimiento.getDate())) {
                edad--;
            }
            document.getElementById("edad").value = edad;
        });
    </script>  
  
</div>

<div id="form3" class="form">
    <h3> Formación</h3>
    <br>
    <br>
    
      <style>
     
     .table-wrapper {
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  border: 1px solid #ddd;
}

/* Ajustar estilos para pantallas pequeñas */
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
  table thead {
    display: none;
  }
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: 10px;
  }
  table td {
    border-bottom: none;
    display: block;
    text-align: right;
  }
  table td::before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
  }
}
    </style>
    
    <body>
    
      
   <?php
    
    $id= $_SESSION["usuario_id"];
    
    $sql1="SELECT * FROM colaboradores INNER JOIN educacion ON colaboradores.id = educacion.idColaborador where colaboradores.id='$id'";
    
    $resultado1=mysqli_query($link,$sql1);
          ?> 
        <div class="table-wrapper">
            <table> 
           <tehead>
                <tr> 
                   
                    <th>Titulo</th>
                    <th>Institucion Educativa</th>
                    <th>Nivel Educativo</th>
                    <th>Finalizado</th>
                    <th>Funciones</th>
                    
                </tr>
                
            </tehead>
    <?php
    
     while($filas=mysqli_fetch_assoc($resultado1)){
    
    ?>  
              <tbody>
           
                  <tr>
                        <td><?php  echo $filas['nombre_programa']?></td>
    
                        <td><?php  echo $filas['institucion']?></td> 
            
                        <td><?php  echo $filas['nivel_educativo']?></td>
                        
                        <td><?php  echo $filas['finalizado']?></td>
                      
               
                        <td> <?php echo "<a href='editar.php?id=".$filas['id_programa']."'><img src='configuracion.png' alt='Icono'></a>";?>
                   
                         <?php echo "<a href='eliminar.php?id=".$filas['id_programa']."' onclick='return confirmar()'> <img src='elimina.png' alt='Icono'></a>";?>
                        </td>
                </tr>
          
           <br>
          
       
            <?php
     }
    
        
        
    
        
?>
    
                </tbody>
           </table>
        </div>
     </body>
    <br><br>
          
           <hr>
        <br>
   
    <h3> Agregar Nivel Academico</h3>
     <form action="guardar_datos.php" method="post">
         
        <label for="nivel_educativo">Nivel Educativo:</label>
         
         <select id="nivel_educativo" name="nivel_educativo">
                <option value="PrimariaCompleto">Primaria Completo</option>
                <option value="PrimariaIncompleta">Primaria Incompleta</option>
                <option value="BachilletaroCompleto">Bachilletaro Completo</option>
                <option value="BachilleratoIncompleto">Bachillerato Incompleto</option>
                <option value="Tecnico">Tecnico</option>
                <option value="Tecnologo">Tecnologo</option>
                <option value="Pregrado">Pregrado</option>
                <option value="Posgrado">Posgrado</option>
            </select>
       <br>
        
        <label for="nombre_programa">Nombre del Programa:</label>
        <input type="text" name="nombre_programa" required><br>
        
        <label for="institucion">Institución:</label>
        <input type="text" name="institucion" required><br>
        
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio" required><br>
         
         
         <label for="finalizado">Finalizado:</label>
<select id="finalizado" name="finalizado" onchange="mostrarFechaFinal1()">
    <option value="">Seleccione una opcion</option>
    <option value="si">Si</option>
    <option value="no">No</option>
</select>

<div id="inputAdicional" style="display:none;">
    <label for="nombre_hijo">Fecha de Finalizacion</label>
            <input type="date" id="fecha_fin" name="fecha_fin"><br><br>
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
         

   
   <br>
         
          <input type="hidden" name="idColaborador" value="<?php  echo $id?>"><br>
        
        <input type="submit"  class="banner-btn" value="Guardar">
    </form>
 
   
    
       
        
        
        

    
</div>

<div id="form4" class="form">
          <h3> Experiencia</h3>
    <br>
    <br>
    
   
    
      <style>
     
     .table-wrapper {
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  border: 1px solid #ddd;
}

/* Ajustar estilos para pantallas pequeñas */
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
  table thead {
    display: none;
  }
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: 10px;
  }
  table td {
    border-bottom: none;
    display: block;
    text-align: right;
  }
  table td::before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
  }
}
    </style>
    
    <body>
    
      
   <?php
    
    $id= $_SESSION["usuario_id"];
    
    $sql1="SELECT * FROM colaboradores INNER JOIN experiencia ON colaboradores.id = experiencia.idColaborador where colaboradores.id='$id'";
    
    $resultado1=mysqli_query($link,$sql1);
          ?> 
        <div class="table-wrapper">
            <table> 
           <tehead>
                <tr> 
                   
                    <th>Empresa</th>
                    <th>Cargo</th>
                    <th>Funciones</th>
                    <th>Fecha de Ingreso</th>
                    <th>Fecha de Retiro</th>
                    <th> Funciones</th>
                    
                </tr>
                
            </tehead>
    <?php
    
     while($filas=mysqli_fetch_assoc($resultado1)){
    
    ?>  
              <tbody>
           
                  <tr>
                        <td><?php  echo $filas['nombre_empresa']?></td>
    
                        <td><?php  echo $filas['cargo']?></td> 
            
                        <td><?php  echo $filas['funciones']?></td>
                        
                        <td><?php  echo $filas['fecha_inicio']?></td>
                        
                        <td><?php  echo $filas['fecha_fin']?></td>
               
                        <td> <?php echo "<a href='editar_ex.php?id=".$filas['id_experiencia']."'><img src='configuracion.png' alt='Icono'></a>";?>
                   
                         <?php echo "<a href='eliminar_ex.php?id=".$filas['id_experiencia']."' onclick='return confirmar()'> <img src='elimina.png' alt='Icono'></a>";?>
                        </td>
                </tr>
          
           <br>
          
       
            <?php
     }
    
        
        
    
        
?>
    
                </tbody>
           </table> 
        </div>
     </body>
    <br><br>
          
           <hr>
        <br>
   
    <h3> Agregar Experiencia Laboral    </h3>
     <form action="guardar_experiencia.php" method="post">
         
       <label for="nombre_empresa">Nombre De La Empresa:</label>
        <input type="text" name="nombre_empresa" required><br>
     
  
        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" required><br>
        
        <label for="Funciones">Funciones:</label>
       <textarea id="funciones" name="funciones"></textarea><br>
        
        <label for="fecha_inicio">Fecha de Contratacion:</label>
        <input type="date" name="fecha_inicio" required><br>
        
        <label for="nombre_hijo">Fecha de Finalizacion de Contrato</label>    
         <input type="date" id="fecha_fin" name="fecha_fin"><br><br>
     
   <br>
         
          <input type="hidden" name="idColaborador" value="<?php  echo $id?>"><br>
        
        <input type="submit"  class="banner-btn" value="Guardar ">
    </form>
  
    
</div>

<script>
function openForm(evt, formName) {
    var i, forms, tabs;
    forms = document.getElementsByClassName("form");
    for (i = 0; i < forms.length; i++) {
        forms[i].classList.remove("active");
    }
    tabs = document.getElementsByClassName("tab");
    for (i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove("active");
    }
    document.getElementById(formName).classList.add("active");
    evt.currentTarget.classList.add("active");
}
</script>


          
              
        
    
    </div>
          </center>
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
