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
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Responsive</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"/>

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<style>
                 .styled {
    font-size: 16px;
  line-height: 1.5; /* Espacio entre líneas 1.5 veces el tamaño de la fuente */
  color: #666; /* Color de texto gris */
  margin-bottom: 20px; /* Margen inferior de 20px */
}
    * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    text-decoration: none !important;
    list-style: none !important;
    outline: none !important;
    margin: 0;
    padding: 0;
}
    @media (min-width: 992px){
.navbar-expand-lg {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
}}
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

    .form-section input[type="number"]
   {
    width: 70%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }

    
    .form-section1 input[type="number"]
   {
    width: 70%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
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
    height: 28%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }
    
    
     .form-section1 textarea {
    width: 100%;
    height: 28%;
    padding: 8px;
    margin-bottom: 10px;
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
	background:url(images/datos.jpg) no-repeat 0% 0% / 100% 100%;
	color:#ffffff;
	text-align: center;
	width: 100%;
}
    
.banner-overlay {
    background: linear-gradient(to bottom, rgb(57 57 57 / 80%) 104%, #e5dfd8 14%);
    padding: 180px 0px 180px;
}
    @media (max-width: 768px){
.banner-overlay {
    padding: 150px 0px 100px;
}
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
    
    .testimonials {
	background:url(images/bg1.jpg) no-repeat 0% 0% / 100% 100%;
	width:100%;
}
.testimonials-overlay {
	background: rgba(0,0,0,0.9);
}
.testimonials .testimonial-item p {
	max-width: 700px;
	color: #ffffff;
	margin-bottom: 30px !important;
}
.testimonials .icon i {
	color: #ab2f52;
	font-size: 47px;
	margin-bottom: 25px;
}
.testimonials h5 {
	color:#ffaf53;
}
.testimonials h6 {
	color: #ffffff;
	margin-bottom: 10px !important;
}
    
    .section-padding {
	padding: 100px 0px;
}
     .oculto {
            display: none;
        }
    
    .container01 {
            text-align: center; /* Alineación del texto a la derecha */
            margin-right: 0px; /* Margen derecho para ajustar la posición */
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
</style>
</head>
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
    <div class="banner text-center" data-scroll-index='0'>
  <div class="banner-overlay">
         <h1>Crear Nuevo Proveedor</h1>
    </div>
    </div>
<body>

    
    
<br>
<br>

    <form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
     <?php
        $id=$_SESSION["cliente_id"];
        ?>
        <input type="hidden"  name="id_cliente" value="<?php echo $id;?>">
   
    <div class="div-centrado">
            
<div class="form-container">
  <div class="left-section">
    <div class="form-section">
      <h2>1. DATOS DEL PROVEEDOR/CLIENTE</h2>
        <label for="tipo_persona">Tipo de persona:</label>
<select id="tipo_persona" name="tipo_persona">
    <option value="juridica">Persona jurídica</option>
    <option value="natural">Persona natural</option>
</select>
      <div style="display:flex;">
        <div style="flex:1;">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre">
          <label for="numero_identificacion">Numero de Identificacion(NIT o Numero de Cedula):</label>
          <input type="number" id="numero_identificacion" name="numero_identificacion"><input type="number" id="DV" style=" width: 30%;" placeholder="DV" name="DV">
         
 
        </div>
        <div style="flex:1; margin-left: 30px;">
            <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" name="telefono">
          <label for="direccion">Dirección:</label>
          <input type="text" id="direccion" name="direccion">
          
            
            
          
        </div>
          <div style="flex:1; margin-left: 30px;">
               <label for="ciudad">Ciudad:</label>
          <input type="text" id="ciudad" name="ciudad">
          <label for="actividad_economica">Actividad Económica:</label>
          <input type="text" id="actividad_economica" name="actividad_economica">
              
          </div>    
      </div>
        <br>
       
           <div class="oculto"> 
      <label for="certificaciones_acreditadas">Objetivo:</label>
           <textarea id="objetivo" name="objetivo"  ></textarea>
        </div>
    </div>
  </div>
    </div>
        
         <div class="oculto"> 
        
         <label for="nombre_representanteLegal">Nombre del Representante Legal:</label>
          <input type="text" id="nombre_representanteLegal" name="nombre_representanteLegal">
             
          <label for="nombre_representanteLegal">Numero de Documento del Representante:</label>
          <input type="text" id="cedula_representante" name="cedula_representante">
             
          <label for="cargo">Cargo:</label>
          <input type="text" id="cargo" name="cargo">
             
        <label for="tipo_empresa">Tipo de Empresa:</label>
          <input type="text" id="tipo_empresa" name="tipo_empresa">

          <label for="tipo_empresa">Tipo de Empresa:</label>
          <input type="text" id="empresa_labora" name="empresa_labora">
             
             <label for="contacto_empresa">Nombre de Contacto De La Empresa:</label>
          <input type="text" id="contacto_empresa" name="contacto_empresa">
             
        <label for="nombre_contactoProveedor">Nombre de Contacto del Proveedor/cliente:</label>
          <input type="text" id="nombre_contactoProveedor" name="nombre_contactoProveedor">
        
    
          <label for="codigo">Código:</label>
  <input type="text" id="operaciones_moneda" name="operaciones_moneda"><br> 
       <label for="codigo">Código:</label>
  <input type="text" id="operaciones_cual" name="operaciones_cual"><br>
              <label for="codigo">Código:</label>
  <input type="text" id="posee_productos" name="posee_productos"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="importacion" name="importacion"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="exportacion" name="exportacion"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="inversion" name="inversion"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="prestamo" name="prestamo"><br>
         <label for="codigo">Código:</label>
  <input type="text" id="transferencia" name="transferencia"><br>
             
        <label for="codigo">Código:</label>
  <input type="text" id="otro_credito" name="otro_credito"><br>
  <input type="text" id="direccion_residencia" name="direccion_residencia"><br>
       
       
       
       
       
       
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion1B" name="tipo_identicacion1B"><br> 
       <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion1B" name="numero_identificacion1B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="codigo" name="nombre_1B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos1B" name="manejo_recursos1B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico1B" name="reconocimiento_publico1B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta1B" name="persona_expuesta1B"><br>
     <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion2B" name="tipo_identicacion2B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion2B" name="numero_identificacion2B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_2B" name="nombre_2B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos2B" name="manejo_recursos2B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico2B" name="reconocimiento_publico2B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta2B" name="persona_expuesta2B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion3B" name="tipo_identicacion3B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion3B" name="numero_identificacion3B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_3B" name="nombre_3B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos3B" name="manejo_recursos3B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico3B" name="reconocimiento_publico3B"><br>
       <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta3B" name="persona_expuesta3B"><br>
   <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion4B" name="tipo_identicacion4B"><br> 
       <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion4B" name="numero_identificacion4B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_4B" name="nombre_4B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos4B" name="manejo_recursos4B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico4B" name="reconocimiento_publico4B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta4B" name="persona_expuesta4B"><br>
     <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion5B" name="tipo_identicacion5B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion5B" name="numero_identificacion5B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_5B" name="nombre_5B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos5B" name="manejo_recursos5B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico5B" name="reconocimiento_publico5B"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuest5B" name="persona_expuest5B"><br>
       
       

       
       
       
       
       
       

       
        <label for="codigo">Código:</label>
  <input type="text" id="tiempo_entrega" name="tiempo_entrega"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="ofrece_credito" name="ofrece_credito"><br>
       <label for="codigo">Código:</label>
  <input type="text" id="suministra_muestra" name="suministra_muestra"><br>
       <label for="codigo">Código:</label>
  <input type="text" id="garantia_soporte" name="garantia_soporte"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="maneja_sostenibles" name="maneja_sostenibles"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="gestiona_resiuduos" name="gestiona_resiuduos"><br>
       
       
       



  
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_identificacion1" name="tipo_identificacion1"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="identificacion_aso1" name="identificacion_aso1"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_1" name="nombre_1"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="porcentaje_participacion1" name="porcentaje_participacion1"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos1" name="manejo_recursos1"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico1" name="reconocimiento_publico1"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta1" name="persona_expuesta1"><br>
        
       
               <label for="codigo">Código:</label>
  <input type="text" id="tipo_identificacion2" name="tipo_identificacion2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="identificacion_aso2" name="identificacion_aso2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_2" name="nombre_2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="porcentaje_participacion2" name="porcentaje_participacion2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos2" name="manejo_recursos2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico2" name="reconocimiento_publico2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta2" name="persona_expuesta2"><br>
        
       
               <label for="codigo">Código:</label>
  <input type="text" id="tipo_identificacion3" name="tipo_identificacion3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="identificacion_aso3" name="identificacion_aso3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_3" name="nombre_3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="porcentaje_participacion3" name="porcentaje_participacion3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos3" name="manejo_recursos3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico3" name="reconocimiento_publico3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta3" name="persona_expuesta3"><br>
        
       
               <label for="codigo">Código:</label>
  <input type="text" id="tipo_identificacion4" name="tipo_identificacion4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="identificacion_aso4" name="identificacion_aso4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_4" name="nombre_4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="porcentaje_participacion4" name="porcentaje_participacion4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos4" name="manejo_recursos4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico4" name="reconocimiento_publico4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta4" name="persona_expuesta4"><br>
        
       
               <label for="codigo">Código:</label>
  <input type="text" id="tipo_identificacion5" name="tipo_identificacion5"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="identificacion_aso5" name="identificacion_aso5"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_5" name="nombre_5"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="porcentaje_participacion5" name="porcentaje_participacion5"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos5" name="manejo_recursos5"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico5" name="reconocimiento_publico5"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta5" name="persona_expuesta5"><br>
        
       
       
       
       
       
       
       
       
       
       
       <label for="codigo">Código:</label>
  <input type="text" id="tipo_producto" name="tipo_producto"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_producto" name="numero_producto"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="entidad" name="entidad"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="monto" name="monto"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="ciudad1" name="ciudad1"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="pais" name="pais"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="moneda" name="moneda"><br>
       
       
       
       
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_producto2" name="tipo_producto2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_producto2" name="numero_producto2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="entidad2" name="entidad2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="monto2" name="monto2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="ciudad2" name="ciudad2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="pais2" name="pais2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="moneda2" name="moneda2"><br>
        
       
       
      
       
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_producto3" name="tipo_producto3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_producto3" name="numero_producto3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="entidad3" name="entidad3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="monto3" name="monto3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="ciudad3" name="ciudad3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="pais3" name="pais3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="moneda3" name="moneda3"><br>
       
       
       
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_producto4" name="tipo_producto4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_producto4" name="numero_producto4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="entidad4" name="entidad4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="monto4" name="monto4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="ciudad4" name="ciudad4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="pais4" name="pais4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="moneda4" name="moneda4"><br>
        
        
       
       
       
       
       
       
       
       
       
       
       
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion1A" name="tipo_identicacion1A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion1A" name="numero_identificacion1A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_1A" name="nombre_1A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos1A" name="manejo_recursos1A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico1A" name="reconocimiento_publico1A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta1A" name="persona_expuesta1A"><br>
        
 
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion2A" name="tipo_identicacion2A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion2A" name="numero_identificacion2A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_2A" name="nombre_2A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos2A" name="manejo_recursos2A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico2A" name="reconocimiento_publico2A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta2A" name="persona_expuesta2A"><br>
        
     <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion3A" name="tipo_identicacion3A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion3A" name="numero_identificacion3A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_3A" name="nombre_3A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos3A" name="manejo_recursos3A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico3A" name="reconocimiento_publico3A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta3A" name="persona_expuesta3A"><br>
 
       
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion4A" name="tipo_identicacion4A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion4A" name="numero_identificacion4A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_4A" name="nombre_4A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos4A" name="manejo_recursos4A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico4A" name="reconocimiento_publico4A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta4A" name="persona_expuesta4A"><br>
        
   
        <label for="codigo">Código:</label>
  <input type="text" id="tipo_identicacion5A" name="tipo_identicacion5A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="numero_identificacion5A" name="numero_identificacion5A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="nombre_5A" name="nombre_5A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="manejo_recursos5A" name="manejo_recursos5A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico5A" name="reconocimiento_publico5A"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta5A" name="persona_expuesta5A"><br>
        
       
       
       
       
       
   
       <label for="codigo">Código:</label>
  <input type="text" id="actividad_recursos" name="actividad_recursos"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="poder_publico" name="poder_publico"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="reconocimiento_publico" name="reconocimiento_publico"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="persona_expuesta" name="persona_expuesta"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="vinculo_expuesta" name="vinculo_expuesta"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="representante_organizacion" name="representante_organizacion"><br>
       <label for="codigo">Código:</label>
  <input type="text" id="obligaciones_tributarias" name="obligaciones_tributarias"><br>
       
        <label for="codigo">Código:</label>
  <input type="text" id="indique_1" name="indique_1"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="indique_2" name="indique_2"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="indique_3" name="indique_3"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="indique_4" name="indique_4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="indique_5" name="indique_5"><br>
       <label for="codigo">Código:</label>
  <input type="text" id="indique_6" name="indique_6"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="indique_7" name="indique_7"><br>

  <label for="codigo">Código:</label>
  <input type="text" id="certificacion_accionaria" name="certificacion_accionaria"><br>
       <label for="codigo">Código:</label>
  <input type="text" id="observ_4" name="observ_4"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="antecedentes_disciplinarios" name="antecedentes_disciplinarios"><br>
  <label for="codigo">Código:</label>
  <input type="text" id="observ_5" name="observ_5"><br>
       <label for="codigo">Código:</label>
  <input type="text" id="gestion_residuos" name="gestion_residuos"><br>
        <label for="codigo">Código:</label>
  <input type="text" id="observ_16" name="observ_16"><br>
       
       

        </div>
        
      
  
       
    
   <?php  
              date_default_timezone_set("America/Bogota");
                setlocale(LC_TIME, "spanish");

              
                ?>         
            <input type="hidden" id="fecha_registro" name="fecha_registro"  value=" "><br><br>



<div class="form-container">
       <div class="oculto"> 
  <div class="left-section">
    <div class="form-section">
    <div class="form-section">
      <h3>CONTACTOS</h3>
      <div style="display:flex;">
        <div style="flex:1;">
          <label for="contacto_contable">Contacto Contable:</label>
            <input type="text" id="contacto_contable" name="contacto_contable">
           <label for="contacto_comercial">Contacto Comercial:</label>
            <input type="text" id="contacto_comercial" name="contacto_comercial">
            <label for="nombre_otro">Otro:</label>
            <input type="text" id="nombre_otro" name="nombre_otro">

      

          
          
        </div>
        <div style="flex:1; margin-left: 30px;">
        <label for="cargo_contable">Cargo Contable:</label>
            <input type="text" id="cargo_contable" name="cargo_contable">
          <label for="cargo_comercial">Cargo Comercial:</label>
            <input type="text" id="cargo_comercial" name="cargo_comercial">
          <label for="cargo_otro">Cargo :</label>
            <input type="text" id="cargo_otro" name="cargo_otro"> 
            
            
          
        </div>
          <div style="flex:1; margin-left: 30px;">
           <label for="correo_contable">Correo Contable:</label>
            <input type="text" id="correo_contable" name="correo_contable">
          <label for="correo_comercial">Correo Comercial:</label>
            <input type="text" id="correo_comercial" name="correo_comercial">
          <label for="correo_otro">Correo :</label>
            <input type="text" id="correo_otro" name="correo_otro">
          </div>    
      </div>
       
        </div>
    </div>
  </div>
    </div>
           
   <div class="oculto"> 
   <div class="form-container">
  <div class="left-section">
    <div class="form-section">
      <div style="display:flex;">
        <div style="flex:1;">
         <h4>PRODUCTOS / SERVICIOS OFRECIDOS/REQUERIDOS</h4>
         
          <br>
            
            <input type="text" id="producto1" name="producto1"><br><br>
           
            <input type="text" id="producto2" name="producto2"><br><br>
           
            <input type="text" id="producto3" name="producto3"><br><br>

    <br> <hr><br>   

           <label for="t_garantia">T Garantia:</label><br>
            <input type="text" id="t_garantia" name="t_garantia"><br><br>  
          
        </div>
        
          <div style="flex:1; margin-left: 30px;">
             <h4>MARCA</h4>
        
        <br>
            <input type="text" id="marca1" name="marca1"><br><br>
         
            <input type="text" id="marca2" name="marca2"><br><br>
        
            <input type="text" id="marca3" name="marca3"><br><br> 
              <br> <hr><br>
               <label for="poliza">Póliza:</label><br>
            <input type="text" id="poliza" name="poliza"><br><br>
 
          </div>    
      </div>
    </div>
  </div>
    </div>
    
   
    <br>
   
  
    <br>
    <br>
    <fieldset>
          <br>
     
 <div class="form-container">
  <div class="left-section">
    <div class="form-section1">
        <h2>2. INFORMACION FISCAL</h2>
      <div style="display:flex;">
        <div style="flex:1;">
         <label for="codigo_actividad">Código Actividad Comercial CIIU:</label>
  <input type="text" id="codigo_actividad" name="codigo_actividad"><br>
            
           <label for="autorretenedor">Autorretenedor:</label><br>
        <select id="autorretenedor" name="autorretenedor">
            <option value="">Seleccione la Opcion</option>
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>
          <br>
          
            <label for="resolucion">No. Resolucion:</label>
                <input type="text" id="text" name="resolucion1" placeholder="N° Resolucion"><br>
            
             <label for="autorretenedor">Fecha:</label>
          <input type="date"  name="fecha1" placeholder="fecha"><br>
            
             <label for="anexar_resolucion">Anexar Resolución(es):</label>
          <textarea id="anexar_resolucion" name="anexar_resolucion" ></textarea><br>
          <br>

      

          
          
        </div>
        
          <div style="flex:1; margin-left: 30px;">
            <label for="descripcionCIIU">Descripción CIIU:</label>
  <input type="text" id="descripcionCIIU" name="descripcionCIIU"><br>
          
          
           <label for="responsable_iva">Responsable de IVA:</label>
 <select name="responsable_iva"  placeholder="Responsable de IVA">
  <option value="">Seleccione la Opcion</option>
    <option value="si">Sí</option>
    <option value="no">No</option>
  </select>
              
              <br>
          
            <label for="gran_contribuyente">Gran Contribuyente:</label><br>
          <select  name="gran_contribuyente" >
    <option value="">Seleccione la Opcion</option>
    <option value="si">Sí</option>
    <option value="no">No</option>
  </select>
          <br>
          <br>
          <label for="regimen_simple">Régimen Simple:</label><br>
          <select name="regimen_simple" >
    
    <option value="">Seleccione la Opcion</option>
    <option value="si">Sí</option>
    <option value="no">No</option>
  </select>
          <br>
          
       
                    <label for="autorretenedor">No. Resolucion:</label>
  <input type="text" id="text" name="resolucion2" placeholder="N° Resolucion"><br>
          
                    <label for="autorretenedor">Fecha:</label>
          <input type="date"  name="fecha2" placeholder="fecha"><br>
 <br>   
 
          </div>    
      </div>
    </div>
  </div>
    </div>



    </fieldset>
    <br>
    <br>
    
     <div class="div-centrado">
      <label for="tarifa_correspondiente">SI ES PROVEEDOR Y/O ACREDEDOR DE BOGOTA, SELECCIONE LA TARIFA CORRESPONDIENTE A LAS ACTIVIDADES REGISTRADAS EN INDUSTRIA Y COMERCIO, DE LO CONTRARIO SELECCIONE N/A::</label><br><br>
          <div class="radio-buttons" name="tarifa_correspondiente" id="tarifa_correspondiente">
                        <input type="radio" id="tarifa_100" name="tarifa_correspondiente" value="4,14 POR MIL">
                        <label  class="radio-label">4,14 POR MIL</label>
                        
                        <input type="radio" id="tarifa_200" name="tarifa_correspondiente" value="6,9 POR MIL">
                        <label   class="radio-label">6,9 POR MIL </label>
                      
                        <input type="radio" id="tarifa_500" name="tarifa_correspondiente" value="9,66 POR MIL">
                        <label   class="radio-label">9,66 POR MIL </label>
                      
                        <input type="radio" id="tarifa_200" name="tarifa_correspondiente" value="11,04 POR MIL">
                        <label  class="radio-label">11,04 POR MIL </label>
                        
                        <input type="radio" id="tarifa_500" name="tarifa_correspondiente" value="13,8 POR MIL">
                        <label  class="radio-label">13,8 POR MIL  </label>
                        
                        <input type="radio" id="tarifa_500" name="tarifa_correspondiente" value="N/A">
                        <label  class="radio-label">N/A  </label>
                        <br><br>
          </div>
      </div>
    <fieldset>
    <div class="form-container">
  <div class="left-section">
    <div class="form-section">
      <h2>3. INFORMACION FINANCIERA </h2>
      <div style="display:flex;">
        <div style="flex:1;">
           <label for="titular_cuenta">Titular de la Cuenta:</label>
  <input type="text" id="titular_cuenta" name="titular_cuenta"><br>

  <label for="banco">Banco:</label>
  <input type="text" id="banco" name="banco"><br>

  <label for="codigo">Código:</label>
  <input type="text" id="codigo" name="codigo"><br>

      

          
          
        </div>
        <div style="flex:1; margin-left: 30px;">
            <label for="tipo_cuenta">Tipo de Cuenta:</label>
  <select id="tipo_cuenta" name="tipo_cuenta">
    <option value="">Seleccione la opcion</option>
    <option value="corriente">Corriente</option>
    <option value="ahorros">Ahorros</option>
  </select><br>

  <label for="numero_cuenta">Número de Cuenta:</label>
  <input type="text" id="numero_cuenta" name="numero_cuenta"><br>  
        
            
            
          
        </div>
          <div style="flex:1; margin-left: 30px;">
              <label for="modalidad_pago">Modalidad de Pago:</label>
  <select id="modalidad_pago" name="modalidad_pago">
    <option value="">Seleccione la opcion</option>
    <option value="contado">Contado</option>
    <option value="30Dias">30 Dias</option>
    <option value="60Dias">60 Dias</option>
  </select>
<br> 
  <label for="cupo_credito">Cupo de Crédito Ofrecido:</label>
  <input type="text" id="cupo_credito" name="cupo_credito"><br>
          </div>    
      </div>
    </div>
  </div>
    </div>
    </fieldset>
    
    <br>
    <br>
                

<div class="form-container">
  <div class="left-section">
    <div class="form-section">
     <h2>4.  CALIDAD DE PRODUCTOS/SERVICIOS (Sistemas de Gestión Implementados)  </h2>
     <div class="div-centrado">
      <label for="certificaciones_acreditadas">La empresa tiene certificaciones acreditadas de:</label><br><br>
           <textarea id="certificaciones_acreditadas" name="certificaciones_acreditadas"  ></textarea>
      </div>
        <br>
        <br>
        
        <table>
  <thead>
    <tr>
      <th>Certificaciones de Sistemas de Gestión de sus productos o servicios </th>
      <th>Opciones</th>
      <th>Observaciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Sistema de Gestión de Calidad</td>
      <td><div class="radio-buttons" name="gestion_calidad" id="gestion_calidad">
        <input type="radio" id="gestion_calidad" name="gestion_calidad" value="si">
        <label for="si1"  class="radio-label">Sí</label>
          <span class="checkmark"></span>
        <input type="radio" id="gestion_calidad" name="gestion_calidad" value="no">
        <label for="no1"   class="radio-label"> No</label>
          <span class="checkmark"></span>
        <input type="radio" id="gestion_calidad" name="gestion_calidad" value="na">
        <label for="na1"   class="radio-label">N/A</label>
          <span class="checkmark"></span>
          </div>
      </td>
      <td><textarea id="observaciones1" name="observaciones1" ></textarea></td>
    </tr>
    <tr>
      <td>Sistema de Gestión de Medio Ambiente</td>
      <td>
        <input type="radio" id="gestion_ambiente" name="gestion_ambiente" value="si">
        <label for="si2"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_ambiente" name="gestion_ambiente" value="no">
        <label for="no2"   class="radio-label">No</label>
        <input type="radio" id="gestion_ambiente" name="gestion_ambiente" value="na">
        <label for="na2"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observaciones2" name="observaciones2" ></textarea></td>
    </tr>
    <tr>
      <td>Sistema de Gestión de Salud y Seguridad en el Trabajo</td>
      <td>
        <input type="radio" id="gestion_saludSeguridad" name="gestion_saludSeguridad" value="si">
        <label for="si3"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_saludSeguridad" name="gestion_saludSeguridad" value="no">
        <label for="no3"   class="radio-label">No</label>
        <input type="radio" id="gestion_saludSeguridad" name="gestion_saludSeguridad" value="na">
        <label for="na3"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observaciones3" name="observaciones3" ></textarea></td>
    </tr>
    <tr>
      <td>Sistema de Gestión de Seguridad de la Cadena de Suministro</td>
      <td>
        <input type="radio" id="gestion_seguridad" name="gestion_seguridad" value="si">
        <label for="si4"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_seguridad" name="gestion_seguridad" value="no">
        <label for="no4"   class="radio-label">No</label>
        <input type="radio" id="gestion_seguridad" name="gestion_seguridad" value="na">
        <label for="na4"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observaciones4" name="observaciones4" ></textarea></td>
    </tr>
    <tr>
      <td>WRAP (Sistema de Gestión de cumplimiento social que promueve la fabricación segura, legal, humana y ética) </td>
      <td>
        <input type="radio" id="wrap" name="wrap" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="wrap" name="wrap" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="wrap" name="wrap" value="na">
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observaciones5" name="observaciones5" ></textarea></td>
    </tr>
  </tbody>
</table>
      
    </div>
  </div>
    </div>
       
       
       
       
       
       
       
       
       
    <br>
    <br>
     <div class="div-centrado">
         <p>Declaro que la información consignada y anexa a este formulario es veraz y admito que cualquier omisión o inexactitud en estos documentos podrá ocasionar el rechazo de esta solicitud, la devolución de la documentación y la cancelación de la inscripción  y nos comprometemos a actualizarla en los tiempos establecidos por su organización.  Declaro que la actividad, profesión u oficio de la empresa es licita y se ejerce dentro del marco legal, además, que los recursos poseídos no provienen de actividades ilícitas de acuerdo con el Código Penal Colombiano. Los recursos (económicos, humanos, etc.) que se deriven del desarrollo de la actividad comercial, no se destinarán a la financiación del terrorismo, grupos terroristas o actividades ilícitas. Dentro  de  los  términos  de  la  Ley  y sus  decretos  reglamentarios,  autorizo  a FRANCISCO A. ROCHA ALVARADO S.A.S. para consultar  y  verificar  los  datos  en  centrales de información y/o base de datos nacionales colombianas, extranjeras o internacionales, correspondientes a la persona jurídica que represento, a sus representantes legales, revisores fiscales, miembros de junta directiva y/o socios.  De igual manera autorizo consignar en las cuentas bancarias, registradas en este formulario, los pagos que su compañía tenga a nuestro favor y que dentro de los términos legales establecidos, se puedan almacenar y administrar los datos suministrados en este formato.</p>
      <br>
      <p>Proveedores/Clientes de acuerdo a lo establecido en la Ley 1581 de 2012 y el Decreto 1377 de 2013 desarrolla el principio constitucional que tienen todas las personas a conocer, actualizar y rectificar todo tipo de información recogida o que haya sido objeto de tratamiento de datos personales en bancos o bases de datos y en general en archivos de entidades públicas y/o privadas.  FRANCISCO A. ROCHA ALVARADO S.A.S. como institución que almacena y recolecta datos personales requiere obtener su autorización para que de manera libre, previa, expresa, voluntaria y debidamente informada, permita a todas las dependencias académicas y/o administrativas recolectar, recaudar, almacenar, usar, circular, suprimir, procesar, compilar, intercambiar, dar tratamiento, actualizar y disponer de los datos que han sido suministrados y que se han incorporado en distintas bases o bancos de datos, o en repositorios electrónicos de todo tipo con que cuenta  FRANCISCO A. ROCHA ALVARADO S.A.S.  Esta información es y será́  utilizada en el desarrollo de las funciones propias de una sociedad comercial, de forma directa o a través de terceros, además de servir para la prevención, detección, monitoreo y control del lavado de activos y la financiación del terrorismo.  Manifiesto que en el caso de recolección de mi información sensible, tengo derecho a contestar o no las preguntas que me formulen y a entregar o no los datos solicitados.  Entiendo que son datos sensibles aquellos que afectan la intimidad del titular o cuyo uso indebido puede generar discriminación.  Por lo anterior, AUTORIZO a FRANCISCO A. ROCHA ALVARADO S.A.S. en los términos dispuestos por el Articulo 10 del Decreto 1377 de 2013 queda autorizada de manera expresa e inequívoca para mantener y manejar toda su información, a no ser que Usted le manifieste lo contrario de manera directa, expresa, inequívoca y por escrito dentro de los treinta (30) días contados a partir de la recepción de la presente comunicación a la cuenta de correo electrónico dispuesta para tal efecto mediante comunicación escrita: extractosfr@franciscorocha.com. Acepto y autorizo de manera expresa e inequívoca que mis datos personales sean tratados conforme a lo previsto en el presente documento.</p>
     
    </div>
     <br>
    <br>
   
   
        <br>
        <br>
         <h2>5. DOCUMENTACION</h2>
   
      <br><br>
      <?php
        // Nombres de los campos y observaciones
        $campos = array(
            "fotocopia_cedula" => "Fotocopia de Cédula",
            "certificado_camara" => "Certificado de Cámara",
            "fotocopia_rut" => "Fotocopia de RUT",
            "certificado_existencia" => "Certificado de Existencia",
            "resolucion_facturacion" => "Resolución de Facturación",
            "certificacion_bancaria" => "Certificación Bancaria",
            "estados_financieros" => "Estados Financieros",
            "declaracion_renta" => "Declaración de Renta",
            "apoderado" => "Apoderado",
            "certificaciones" => "Certificaciones",
            "plan_contingencia" => "Plan de Contingencia",
            "resoluciones_permisos" => "Resoluciones de Permisos",
            "referencias_comerciales" => "Referencias Comerciales"
        );

        // Generar campos para adjuntar archivos PDF y campos de texto para observaciones
        foreach ($campos as $clave => $valor) {
            echo '<label for="' . $clave . '">' . $valor . ':</label><br>';
            echo '<textarea id="' . $clave . '_observaciones" name="' . $clave . '_observaciones" rows="4" cols="50"></textarea><br>';
            echo '<input type="file" id="' . $clave . '" name="' . $clave . '" accept=".pdf"><br><br>';
        }
        ?>
               
                 
                  <table>
           <thead>
    <tr>
      <th>Favor anexar los siguientes documentos </th>
      <th>Opciones</th>
      <th>Observaciones</th>
    </tr>
  </thead>
               <tbody>
                 <tr>
      <td>FOTOCOPIA DE LA CEDULA DE CIUDADANIA DEL REPRESENTANTE LEGAL</td>
     <td>
 <input type="radio" id="fotocopia_cedula" name="fotocopia_cedula" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="fotocopia_cedula" name="fotocopia_cedula" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="fotocopia_cedula" name="fotocopia_cedula" value="na">
        <label for="na5"   class="radio-label">N/A</label>  
      </td>
       

      <td><textarea id="observ_1" name="observ_1" class="form-section "></textarea></td>
    </tr>
                   <tr>
      <td>CERTIFICADO DE CAMARA Y COMERCIO VIGENTE (No mayor a 60 días)</td>
      <td>
 <input type="radio" id="certificado_camara" name="certificado_camara" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificado_camara" name="certificado_camara" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificado_camara" name="certificado_camara" value="na">
        <label for="na5"   class="radio-label">N/A</label>  
      </td>
      <td><textarea id="observ_2" name="observ_2" ></textarea></td>
    </tr>
    <tr>
      <td>FOTOCOPIA DEL RUT (ACTUALIZADO)</td>
      <td>
<input type="radio" id="fotocopia_rut" name="fotocopia_rut" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="fotocopia_rut" name="fotocopia_rut" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="fotocopia_rut" name="fotocopia_rut" value="na">
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_3" name="observ_3"></textarea></td>
    </tr>


    <tr>
      <td>CERTIFICACIÓN ACCIONARIA</td>
      <td>
<input type="radio" id="certificacion_accionaria" name="certificacion_accionaria" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificacion_accionaria" name="certificacion_accionaria" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificacion_accionaria" name="certificacion_accionaria" value="na">
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_3" name="observ_4"></textarea></td>
    </tr>

    <tr>
      <td>CERTIFICADO DE ANTECEDENTES DISCIPLINARIOS DE CONTADOR Y REVISOR FISCAL</td>
      <td>
<input type="radio" id="antecedentes_disciplinarios" name="antecedentes_disciplinarios" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="antecedentes_disciplinarios" name="antecedentes_disciplinarios" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="fantecedentes_disciplinarios" name="antecedentes_disciplinarios" value="na">
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_3" name="observ_5"></textarea></td>
    </tr>


    <tr>
      <td>SI ES ENTIDAD VIGILADA POR SFC: ORIGINAL DEL CERTIFICADO DE EXISTENCIA Y REPRESENTACIÓN LEGAL EXPEDIDO POR LA SUPERINTENDENCIA FINANCIERA DE COLOMBIA (No mayor a 90 días)</td>
      <td>
  <input type="radio" id="certificado_existencia" name="certificado_existencia" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificado_existencia" name="certificado_existencia" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificado_existencia" name="certificado_existencia" value="na">
        <label for="na5"   class="radio-label">N/A</label>       
      </td>
      <td><textarea id="observ_6" name="observ_6" ></textarea></td>
    </tr>
    <tr>
      <td>RESOLUCIÓN DE FACTURACIÓN</td>
      <td>
<input type="radio" id="resolucion_facturacion" name="resolucion_facturacion" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="resolucion_facturacion" name="resolucion_facturacion" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="resolucion_facturacion" name="resolucion_facturacion" value="na">
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_7" name="observ_7" ></textarea></td>
    </tr>
      <tr>
      <td>CERTIFICACIÓN BANCARIA EXPEDIDA POR EL BANCO PARA PAGOS POR TRANSFERENCIA. (ORIGINAL)</td>
      <td>
   
<input type="radio" id="certificacion_bancaria" name="certificacion_bancaria" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificacion_bancaria" name="certificacion_bancaria" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificacion_bancaria" name="certificacion_bancaria" value="na">
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_8" name="observ_8" ></textarea></td>
    </tr>
    <tr>
      <td>ESTADOS FINANCIEROS DEL ÚLTIMO PERIODO GRAVABLE</td>
      <td>
<input type="radio" id="estados_financieros" name="estados_financieros" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="estados_financieros" name="estados_financieros" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="estados_financieros" name="estados_financieros" value="na">
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_9" name="observ_9" ></textarea></td>
    </tr>
    <tr>
      <td>COPIA DE LA DECLARACIÓN DE RENTA DEL ÚLTIMO PERIODO GRAVABLE DISPONIBLE</td>
      <td>
<input type="radio" id="declaracion_renta" name="declaracion_renta" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="declaracion_renta" name="declaracion_renta" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="declaracion_renta" name="declaracion_renta" value="na">
        <label for="na5"   class="radio-label">N/A</label>       
      </td>
      <td><textarea id="observ_10" name="observ_10" ></textarea></td>
    </tr>
    <tr>
      <td>APODERADO: SI LA PERSONA JURÍDICA ACTÚA POR INTERMEDIO DE UN APODERADO, DEBERÁ ADJUNTAR ORIGINAL DEL PODER CON RECONOCIMIENTO DE FIRMA ANTE NOTARIO Y EN EL CASO DONDE SE PRESENTE UNO O MÁS BENEFICIARIOS, DEBEN QUEDAR REGISTRADOS EN EL PODER Y EN ESTE DOCUMENTO.</td>
      <td>
 <input type="radio" id="apoderado" name="apoderado" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="apoderado" name="apoderado" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="apoderado" name="apoderado" value="na">
        <label for="na5"   class="radio-label">N/A</label>      
      </td>
      <td><textarea id="observ_11" name="observ_11" ></textarea></td>
    </tr>
                   <tr>
      <td>PARA EMPRESAS CERTIFICADAS: FOTOCOPIA DE CERTIFICADO ISO 9001, 14001,18001, ISO 28000, BASC, OEA VIGENTES (en caso de no estar certificados en ISO28000, BASC u OEA, diligenciar formato adjunto de Acuerdo de Seguridad RILO-10 ) O CERTIFICACIONES DE PARTICIPACIPACIÓN EN EL PROGRAMA DE GESTIÓN AMBIENTAL EMPRESARIAL GAE LIDERADO POR LA SECRETARÍA DISTRITAL DE AMBIENTE O PISA LIDERADO POR LA SECRETARÍA DISTRITAL DE SALUD</td>
      <td>
 <input type="radio" id="certificaciones" name="certificaciones" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificaciones" name="certificaciones" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificaciones" name="certificaciones" value="na">
        <label for="na5"   class="radio-label">N/A</label>  
      </td>
      <td><textarea id="observ_12" name="observ_12" ></textarea></td>
    </tr>
                   <tr>
      <td>PLAN DE CONTINGENCIA DE TRANSPORTE</td>
      <td>
<input type="radio" id="plan_contingencia" name="plan_contingencia" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="plan_contingencia" name="plan_contingencia" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="plan_contingencia" name="plan_contingencia" value="na">
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_13" name="observ_13" ></textarea></td>
    </tr>
                   <tr>
      <td>RESOLUCIONES, PERMISOS, LICENCIAS, ENTRE OTROS, EMITIDOS POR LA ENTIDAD COMPETENTE, PARA REALIZACIÓN DE SU ACTIVIDAD ECONÓMICA</td>
                       <td>
<input type="radio" id="resoluciones_permisos" name="resoluciones_permisos" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="resoluciones_permisos" name="resoluciones_permisos" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="resoluciones_permisos" name="resoluciones_permisos" value="na">
        <label for="na5"   class="radio-label">N/A</label>      
      
      </td>
                       <td><textarea id="observ_14" name="observ_14" ></textarea></td>
    </tr>
                   <tr>
      <td>DOS (2) REFERENCIAS COMERCIALES </td>
      <td>
<input type="radio" id="referencias_comerciales" name="referencias_comerciales" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="referencias_comerciales" name="referencias_comerciales" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="referencias_comerciales" name="referencias_comerciales" value="na">
        <label for="na5"   class="radio-label">N/A</label>      
      </td>
      <td><textarea id="observ_15" name="observ_15" ></textarea></td>
    </tr>

    <tr>
      <td>SOPORTES GESTION DE RESIDUOS </td>
      <td>
<input type="radio" id="gestion_residuos" name="gestion_residuos" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_residuos" name="gestion_residuos" value="no">
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="gestion_residuos" name="gestion_residuos" value="na">
        <label for="na5"   class="radio-label">N/A</label>      
      </td>
      <td><textarea id="observ_15" name="observ_16" ></textarea></td>
    </tr>

   
  </tbody>
</table> 
                 </div>
       
        
        <br>
        <br>
        <div class="container01">
            <button class="btn" type="submit">Agregar</button>
            <br>
        <br>
                <a href="lista.php"  class="btn01">Atras</a>
           </div>

      
    
        </div>
          </div>
    </form>
        <br>
        <br>
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
