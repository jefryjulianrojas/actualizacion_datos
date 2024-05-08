<?php


session_start();
 
// Verificar si el usuario está autenticado
if (!isset($_SESSION["proveedor_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: inicio.php");
  exit();

}

    
    
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Actualizacion De Datos De  Proveedores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"/>

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
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
    @media (min-width: 992px){
.navbar-expand-lg {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
}
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
      width: 100%;
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
 .btn1 {
    
    padding: 10px 20px;
    background-color: #fff; /* Color de fondo */
    color: Black; /* Color del texto */
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    border: none;
    cursor: pointer;
         display: block;
    margin: 0 auto; /* Centrar horizontalmente */
  }
    
    
  /* Estilos cuando se pasa el cursor sobre el botón */
  .btn:hover {
    background-color: #A3A3A3; /* Cambio de color al pasar el cursor */
  }
    
    .form-section input[type="number"]
   {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }

    
    .form-section1 input[type="number"]
   {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
  }

    
    .banner2 {
	background:url(imagen_proveedor.jpg) no-repeat 0% 0% / 100% 100%;
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
}}

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
    
     /* Estilo para el contenedor del input */
        .input-cont {
            text-align: right; /* Alineación del contenido a la derecha */
        }
                 .styled {
    font-size: 16px;
  line-height: 1.5; /* Espacio entre líneas 1.5 veces el tamaño de la fuente */
  color: #666; /* Color de texto gris */
  margin-bottom: 20px; /* Margen inferior de 20px */
}

      
</style>
</head>
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
    <div class="banner2 text-center" data-scroll-index='0'>
  <div class="banner-overlay">
         <h1>Actualizacion De Datos De Proveedores</h1>
    </div>
    </div>
<body>

    
    
<br>
<br>
   <form action="actualizar.php" method="post" enctype="multipart/form-data">
        <?php
        $id = $_SESSION["proveedor_id"];
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "proveedores");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Obtener el número de cédula enviado por el formulario
    

// Consultar si la persona está registrada
$sql = "SELECT * FROM proveedor INNER JOIN infofiscal ON proveedor.id_proveedor = infofiscal.id_proveedor INNER JOIN infofinanciera ON proveedor.id_proveedor = infofinanciera.id_proveedor INNER JOIN sector_publico ON proveedor.id_proveedor = sector_publico.id_proveedor INNER JOIN operaciones_internacionales ON proveedor.id_proveedor = operaciones_internacionales.id_proveedor INNER JOIN identificacion_accionistas ON proveedor.id_proveedor = identificacion_accionistas.id_proveedor INNER JOIN representantes_legales ON proveedor.id_proveedor = representantes_legales.id_proveedor INNER JOIN contador_revisor ON proveedor.id_proveedor = contador_revisor.id_proveedor INNER JOIN criterio_seleccion ON proveedor.id_proveedor = criterio_seleccion.id_proveedor INNER JOIN certificacionesgen ON proveedor.id_proveedor = certificacionesgen.id_proveedor INNER JOIN documento ON proveedor.id_proveedor = documento.id_proveedor WHERE proveedor.id_proveedor = '$id'";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Mostrar los campos con los datos registrados
    $fila = $resultado->fetch_assoc();
 
    
    
    
$nombre = $fila['nombre'];
$numero_identificacion = $fila['numero_identificacion'];
$tipo_persona=$fila['tipo_persona'];
$DV= $fila['DV'];
$telefono = $fila['telefono'];
$direccion = $fila['direccion'];
$direccion_residencia = $fila['direccion_residencia'];
$ciudad = $fila['ciudad'];
$nombre_contactoProveedor = $fila['nombre_contactoProveedor'];
$cargo = $fila['cargo'];
$nombre_representanteLegal = $fila['nombre_representanteLegal'];
$actividad_economica = $fila['actividad_economica'];
$cedula_representante = $fila['cedula_representante'];
$objetivo = $fila['objetivo'];   
$tipo_empresa = $fila['tipo_empresa'];
$empresa_labora = $fila['empresa_labora'];
$contacto_empresa = $fila['contacto_empresa'];
$contacto_contable = $fila['contacto_contable'];
$cargo_contable = $fila['cargo_contable'];
$correo_contable = $fila['correo_contable'];
$contacto_comercial = $fila['contacto_comercial'];
$cargo_comercial = $fila['cargo_comercial'];
$correo_comercial = $fila['correo_comercial'];
$nombre_otro = $fila['nombre_otro'];
$cargo_otro = $fila['cargo_otro'];
$correo_otro = $fila['correo_otro'];
$producto1 = $fila['producto1'];
$marca1 = $fila['marca1'];
$producto2 = $fila['producto2'];
$marca2 = $fila['marca2'];
$producto3 = $fila['producto3'];
$marca3 = $fila['marca3'];
$t_garantia = $fila['t_garantia'];
$poliza = $fila['poliza'];
$fecha_registro = $fila['fecha_registro'];

    
    
$codigo_actividad = $fila['codigo_actividad'];
$autorretenedor = $fila['autorretenedor'];
$resolucion1 = $fila['resolucion1'];
$fecha1 = $fila['fecha1'];
$descripcionCIIU = $fila['descripcionCIIU'];
$responsable_iva  = $fila['responsable_iva'];
$gran_contribuyente  = $fila['gran_contribuyente'];
$regimen_simple  = $fila['regimen_simple'];
$resolucion2 = $fila['resolucion2'];
$fecha2 = $fila['fecha2'];
$anexar_resolucion = $fila['anexar_resolucion'];
$tarifa_correspondiente = $fila['tarifa_correspondiente'];

//informacion financiero

$titular_cuenta = $fila['titular_cuenta'];
$banco = $fila['banco'];
$codigo = $fila['codigo'];
$tipo_cuenta = $fila['tipo_cuenta'];
$numero_cuenta = $fila['numero_cuenta'];
$modalidad_pago  = $fila['modalidad_pago'];
$posee_productos= $fila['posee_productos'];
$cupo_credito = $fila['cupo_credito'];
$operaciones_moneda = $fila['operaciones_moneda'];
$operaciones_cual = $fila['operaciones_cual'];
$importacion = $fila['importacion'];
$exportacion = $fila['exportacion'];
$inversion = $fila['inversion'];
$prestamo = $fila['prestamo'];
$transferencia = $fila['transferencia'];

//sector_publico
    
    
$actividad_recursos = $fila['actividad_recursos'];
$poder_publico  = $fila['poder_publico'];
$reconocimiento_publico = $fila['reconocimiento_publico'];
$persona_expuesta = $fila['persona_expuesta'];
$vinculo_expuesta = $fila['vinculo_expuesta'];
$representante_organizacion = $fila['representante_organizacion'];
$obligaciones_tributaria = $fila['obligaciones_tributarias'];
    
    
$indique_1 = $fila['indique_1'];
$indique_2 = $fila['indique_2'];
$indique_3 = $fila['indique_3'];
$indique_4 = $fila['indique_4'];
$indique_5 = $fila['indique_5'];
$indique_6 = $fila['indique_6'];
$indique_7 = $fila['indique_7'];
    
//operaciones_internacionales
    
$tipo_producto = $fila['tipo_producto'];
$numero_producto  = $fila['numero_producto'];
$entidad = $fila['entidad'];
$monto = $fila['monto'];
$ciudad1 = $fila['ciudad1'];
$pais = $fila['pais'];
$moneda = $fila['moneda'];

$tipo_producto2 = $fila['tipo_producto2'];
$numero_producto2  = $fila['numero_producto2'];
$entidad2 = $fila['entidad2'];
$monto2 = $fila['monto2'];
$ciudad2 = $fila['ciudad2'];
$pais2 = $fila['pais2'];
$moneda2 = $fila['moneda2'];

$tipo_producto3 = $fila['tipo_producto3'];
$numero_producto3  = $fila['numero_producto3'];
$entidad3 = $fila['entidad3'];
$monto3 = $fila['monto3'];
$ciudad3 = $fila['ciudad3'];
$pais3 = $fila['pais3'];
$moneda3 = $fila['moneda3'];

$tipo_producto4 = $fila['tipo_producto4'];
$numero_producto4  = $fila['numero_producto4'];
$entidad4 = $fila['entidad4'];
$monto4 = $fila['monto4'];
$ciudad4 = $fila['ciudad4'];
$pais4 = $fila['pais4'];
$moneda4 = $fila['moneda4'];
    
//accionistas
    
    
$tipo_identificacion1 = $fila['tipo_identificacion1'];
$identificacion_aso1  = $fila['identificacion_aso1'];
$nombre_1 = $fila['nombre_1'];
$porcentaje_participacion1 = $fila['porcentaje_participacion1'];
$manejo_recursos1 = $fila['manejo_recursos1'];
$reconocimiento_publico1 = $fila['reconocimiento_publico1'];
$persona_expuesta1 = $fila['persona_expuesta1'];

$tipo_identificacion2 = $fila['tipo_identificacion2'];
$identificacion_aso2  = $fila['identificacion_aso2'];
$nombre_2 = $fila['nombre_2'];
$porcentaje_participacion2 = $fila['porcentaje_participacion2'];
$manejo_recursos2 = $fila['manejo_recursos2'];
$reconocimiento_publico2 = $fila['reconocimiento_publico2'];
$persona_expuesta2 = $fila['persona_expuesta2'];

$tipo_identificacion3 = $fila['tipo_identificacion3'];
$identificacion_aso3  = $fila['identificacion_aso3'];
$nombre_3 = $fila['nombre_3'];
$porcentaje_participacion3 = $fila['porcentaje_participacion3'];
$manejo_recursos3 = $fila['manejo_recursos3'];
$reconocimiento_publico3 = $fila['reconocimiento_publico3'];
$persona_expuesta3 = $fila['persona_expuesta3'];

$tipo_identificacion4 = $fila['tipo_identificacion4'];
$identificacion_aso4  = $fila['identificacion_aso4'];
$nombre_4 = $fila['nombre_4'];
$porcentaje_participacion4 = $fila['porcentaje_participacion4'];
$manejo_recursos4 = $fila['manejo_recursos4'];
$reconocimiento_publico4 = $fila['reconocimiento_publico4'];
$persona_expuesta4 = $fila['persona_expuesta4'];


$tipo_identificacion5 = $fila['tipo_identificacion5'];
$identificacion_aso5  = $fila['identificacion_aso5'];
$nombre_5 = $fila['nombre_5'];
$porcentaje_participacion5 = $fila['porcentaje_participacion5'];
$manejo_recursos5 = $fila['manejo_recursos5'];
$reconocimiento_publico5 = $fila['reconocimiento_publico5'];
$persona_expuesta5 = $fila['persona_expuesta5'];
    
    
    
//representantes_legales

$tipo_identicacion1A = $fila['tipo_identicacion1A'];
$numero_identificacion1A  = $fila['numero_identificacion1A'];
$nombre_1A = $fila['nombre_1A'];
$manejo_recursos1A = $fila['manejo_recursos1A'];
$reconocimiento_publico1A = $fila['reconocimiento_publico1A'];
$persona_expuesta1A = $fila['persona_expuesta1A'];

$tipo_identicacion2A = $fila['tipo_identicacion2A'];
$numero_identificacion2A  = $fila['numero_identificacion2A'];
$nombre_2A = $fila['nombre_2A'];
$manejo_recursos2A = $fila['manejo_recursos2A'];
$reconocimiento_publico2A = $fila['reconocimiento_publico2A'];
$persona_expuesta2A = $fila['persona_expuesta2A'];

$tipo_identicacion3A = $fila['tipo_identicacion3A'];
$numero_identificacion3A  = $fila['numero_identificacion3A'];
$nombre_3A = $fila['nombre_3A'];
$manejo_recursos3A = $fila['manejo_recursos3A'];
$reconocimiento_publico3A = $fila['reconocimiento_publico3A'];
$persona_expuesta3A = $fila['persona_expuesta3A'];

$tipo_identicacion4A = $fila['tipo_identicacion4A'];
$numero_identificacion4A  = $fila['numero_identificacion4A'];
$nombre_4A = $fila['nombre_4A'];
$manejo_recursos4A = $fila['manejo_recursos4A'];
$reconocimiento_publico4A = $fila['reconocimiento_publico4A'];
$persona_expuesta4A = $fila['persona_expuesta4A'];

$tipo_identicacion5A = $fila['tipo_identicacion5A'];
$numero_identificacion5A  = $fila['numero_identificacion5A'];
$nombre_5A = $fila['nombre_5A'];
$manejo_recursos5A = $fila['manejo_recursos5A'];
$reconocimiento_publico5A = $fila['reconocimiento_publico5A'];
$persona_expuesta5A = $fila['persona_expuesta5A'];
    
  
    
//contador_revisor
    
$tipo_identicacion1B = $fila['tipo_identicacion1B'];
$numero_identificacion1B  = $fila['numero_identificacion1B'];
$nombre_1B = $fila['nombre_1B'];
$manejo_recursos1B = $fila['manejo_recursos1B'];
$reconocimiento_publico1B = $fila['reconocimiento_publico1B'];
$persona_expuesta1B = $fila['persona_expuesta1B'];
    
$tipo_identicacion2B = $fila['tipo_identicacion2B'];
$numero_identificacion2B = $fila['numero_identificacion2B'];
$nombre_2B= $fila['nombre_2B'];
$manejo_recursos2B = $fila['manejo_recursos2B'];
$reconocimiento_publico2B = $fila['reconocimiento_publico2B'];
$persona_expuesta2B  = $fila['persona_expuesta2B'];
    
$tipo_identicacion3B = $fila['tipo_identicacion3B'];
$numero_identificacion3B = $fila['numero_identificacion3B'];
$nombre_3B = $fila['nombre_3B'];
$manejo_recursos3B = $fila['manejo_recursos3B'];
$reconocimiento_publico3B = $fila['reconocimiento_publico3B'];
$persona_expuesta3B = $fila['persona_expuesta3B'];
    
$tipo_identicacion4B = $fila['tipo_identicacion4B'];
$numero_identificacion4B = $fila['numero_identificacion4B'];
$nombre_4B = $fila['nombre_4B'];
$manejo_recursos4B = $fila['manejo_recursos4B'];
$reconocimiento_publico4B = $fila['reconocimiento_publico4B'];
$persona_expuesta4B = $fila['persona_expuesta4B'];
    
$tipo_identicacion5B = $fila['tipo_identicacion5B'];
$numero_identificacion5B = $fila['numero_identificacion5B'];
$nombre_5B = $fila['nombre_5B'];
$manejo_recursos5B = $fila['manejo_recursos5B'];
$reconocimiento_publico5B = $fila['reconocimiento_publico5B'];
$persona_expuesta5B = $fila['persona_expuesta5B'];

    
    
    
//criterois de seleccion
$tiempo_entrega = $fila['tiempo_entrega'];
$ofrece_credito = $fila['ofrece_credito'];
$otro_credito = $fila['otro_credito'];
$suministra_muestra = $fila['suministra_muestra'];
$garantia_soporte = $fila['garantia_soporte'];
$maneja_sostenibles = $fila['maneja_sostenibles'];
$gestiona_residuos = $fila['gestiona_residuos'];
    
    
    

//certificaciones

$certificaciones_acreditadas = $fila['certificaciones_acreditadas'];
$gestion_calidad  = $fila['gestion_calidad'];
$observaciones1 = $fila['observaciones1'];
$gestion_ambiente = $fila['gestion_ambiente'];
$observaciones2 = $fila['observaciones2'];
$gestion_saludSeguridad = $fila['gestion_saludSeguridad'];
$observaciones3 = $fila['observaciones3'];
$gestion_seguridad = $fila['gestion_seguridad'];
$observaciones4 = $fila['observaciones4'];
$wrap = $fila['wrap'];
$observaciones5 = $fila['observaciones5'];

    
    

$fotocopia_cedula = $fila['fotocopia_cedula'];
$observ_1  = $fila['observ_1'];
$certificado_camara = $fila['certificado_camara'];
$observ_2 = $fila['observ_2'];
$fotocopia_rut = $fila['fotocopia_rut'];
$observ_3 = $fila['observ_3'];
$certificado_existencia = $fila['certificado_existencia'];
$observ_4 = $fila['observ_4'];
$certificacion_accionaria= $fila['certificacion_accionaria'];
$observ_5 = $fila['observ_5'];
$antecedentes_disciplinarios = $fila['antecedentes_disciplinarios'];
$observ_6 = $fila['observ_6'];
$resolucion_facturacion = $fila['resolucion_facturacion'];
$observ_7 = $fila['observ_7'];
$certificacion_bancaria = $fila['certificacion_bancaria'];
$observ_8 = $fila['observ_8'];
$estados_financieros  = $fila['estados_financieros'];
$observ_9 = $fila['observ_9'];
$declaracion_renta = $fila['declaracion_renta'];
$observ_10 = $fila['observ_10'];
$apoderado = $fila['apoderado'];
$observ_11 = $fila['observ_11'];
$certificaciones = $fila['certificaciones'];
$observ_12 = $fila['observ_12'];
$plan_contingencia = $fila['plan_contingencia'];
$observ_13 = $fila['observ_13'];
$resoluciones_permisos = $fila['resoluciones_permisos'];
$observ_14 = $fila['observ_14'];
$referencias_comerciales = $fila['referencias_comerciales'];
$observ_15 = $fila['observ_15'];
$gestion_residuos = $fila['gestion_residuos'];
$observ_16 = $fila['observ_16'];



        ?>
        <div class="div-centrado">
             <div class="div-centrado">
<div class="form-container">
  <div class="left-section">
    <div class="form-section">
       
        
      <h2>1. DATOS DEL PROVEEDOR/CLIENTE</h2>
        <label for="tipo_persona">Tipo de persona:</label>
<select id="tipo_persona" name="tipo_persona">
    <option value="juridica" <?php if ($tipo_persona == 'juridica') echo 'selected'; ?>>Persona jurídica</option>
    <option value="natural" <?php if ($tipo_persona == 'natural') echo 'selected'; ?>>Persona natural</option>
</select>
      <div style="display:flex;">
        <div style="flex:1;">
          <label for="nombre">Nombre Completo o Razon Social:</label>
          <input type="text" id="nombre" name="nombre"  value="<?php  echo $fila['nombre']?>" >
          <label for="numero_identificacion">NIT o Numero de Cedula:</label>
                <input type="number" id="numero_identificacion" name="numero_identificacion" value="<?php  echo $fila['numero_identificacion']?>">
            <label for="numero_identificacion">DV(si aplica):</label>
            <input type="number" id="DV" style=" width: 20%;" value="<?php  echo $fila['DV']?>"placeholder="DV" name="DV">
            

          
      <label for="nombre_representanteLegal">Nombre del Representante Legal:</label>
          <input type="text" id="nombre_representanteLegal" name="nombre_representanteLegal" value="<?php  echo $fila['nombre_representanteLegal']?>">
            
            <label for="nombre_representanteLegal">Numero de Documento del Representante:</label>
          <input type="text" id="cedula_representante" name="cedula_representante" value="<?php  echo $fila['cedula_representante']?>">

          
          
        </div>
        <div style="flex:1; margin-left: 30px;">
            <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" name="telefono" value="<?php  echo $fila['telefono']?>">
          <label for="direccion">Dirección:</label>
          <input type="text" id="direccion" name="direccion" value="<?php  echo $fila['direccion']?>">
            <label for="cargo">Cargo del Representante Legal:</label>
          <input type="text" id="cargo" name="cargo" value="<?php  echo $fila['cargo']?>">

          <label for="cargo">Empresa En La Que Labora( si es persona natural):</label>
          <input type="text" id="empresa_labora" name="empresa_labora" value="<?php  echo $fila['empresa_labora']?>">

          
          <label for="nombre_contactoProveedor">Nombre de Contacto del Proveedor:</label>
          <input type="text" id="nombre_contactoProveedor" name="nombre_contactoProveedor" value="<?php  echo $fila['nombre_contactoProveedor']?>">

            
            
          
        </div>
          <div style="flex:1; margin-left: 30px;">
               <label for="ciudad">Ciudad:</label>
          <input type="text" id="ciudad" name="ciudad" value="<?php  echo $fila['ciudad']?>">
          <label for="actividad_economica">Actividad Económica:</label>
          <input type="text" id="actividad_economica" name="actividad_economica" value="<?php  echo $fila['actividad_economica']?>">
          <label for="nombre_representanteLegal">Tipo De Empresa:</label>
         
          <select id="autorretenedor" name="tipo_empresa">
            <option value="publica" <?php if ($tipo_empresa == 'publica') echo 'selected'; ?>>Publica</option>
            <option value="privada" <?php if ($tipo_empresa == 'privada') echo 'selected'; ?>>Privada</option>
            <option value="mixta" <?php if ($tipo_empresa == 'mixta') echo 'selected'; ?>>Mixta</option>
        </select>
              

          <label>Contacto Empresa:</label>
          <input type="text" id="contacto_empresa" name="contacto_empresa" value="<?php  echo $fila['contacto_empresa']?>">
              
               <label>Direccion Oficina/Residencia:</label>
          <input type="text" id="direccion_residencia" name="direccion_residencia" value="<?php  echo $fila['direccion_residencia']?>">
          </div>    
      </div>
        <br> <?php  
              date_default_timezone_set("America/Bogota");
                setlocale(LC_TIME, "spanish");

              
                ?>         
            <input type="hidden" id="fecha_registro" name="fecha_registro"  value="<?php echo  strftime("A los %d dias del mes de  %B de %Y");?>"><br><br>

       
        
      <label for="objetivo">Objetivo:</label>
        
           <textarea id="objetivo" name="objetivo"><?php echo $objetivo; ?></textarea>
    </div>
  </div>
    </div>
  

   <br>
<div class="form-container">
  <div class="left-section">
    <div class="form-section">
      <h3>CONTACTOS</h3>
      <div style="display:flex;">
        <div style="flex:1;">
          <label for="contacto_contable">Contacto Contable:</label>
            <input type="text" id="contacto_contable" name="contacto_contable" value="<?php echo $contacto_contable ?>">
           <label for="contacto_comercial">Contacto Comercial:</label>
            <input type="text" id="contacto_comercial" name="contacto_comercial"  value="<?php echo $contacto_comercial ?>">
            <label for="nombre_otro">Otro:</label>
            <input type="text" id="nombre_otro" name="nombre_otro"  value="<?php echo $nombre_otro ?>">

      

          
          
        </div>
        <div style="flex:1; margin-left: 30px;">
        <label for="cargo_contable">Cargo :</label>
            <input type="text" id="cargo_contable" name="cargo_contable"  value="<?php echo $cargo_contable ?>">
          <label for="cargo_comercial">Cargo :</label>
            <input type="text" id="cargo_comercial" name="cargo_comercial"  value="<?php echo $cargo_comercial ?>">
          <label for="cargo_otro">Cargo :</label>
            <input type="text" id="cargo_otro" name="cargo_otro"  value="<?php echo $cargo_otro ?>"> 
            
            
          
        </div>
          <div style="flex:1; margin-left: 30px;">
           <label for="correo_contable">Correo :</label>
            <input type="text" id="correo_contable" name="correo_contable"  value="<?php echo $correo_contable ?>">
          <label for="correo_comercial">Correo :</label>
            <input type="text" id="correo_comercial" name="correo_comercial"  value="<?php echo $correo_comercial ?>">
          <label for="correo_otro">Correo :</label>
            <input type="text" id="correo_otro" name="correo_otro"  value="<?php echo $correo_otro ?>">
          </div>    
      </div>
    </div>
  </div>
    </div>
    
                 
                 
                  <div class="form-container">
  <div class="left-section">
    <div class="form-section">
      <div style="display:flex;">
        <div style="flex:1;">
         <h4>PRODUCTOS / SERVICIOS OFRECIDOS/REQUERIDOS</h4>
         
          </div>
          <div style="flex:1; margin-left: 30px;">
             <h4>MARCA</h4>
     
          </div>    
      </div>
    </div>
  </div>
    </div>
                 
                 
                 
                 
    
                 
                 
   <div class="form-container">
  <div class="left-section">
    <div class="form-section">
      <div style="display:flex;">
        <div style="flex:1;">
       
            
            <input type="text" id="producto1" name="producto1"  value="<?php echo $producto1 ?>"><br><br>
           
            <input type="text" id="producto2" name="producto2"  value="<?php echo $producto2 ?>"><br><br>
           
            <input type="text" id="producto3" name="producto3"  value="<?php echo $producto3 ?>"><br><br>

    <br> <hr><br>   

           <label for="t_garantia">T Garantia:</label><br>
            <input type="text" id="t_garantia" name="t_garantia"  value="<?php echo $t_garantia ?>"><br>
          
        </div>
        
          <div style="flex:1; margin-left: 30px;">
             
            <input type="text" id="marca1" name="marca1"  value="<?php echo $marca1 ?>"><br><br>
         
            <input type="text" id="marca2" name="marca2"  value="<?php echo $marca2 ?>"><br><br>
        
            <input type="text" id="marca3" name="marca3"  value="<?php echo $marca3 ?>"><br><br> 
              <br> <hr><br>
               <label for="poliza">Póliza:</label><br>
            <input type="text" id="poliza" name="poliza"  value="<?php echo $poliza ?>"><br>
            <?php  
              date_default_timezone_set("America/Bogota");
                setlocale(LC_TIME, "spanish");

              
                ?>         
            <input type="hidden" id="fecha_registro" name="fecha_registro"  value="<?php echo  strftime(" A los %d dias del mes de  %B de %Y"); ?>"><br><br>
 
          </div>    
      </div>
    </div>
  </div>
    </div>
                 <div class="form-container">
  <div class="left-section">
    <div class="form-section">
     <h2>ACTIVIDADES EN EL SECTOR PUBLICO</h2>
     
 
     
        <br>
        <br>
        
        <table>
  <thead>
    <tr>
      <th>Descripcion</th>
      <th>Opciones</th>
      <th>Observaciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
            

       
      <td>¿Por su cargo o actividad maneja recursos públicos?</td>
      <td>
        <input type="radio" id="actividad_recursos" name="actividad_recursos" value="si"  <?php if ($actividad_recursos == 'si') echo 'checked'; ?>>
        <label for="si3"   class="radio-label">Sí</label>
        <input type="radio" id="actividad_recursos" name="actividad_recursos" value="no"  <?php if ($actividad_recursos == 'no') echo 'checked'; ?>>
        <label for="no3"   class="radio-label">No</label>   
      </td>
      <td><textarea id="indique_1" name="indique_1"><?php echo $indique_1;?></textarea></td>
    </tr>
    <tr>
      <td>¿Por su actividad u oficio goza usted de reconocimiento público general?</td>
      <td><input type="radio" id="reconocimiento_publico" name="reconocimiento_publico" value="si"<?php if ($reconocimiento_publico == 'si') echo 'checked';?>>
        <label for="si3"   class="radio-label">Sí</label>
        <input type="radio" id="reconocimiento_publico" name="reconocimiento_publico" value="no"<?php if ($reconocimiento_publico == 'no') echo 'checked';?>>
        <label for="no3"   class="radio-label">No</label>
          
        
      </td>
      <td><textarea id="indique_2" name="indique_2"><?php echo $indique_2;?></textarea></td>
    </tr>
    <tr>
      <td>¿Tiene usted la condición de Persona Expuesta Políticamente? (D.1674/16)</td>
      <td>
                  <input type="radio" id="persona_expuesta" name="persona_expuesta" value="si"<?php if ($persona_expuesta == 'si') echo 'checked';?>>
        <label for="si4"   class="radio-label">Sí</label>
        <input type="radio" id="persona_expuesta" name="persona_expuesta" value="no"<?php if ($persona_expuesta == 'no') echo 'checked';?>>
        <label for="no4"   class="radio-label">No</label>
        
      </td>
      <td><textarea id="indique_3" name="indique_3"><?php echo $indique_3;?></textarea></td>
    </tr>
    <tr>
      <td>¿Tiene algún vínculo con una Persona considerada Públicamente Expuesta?</td>
      <td>
          
          <input type="radio" id="vinculo_expuesta" name="vinculo_expuesta" value="si" <?php if ($vinculo_expuesta == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="vinculo_expuesta" name="vinculo_expuesta" value="no" <?php if ($vinculo_expuesta == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
          
       
      </td>
      <td><textarea id="indique_4" name="indique_4"><?php echo $indique_4;?></textarea></td>
    </tr>
    <tr>
      <td>¿Es usted Representante Legal de una Organización Internacional? </td>
      <td>
       <input type="radio" id="representante_organizacion" name="representante_organizacion" value="si"<?php if ($representante_organizacion == 'si') echo 'checked';?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="representante_organizacion" name="representante_organizacion" value="no"<?php if ($representante_organizacion == 'no') echo 'checked';?>>
        <label for="no5"   class="radio-label">No</label>
      </td>
      <td><textarea id="indique_5" name="indique_5"><?php echo $indique_5;?></textarea></td>
    </tr>
       <tr>
      <td>¿Está usted sujeto a Obligaciones Tributarias en otro país o Países? </td>
      <td>
        <input type="radio" id="obligaciones_tributarias" name="obligaciones_tributarias" value="si"<?php if ($obligaciones_tributaria == 'si') echo 'checked';?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="obligaciones_tributarias" name="obligaciones_tributarias" value="no"<?php if ($obligaciones_tributaria == 'no') echo 'checked';?>>
        <label for="no5"   class="radio-label">No</label>
        
      </td>
      <td><textarea id="indique_6" name="indique_6"><?php echo $indique_6;?></textarea></td>
    </tr>
       <tr>
      <td>¿Por su cargo o actividad, ejerce algún grado de poder público?</td>
      <td>
        <input type="radio" id="poder_publico" name="poder_publico" value="si"<?php if ($poder_publico == 'si') echo 'checked';?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="poder_publico" name="poder_publico" value="no"<?php if ($poder_publico == 'no') echo 'checked';?>>
        <label for="no5"   class="radio-label">No</label>
        
      </td>
      <td><textarea id="indique_7" name="indique_7"><?php echo $indique_7;?></textarea></td>
    </tr>
  </tbody>
</table>
      <br>
      <br>
      </div>
  </div>
    </div>
                 
  
<div class="form-container">
  <div class="left-section">
    <div class="form-section1">
        <h2>2. INFORMACION FISCAL</h2>
      <div style="display:flex;">
        <div style="flex:1;">
         <label for="codigo_actividad">Código Actividad Comercial CIIU:</label>
  <input type="text" id="codigo_actividad" name="codigo_actividad" value="<?php echo $codigo_actividad?>"><br>
            
           <label for="autorretenedor">Autorretenedor:</label><br>
        <select id="autorretenedor" name="autorretenedor">
            <option value="" <?php if ($autorretenedor == '') echo 'selected'; ?>>Seleccione</option>
            <option value="si" <?php if ($autorretenedor == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($autorretenedor == 'no') echo 'selected'; ?>>no</option>
        </select>
          <br>
          
            <label for="resolucion">No. Resolucion:</label>
                <input type="text" id="text" name="resolucion1" placeholder="N° Resolucion"  value="<?php echo $resolucion1;?>"><br>
            
             <label for="autorretenedor">Fecha:</label>
          <input type="date"  name="fecha1" placeholder="fecha"  value="<?php echo $fecha1;?>"><br>
            
             <label for="anexar_resolucion">Anexar Resolución(es):</label>
          <textarea id="anexar_resolucion" name="anexar_resolucion"><?php echo $anexar_resolucion;?></textarea><br>
          <br>


          
        </div>
        
          <div style="flex:1; margin-left: 30px;">
            <label for="descripcionCIIU">Descripción CIIU:</label>
  <input type="text" id="descripcionCIIU" name="descripcionCIIU" value="<?php echo $descripcionCIIU ?>"><br>

          
          
           <label for="responsable_iva">Responsable de IVA:</label>
 
        <select id="responsable_iva" name="responsable_iva">
            <option value="" <?php if ($responsable_iva == '') echo 'selected'; ?>>Seleccione</option>
            <option value="si" <?php if ($responsable_iva == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($responsable_iva == 'no') echo 'selected'; ?>>no</option>
        </select>
              
              <br>
          
            <label for="gran_contribuyente">Gran Contribuyente:</label><br>
         
              
        <select id="gran_contribuyente" name="gran_contribuyente">
            <option value="" <?php if ($gran_contribuyente == '') echo 'selected'; ?>>Seleccione</option>
            <option value="si" <?php if ($gran_contribuyente == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($gran_contribuyente == 'no') echo 'selected'; ?>>no</option>
        </select>
              
              
              
          <br>
          <br>
          <label for="regimen_simple">Régimen Simple:</label><br>
         
              
              <select id="regimen_simple" name="regimen_simple">
            <option value="" <?php if ($regimen_simple == '') echo 'selected'; ?>>Seleccione</option>
            <option value="si" <?php if ($regimen_simple == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($regimen_simple == 'no') echo 'selected'; ?>>no</option>
        </select>
        
              
              
          <br>
          
       
                    <label for="autorretenedor">No. Resolucion:</label>
  <input type="text" id="text" name="resolucion2" placeholder="N° Resolucion"  value="<?php echo $resolucion2; ?>"><br>
          
                    <label for="autorretenedor">Fecha:</label>
          <input type="date"  name="fecha2" placeholder="fecha" value="<?php echo $fecha2; ?>"><br>
 <br>   
 
          </div>    
      </div>
    </div>
  </div>
    </div>
       
        <br>
    <br>
    
    
      <label for="tarifa_correspondiente">SI ES PROVEEDOR Y/O ACREDEDOR DE BOGOTA, SELECCIONE LA TARIFA CORRESPONDIENTE A LAS ACTIVIDADES REGISTRADAS EN INDUSTRIA Y COMERCIO, DE LO CONTRARIO SELECCIONE N/A::</label><br><br>
          <div class="radio-buttons" name="tarifa_correspondiente" id="tarifa_correspondiente">
                        <input type="radio" id="tarifa_100" name="tarifa_correspondiente" value="4,14 POR MIL"<?php if ($tarifa_correspondiente == '4,14 POR MIL') echo 'checked'; ?>>
                        <label  class="radio-label">4,14 POR MIL</label>
                        
                        <input type="radio" id="tarifa_200" name="tarifa_correspondiente" value="6,9 POR MIL"<?php if ($tarifa_correspondiente == '6,9 POR MIL') echo 'checked'; ?>>
                        <label   class="radio-label">6,9 POR MIL </label>
                      
                        <input type="radio" id="tarifa_500" name="tarifa_correspondiente" value="9,66 POR MIL"<?php if ($tarifa_correspondiente == '9,66 POR MIL') echo 'checked'; ?>>
                        <label   class="radio-label">9,66 POR MIL </label>
                      
                        <input type="radio" id="tarifa_200" name="tarifa_correspondiente" value="11,04 POR MIL"<?php if ($tarifa_correspondiente == '11,04 POR MIL') echo 'checked'; ?>>
                        <label  class="radio-label">11,04 POR MIL </label>
                        
                        <input type="radio" id="tarifa_500" name="tarifa_correspondiente" value="13,8 POR MIL"<?php if ($tarifa_correspondiente == '13,8 POR MIL') echo 'checked'; ?>>
                        <label  class="radio-label">13,8 POR MIL  </label>
                        
                        <input type="radio" id="tarifa_500" name="tarifa_correspondiente" value="N/A"<?php if ($tarifa_correspondiente == 'N/A') echo 'checked';?>>
                        <label  class="radio-label">N/A  </label>
                        <br><br>
          </div>
                                <script>
function mostrarInput() {
    var select = document.getElementById("posee_productos");
    var inputTexto = document.getElementById("inputTexto");
    if (select.value === "si") {
        inputTexto.style.display = "block";
    } else {
        inputTexto.style.display = "none";
    }
}
                     
                     function cambiarValor(checkbox) {
    if (checkbox.checked) {
        checkbox.value = "si";
    } else {
        checkbox.value = "no";
    }
}
</script>

                 
                              <script>
function mostrarInput1() {
    var select = document.getElementById("operaciones_moneda");
    var inputTexto = document.getElementById("inputTexto1");
    if (select.value === "si") {
        inputTexto.style.display = "block";
    } else {
        inputTexto.style.display = "none";
    }
}
                     
                     function cambiarValor(checkbox) {
    if (checkbox.checked) {
        checkbox.value = "si";
    } else {
        checkbox.value = "no";
    }
}
</script>
                 <div class="form-container">
  <div class="left-section">
    <div class="form-section1">
        <h2> ACTIVIDAD EN OPERACIONES INTERNACIONALES</h2>
      <div style="display:flex;">
        <div style="flex:1;">
 <br>
  <label for="opciones">posee Productos Financieros En El Exterior?</label>
    <select id="posee_productos" name="posee_productos" onchange="mostrarInput()">
        <option value="" >Seleccione</option>
        <option value="si"<?php if ($posee_productos == 'si') echo 'selected';?>>Si</option>
        <option value="no"<?php if ($posee_productos == 'no') echo 'selected';?>>No</option>
    </select><br>
             <div id="inputTexto" style="display: none;">
    <label for="texto">cual ?</label>
    <input type="text" id="operaciones_cual" name="operaciones_cual" value="<?php echo $operaciones_cual;?>">
  </div>
</div>
        
          <div style="flex:1; margin-left: 30px;">
              <br>
             <label for="opciones">Realiza Operaciones En Moneda Extranjera?</label>
  <select id="operaciones_moneda" name="operaciones_moneda" onchange="mostrarInput1()">
    <option value="" >Seleccione</option>
    <option value="no"<?php if ($operaciones_moneda == 'no') echo 'selected';?>>No</option>
    <option value="si"<?php if ($operaciones_moneda == 'si') echo 'selected';?>>Si</option>
  </select><br>
            
<div id="inputTexto1" style="display: none;">            
  <label for="titular_cuenta">Seleccione:</label>
    <br>
    <br>
    <label>
    <input type="checkbox" name="importacion" value="no"<?php if ($importacion == "si") echo "checked";?>onchange="cambiarValor(this)">
    IMPORTACIONES
  </label><br>
  <label>
    <input type="checkbox" name="exportacion" value="no"<?php if ($exportacion == "si") echo "checked";?>onchange="cambiarValor(this)">
   EXPORTACIONES
  </label><br>
  <label>
    <input type="checkbox" name="inversion" value="no"<?php if ($inversion == "si") echo "checked";?>onchange="cambiarValor(this)">
    INVERSIONES
  </label><br>
  <label>
    <input type="checkbox" name="prestamo" value="no"<?php if ($prestamo == "si") echo "checked";?>onchange="cambiarValor(this)">
    PRESTAMOS
  </label><br>
  <label>
    <input type="checkbox" name="transferencia" value="no"<?php if ($transferencia == "si") echo "checked";?>onchange="cambiarValor(this)">
    TRANSFERENCIAS
  </label><br>
              </div>
          </div>    
      </div>
    </div>
  </div>
    </div>
                
                 
                 <div class="form-container">
  <div class="left-section">
    <div class="form-section">
    
     
 
     
        <br>
        <br>
        
        <table>
  <thead>
    <tr>
      <th>Tipo de Producto</th>
      <th>Identificación o Número de Producto</th>
      <th>Entidad</th>
      <th>Monto</th>
      <th>Ciudad</th>
      <th>Pais</th>
      <th>Moneda</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" name="tipo_producto" value="<?php echo $tipo_producto?>"></td>
      <td><input type="text" name="numero_producto" value="<?php echo $numero_producto?>"></td>
      <td><input type="text" name="entidad" value="<?php echo $entidad ?>"></td>
      <td><input type="text" name="monto" value="<?php echo $monto ?>"></td>
      <td><input type="text" name="ciudad1" value="<?php echo $ciudad1 ?>"></td>
      <td><input type="text" name="pais" value="<?php echo $pais ?>"></td>
      <td><input type="text" name="moneda" value="<?php echo $moneda ?>"></td>
        
        
    </tr>
      <tr>
        
       
      <td><input type="text" name="tipo_producto2" value="<?php echo $tipo_producto2 ?>"  ></td>
      <td><input type="text" name="numero_producto2" value="<?php echo $numero_producto2 ?>"  ></td>
      <td><input type="text" name="entidad2" value="<?php echo $entidad2 ?>"  ></td>
      <td><input type="text" name="monto2" value="<?php echo $monto2?>"  ></td>
      <td><input type="text" name="ciudad2" value="<?php echo $ciudad2 ?>"  ></td>
      <td><input type="text" name="pais2" value="<?php echo $pais2 ?>"  ></td>
      <td><input type="text" name="moneda2" value="<?php echo $moneda2 ?>"  ></td>
        
        
    </tr>  <tr>
        
       
      <td><input type="text" name="tipo_producto3" value="<?php echo $tipo_producto3 ?>" ></td>
      <td><input type="text" name="numero_producto3" value="<?php echo $numero_producto3 ?>" ></td>
      <td><input type="text" name="entidad3" value="<?php echo $entidad3 ?>" ></td>
      <td><input type="text" name="monto3" value="<?php echo $monto3 ?>" ></td>
      <td><input type="text" name="ciudad3" value="<?php echo $ciudad3 ?>" ></td>
      <td><input type="text" name="pais3" value="<?php echo $pais3 ?>" ></td>
      <td><input type="text" name="moneda3" value="<?php echo $moneda3 ?>" ></td>
        
        
    </tr>  <tr>
        
       
      <td><input type="text" name="tipo_producto4" value="<?php echo $tipo_producto4 ?>"></td>
      <td><input type="text" name="numero_producto4" value="<?php echo $numero_producto4 ?>"></td>
      <td><input type="text" name="entidad4" value="<?php echo $entidad4 ?>"></td>
      <td><input type="text" name="monto4" value="<?php echo $monto4 ?>"></td>
      <td><input type="text" name="ciudad4" value="<?php echo $ciudad4 ?>"></td>
      <td><input type="text" name="pais4" value="<?php echo $pais4 ?>"></td>
      <td><input type="text" name="moneda4" value="<?php echo $moneda4 ?>"></td>
        
        
    </tr>  
      
  </tbody>
</table>
    
      <br>
      </div>
  </div>
    </div>
                  
                 
                   <hr>
                 
                 
                             <div class="form-container">
  <div class="left-section">
    <div class="form-section">
     <h2>IDENTIFICACION DE LOS ACCIONISTAS O ASOCIADOS</h2>
     
     
        <br>
        <br>
        
        <table>
  <thead>
    <tr>
      <th>Tipo Identificación</th>
      <th>Numero identificación</th>
      <th>Razón social o Nombres Completos</th>
      <th>% Participación</th>
      <th>Maneja Recursos públicos?</th>
      <th>Goza de reconocimiento público?(SI O NO)</th>
      <th>Tiene algún vínculo con una persona Públicamente Expuesta? (SI O NO DIGA CUAL)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
           

        
        <td>
        <select id="tipo_identificacion1" name="tipo_identificacion1">
            <option value="" <?php if ($tipo_identificacion1 == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identificacion1 == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identificacion1 == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identificacion1 == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identificacion1 == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identificacion1 == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
        

      <td><input type="text" name="identificacion_aso1" value="<?php echo $identificacion_aso1;  ?>"></td>
      <td><input type="text" name="nombre_1" value="<?php echo $nombre_1; ?>"></td>
      <td><input type="text" name="porcentaje_participacion1" value="<?php echo $porcentaje_participacion1; ?>"></td>   
      <td>   <select id="manejo_recursos1" name="manejo_recursos1">
          <option value="" <?php if ($manejo_recursos1 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos1 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos1 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>   
      <td>   <select id="reconocimiento_publico1" name="reconocimiento_publico1">
          <option value="" <?php if ($reconocimiento_publico1 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico1 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico1 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
  <td><input type="text" name="persona_expuesta1" value="<?php echo $persona_expuesta1; ?>"></td>
</tr>
      <tr>
        
       
       <td>
        <select id="tipo_identificacion2" name="tipo_identificacion2">
            <option value="" <?php if ($tipo_identificacion2 == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identificacion2 == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identificacion2 == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identificacion2 == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identificacion2 == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identificacion2 == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="identificacion_aso2" value="<?php echo $identificacion_aso2  ; ?>"  ></td>
      <td><input type="text" name="nombre_2" value="<?php echo $nombre_2; ?>"  ></td>
      <td><input type="text" name="porcentaje_participacion2" value="<?php echo $porcentaje_participacion2;?>"  ></td>
       <td>   <select id="manejo_recursos2" name="manejo_recursos2">
            <option value="" <?php if ($manejo_recursos2 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos2 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos2 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          
      <td>   <select id="reconocimiento_publico2" name="reconocimiento_publico2">
          <option value="" <?php if ($reconocimiento_publico2 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico2 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico2 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
        
      <td><input type="text" name="persona_expuesta2" value="<?php echo $persona_expuesta2 ?>"  ></td>
        
        
    </tr>  <tr>
        
       
       <td>
        <select id="tipo_identificacion3" name="tipo_identificacion3">
            <option value="" <?php if ($tipo_identificacion3 == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identificacion3 == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identificacion3 == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identificacion3 == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identificacion3 == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identificacion3 == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="identificacion_aso3" value="<?php echo $identificacion_aso3 ?>" ></td>
      <td><input type="text" name="nombre_3" value="<?php echo $nombre_3 ?>" ></td>
      <td><input type="text" name="porcentaje_participacion3" value="<?php echo $porcentaje_participacion3 ?>" ></td>
       <td>   <select id="manejo_recursos3" name="manejo_recursos3">
            <option value="" <?php if ($manejo_recursos3 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos3 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos3 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          
      <td>   <select id="reconocimiento_publico3" name="reconocimiento_publico3">
          <option value="" <?php if ($reconocimiento_publico3 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico3 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico3 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
        
      <td><input type="text" name="persona_expuesta3" value="<?php echo $persona_expuesta3 ?>" ></td>
        
        
    </tr>  <tr>
        
       
       <td>
        <select id="tipo_identificacion4" name="tipo_identificacion4">
            <option value="" <?php if ($tipo_identificacion4 == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identificacion4 == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identificacion4 == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identificacion4 == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identificacion4 == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identificacion4 == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="identificacion_aso4" value="<?php echo $identificacion_aso4 ?>"></td>
      <td><input type="text" name="nombre_4" value="<?php echo $nombre_4 ?>"></td>
      <td><input type="text" name="porcentaje_participacion4" value="<?php echo $porcentaje_participacion4 ?>"></td>
      <td>   <select id="manejo_recursos4" name="manejo_recursos4">
            <option value="" <?php if ($manejo_recursos4 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos4 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos4 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          
      <td>   <select id="reconocimiento_publico4" name="reconocimiento_publico4">
          <option value="" <?php if ($reconocimiento_publico4 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico4 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico4 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
      <td><input type="text" name="persona_expuesta4" value="<?php echo $persona_expuesta4 ?>"></td>
        
        
    </tr>  <tr>
        
       
      <td>
        <select id="tipo_identificacion5" name="tipo_identificacion5">
            <option value="" <?php if ($tipo_identificacion5 == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identificacion5 == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identificacion5 == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identificacion5 == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identificacion5 == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identificacion5 == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="identificacion_aso5" value="<?php echo $identificacion_aso5 ?>"></td>
      <td><input type="text" name="nombre_5" value="<?php echo $nombre_5 ?>"></td>
      <td><input type="text" name="porcentaje_participacion5" value="<?php echo $porcentaje_participacion5?>"></td>
      <td>   <select id="manejo_recursos5" name="manejo_recursos5">
            <option value="" <?php if ($manejo_recursos5 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos5 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos5 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          
      <td>   <select id="reconocimiento_publico5" name="reconocimiento_publico5">
          <option value="" <?php if ($reconocimiento_publico5 == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico5 == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico5 == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
      <td><input type="text" name="persona_expuesta5" value="<?php echo $persona_expuesta5?>"></td>
        
        
    </tr>  
      
  </tbody>
</table>
    
      <br>
      </div>
  </div>
    </div>
                    
                 
                   <hr>
                 
                 
                             <div class="form-container">
  <div class="left-section">
    <div class="form-section">
     <h2>IDENTIFICACION DE LOS REPRESENTANTES LEGALES</h2>
     
     
        <br>
        <br>
        
        <table>
  <thead>
    <tr>
      <th>Tipo Identificación</th>
      <th>Numero identificación</th>
      <th>Razón social o Nombres Completos</th>
      <th>Maneja Recursos públicos?</th>
      <th>Goza de reconocimiento público?(SI O NO)</th>
      <th>Tiene algún vínculo con una persona Públicamente Expuesta? (SI O NO DIGA CUAL)</th>
    </tr>
  </thead>
  <tbody>
       <tr>
           

        
       
       <td>
        <select id="tipo_identicacion1A" name="tipo_identicacion1A">
            <option value="" <?php if ($tipo_identicacion1A == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion1A == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion1A == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion1A == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion1A == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion1A == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion1A" value="<?php echo $numero_identificacion1A;  ?>"></td>
      <td><input type="text" name="nombre_1A" value="<?php echo $nombre_1A; ?>"></td>
      
     <td>   
     <select id="manejo_recursos1A" name="manejo_recursos1A">
          <option value="" <?php if ($manejo_recursos1A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos1A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos1A == 'no') echo 'selected'; ?>>no</option>
        </select>
        
        </td>
          <td>   <select id="reconocimiento_publico1A" name="reconocimiento_publico1A">
          <option value="" <?php if ($reconocimiento_publico1A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico1A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico1A == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
     <td><input type="text" name="persona_expuesta1A" value="<?php echo $persona_expuesta1A; ?>"></td>
    



         <tr>


        
       
        
       <td>
        <select id="tipo_identicacion2A" name="tipo_identicacion2A">
            <option value="" <?php if ($tipo_identicacion2A == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion2A == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion2A == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion2A == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion2A == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion2A == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion2A" value="<?php echo $numero_identificacion2A  ?>"></td>
      <td><input type="text" name="nombre_2A" value="<?php echo $nombre_2A ?>"></td>
           <td>   
        <select id="manejo_recursos2A" name="manejo_recursos2A">
          <option value="" <?php if ($manejo_recursos2A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos2A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos2A == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          <td>   <select id="reconocimiento_publico2A" name="reconocimiento_publico2A">
          <option value="" <?php if ($reconocimiento_publico2A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico2A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico2A == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
             <td><input type="text" name="persona_expuesta2A" value="<?php echo $persona_expuesta2A ?>"></td>
      
        
        
    </tr>
        <tr>


        
       
         <td>
        <select id="tipo_identicacion3A" name="tipo_identicacion3A">
            <option value=""<?php if ($tipo_identicacion3A == '') echo 'selected';?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion3A == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion3A == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion3A == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion3A == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion3A == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion3A" value="<?php echo $numero_identificacion3A  ?>"></td>
      <td><input type="text" name="nombre_3A" value="<?php echo $nombre_3A ?>"></td>
           <td>   
        <select id="manejo_recursos3A" name="manejo_recursos3A">
          <option value="" <?php if ($manejo_recursos3A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos3A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos3A == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          <td>   <select id="reconocimiento_publico3A" name="reconocimiento_publico3A">
          <option value="" <?php if ($reconocimiento_publico3A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico3A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico3A == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
      <td><input type="text" name="persona_expuesta3A" value="<?php echo $persona_expuesta3A ?>"></td>
        
        
    </tr>
        <tr>


        
       
       <td>
        <select id="tipo_identicacion4A" name="tipo_identicacion4A">
            <option value=""<?php if ($tipo_identicacion4A == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion4A == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion4A == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion4A == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion4A == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion4A == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion4A" value="<?php echo $numero_identificacion4A  ?>"></td>
      <td><input type="text" name="nombre_4A" value="<?php echo $nombre_4A ?>"></td>
        <td>   
        <select id="manejo_recursos4A" name="manejo_recursos4A">
          <option value="" <?php if ($manejo_recursos4A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos4A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos4A == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          <td>   <select id="reconocimiento_publico4A" name="reconocimiento_publico4A">
          <option value="" <?php if ($reconocimiento_publico4A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico4A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico4A == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
      <td><input type="text" name="persona_expuesta4A" value="<?php echo $persona_expuesta4A ?>"></td>
        
        
    </tr>
        <tr>


        
       
       <td>
        <select id="tipo_identicacion5A" name="tipo_identicacion5A">
            <option value="" <?php if ($tipo_identicacion5A == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion5A == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion5A == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion5A == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion5A == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion5A == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion5A" value="<?php echo $numero_identificacion5A  ?>"></td>
      <td><input type="text" name="nombre_5A" value="<?php echo $nombre_5A ?>"></td>
      <td>   
        <select id="manejo_recursos5A" name="manejo_recursos5A">
          <option value="" <?php if ($manejo_recursos5A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos5A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos5A == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          <td>   <select id="reconocimiento_publico5A" name="reconocimiento_publico5A">
          <option value="" <?php if ($reconocimiento_publico5A == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico5A == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico5A == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
  
      <td><input type="text" name="persona_expuesta5A" value="<?php echo $persona_expuesta5A ?>"></td>
        
        
    </tr>
     
     
  </tbody>
</table>
    
      <br>
      </div>
  </div>
    </div>
                 
                                <hr>
                 
                 
                             <div class="form-container">
  <div class="left-section">
    <div class="form-section">

     <h2>IDENTIFICACION DE CONTADOR Y REVISORES FISCALES. Incluir Personas Jurídicas (Si aplica), Contador y Revisor Fiscal Principal y Suplente</h2>
     
     
        <br>
        <br>
        
        <table>
  <thead>
    <tr>
      <th>Tipo Identificación</th>
      <th>Numero identificación</th>
      <th>Razón social o Nombres Completos</th>
      <th>Maneja Recursos públicos?</th>
      <th>Goza de reconocimiento público?(SI O NO)</th>
      <th>Tiene algún vínculo con una persona Públicamente Expuesta? </th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <td>
        <select id="tipo_identicacion1B" name="tipo_identicacion1B">
            <option value="" <?php if ($tipo_identicacion1B == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion1B == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion1B == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion1B == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion1B == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion1B == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion1B" value="<?php echo $numero_identificacion1B  ?>"></td>
      <td><input type="text" name="nombre_1B" value="<?php echo $nombre_1B?>"></td>
       <td>   
        <select id="manejo_recursos1B" name="manejo_recursos1B">
          <option value="" <?php if ($manejo_recursos1B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos1B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos1B == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          <td>   <select id="reconocimiento_publico1B" name="reconocimiento_publico1B">
          <option value="" <?php if ($reconocimiento_publico1B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico1B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico1B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
     <td>   <select id="persona_expuesta1B" name="persona_expuesta1B">
          <option value="" <?php if ($persona_expuesta1B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($persona_expuesta1B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($persona_expuesta1B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
      
    </tr>
       <tr>

      <td>
        <select id="tipo_identicacion2B" name="tipo_identicacion2B">
            <option value="" <?php if ($tipo_identicacion2B == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion2B == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion2B == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion2B == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion2B == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion2B == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion2B" value="<?php echo $numero_identificacion2B  ?>"></td>
      <td><input type="text" name="nombre_2B" value="<?php echo $nombre_2B ?>"></td>
       <td>   
        <select id="manejo_recursos2B" name="manejo_recursos2B">
          <option value="" <?php if ($manejo_recursos2B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos2B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos2B == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          <td>   <select id="reconocimiento_publico2B" name="reconocimiento_publico2B">
          <option value="" <?php if ($reconocimiento_publico2B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico2B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico2B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
     <td>   <select id="persona_expuesta2B" name="persona_expuesta2B">
          <option value="" <?php if ($persona_expuesta2B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($persona_expuesta2B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($persona_expuesta2B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
        
        
    </tr>
       <tr>


        
       
      <td>
        <select id="tipo_identicacion3B" name="tipo_identicacion3B">
            <option value="" <?php if ($tipo_identicacion3B == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion3B == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion3B == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion3B == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion3B == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion3B == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion3B" value="<?php echo $numero_identificacion3B  ?>"></td>
      <td><input type="text" name="nombre_3B" value="<?php echo $nombre_3B ?>"></td>
        <td>   
        <select id="manejo_recursos3B" name="manejo_recursos3B">
          <option value="" <?php if ($manejo_recursos3B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos3B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos3B == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          <td>   <select id="reconocimiento_publico3B" name="reconocimiento_publico3B">
          <option value="" <?php if ($reconocimiento_publico3B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico3B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico3B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
       <td>   <select id="persona_expuesta3B" name="persona_expuesta3B">
          <option value="" <?php if ($persona_expuesta3B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($persona_expuesta3B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($persona_expuesta3B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
        
        
    </tr>
       <tr>


        
       
         <td>
        <select id="tipo_identicacion4B" name="tipo_identicacion4B">
            <option value="" <?php if ($tipo_identicacion4B == '') echo 'selected';?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion4B == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion4B == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion4B == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion4B == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion4B == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion4B" value="<?php echo $numero_identificacion4B  ?>"></td>
      <td><input type="text" name="nombre_4B" value="<?php echo $nombre_4B ?>"></td>
        <td>   
        <select id="manejo_recursos4B" name="manejo_recursos4B">
          <option value="" <?php if ($manejo_recursos4B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos4B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos4B == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          <td>   <select id="reconocimiento_publico4B" name="reconocimiento_publico4B">
          <option value="" <?php if ($reconocimiento_publico4B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico4B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico4B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
       <td>   <select id="persona_expuesta4B" name="persona_expuesta4B">
          <option value="" <?php if ($persona_expuesta4B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($persona_expuesta4B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($persona_expuesta4B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
        
        
    </tr>
      
      <tr>
        
       
       <td>
        <select id="tipo_identicacion5B" name="tipo_identicacion5B">
            <option value="" <?php if ($tipo_identicacion5B == '') echo 'selected'; ?>>Seleccione</option>
            <option value="Cedula De Ciudadanía" <?php if ($tipo_identicacion5B == 'Cedula De Ciudadanía') echo 'selected'; ?>>Cedula De Ciudadanía</option>
            <option value="Cedula Extranjera" <?php if ($tipo_identicacion5B == 'Cedula Extranjera') echo 'selected'; ?>>Cedula Extranjera</option>
            <option value="Documento Extranjero" <?php if ($tipo_identicacion5B == 'Documento Extranjero') echo 'selected'; ?>>Documento Extranjero</option>
            <option value="Pasaporte" <?php if ($tipo_identicacion5B == 'Pasaporte') echo 'selected'; ?>>Pasaporte</option>
            <option value="Tarjeta De Identidad" <?php if ($tipo_identicacion5B == 'Tarjeta De Identidad') echo 'selected'; ?>>Tarjeta De Identidad</option>
        </select>
       
        </td>
      <td><input type="text" name="numero_identificacion5B" value="<?php echo $numero_identificacion5B  ?>"></td>
      <td><input type="text" name="nombre_5B" value="<?php echo $nombre_5B ?>"></td>
      <td>   
        <select id="manejo_recursos5B" name="manejo_recursos5B">
          <option value="" <?php if ($manejo_recursos5B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($manejo_recursos5B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($manejo_recursos5B == 'no') echo 'selected'; ?>>no</option>
        </select>
        </td>
          <td>   <select id="reconocimiento_publico5B" name="reconocimiento_publico5B">
          <option value="" <?php if ($reconocimiento_publico5B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($reconocimiento_publico5B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($reconocimiento_publico5B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
        <td>   <select id="persona_expuesta5B" name="persona_expuesta5B">
          <option value="" <?php if ($persona_expuesta5B == '') echo 'selected'; ?>>Selecciona</option>
            <option value="si" <?php if ($persona_expuesta5B == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($persona_expuesta5B == 'no') echo 'selected'; ?>>no</option>
              </select>
            </td>
        
        
    </tr>

     
     
  </tbody>
</table>
    
      <br>
      </div>
  </div>
    </div>
                 
                                <hr>
                 
    
         <div class="form-container">
  <div class="left-section">
    <div class="form-section">
      <h2>3. INFORMACION FINANCIERA </h2>
      <div style="display:flex;">
        <div style="flex:1;">
           <label for="titular_cuenta">Titular de la Cuenta:</label>
                <input type="text" id="titular_cuenta" name="titular_cuenta"  value="<?php echo $titular_cuenta; ?>"><br>

                <label for="banco">Banco:</label>
                <input type="text" id="banco" name="banco"   value="<?php echo $banco; ?>"><br>

                 <label for="codigo">Código:</label>
                 <input type="text" id="codigo" name="codigo"  value="<?php echo $codigo; ?>"><br>      
      

        </div>
       <hr>

        <div style="flex:1; margin-left: 30px;">
            <label for="tipo_cuenta">Tipo de Cuenta:</label>
            
            
             <select id="tipo_cuenta" name="tipo_cuenta">
            <option value="" <?php if ($tipo_cuenta == '') echo 'selected'; ?>>Seleccione</option>
            <option value="corriente" <?php if ($tipo_cuenta == 'corriente') echo 'selected'; ?>>corriente</option>
            <option value="ahorros" <?php if ($tipo_cuenta == 'ahorros') echo 'selected'; ?>>ahorros</option>
        </select>
            
            
            <br>
                
  <label for="numero_cuenta">Número de Cuenta:</label>
  <input type="text" id="numero_cuenta" name="numero_cuenta" value="<?php echo $numero_cuenta; ?>"><br>  
        
            
            
          
        </div>
          <div style="flex:1; margin-left: 30px;">
              <label for="modalidad_pago">Modalidad de Pago:</label>
        <select id="modalidad_pago" name="modalidad_pago">
            <option value="" <?php if ($modalidad_pago == '') echo 'selected'; ?>>Seleccione</option>
            <option value="contado" <?php if ($modalidad_pago == 'contado') echo 'selected'; ?>>Contado</option>
            <option value="30Dias" <?php if ($modalidad_pago == '30Dias') echo 'selected'; ?>>30 Dias</option>
            <option value="60Dias" <?php if ($modalidad_pago == '60Dias') echo 'selected'; ?>>60 Dias</option>
        </select>
              
              
<br> 
  <label for="cupo_credito">Cupo de Crédito Ofrecido:</label>
  <input type="text" id="cupo_credito" name="cupo_credito" value="<?php echo $cupo_credito; ?>" ><br>
  <br>
          </div>    
      </div>
    </div>
  </div>
    </div>
         <hr>                 
                 
              
    
       
    <div class="form-container">
  <div class="left-section">
    <div class="form-section1">
        <h2>4. CRITERIOS DE SELECCION</h2>
      <div style="display:flex;">
        <div style="flex:1;">
         <label for="modalidad_pago">Tiempos De Entrega:</label>
        <select id="tiempo_entrega" name="tiempo_entrega">
            <option value="" <?php if ($tiempo_entrega == '') echo 'selected'; ?>>Seleccione</option>
            <option value="30Dias" <?php if ($tiempo_entrega == '30Dias') echo 'selected'; ?>>30 Dias</option>
            <option value="60Dias" <?php if ($tiempo_entrega == '60Dias') echo 'selected'; ?>>60 Dias</option>
            <option value="90Dias" <?php if ($tiempo_entrega == '90Dias') echo 'selected'; ?>>90 Dias</option>
        </select>
          <br>
          
        <label for="modalidad_pago">Ofrece Crédito:</label>
<select id="ofrece_credito" name="ofrece_credito" onchange="showTextInput()">
    <option value="" <?php if ($ofrece_credito == '') echo 'selected'; ?>>Seleccione</option>
    
    <option value="30Dias" <?php if ($ofrece_credito == '30Dias') echo 'selected'; ?>>30 Días</option>
    <option value="60Dias" <?php if ($ofrece_credito == '60Dias') echo 'selected'; ?>>60 Días</option>
    <option value="90Dias" <?php if ($ofrece_credito == '90Dias') echo 'selected'; ?>>90 Días</option>
    <option value="otro" <?php if ($ofrece_credito == 'otro') echo 'selected'; ?>>Otro</option>
</select>

<div id="otro_credito_input" style="display: none;">
    <label for="otro_credito">Especificar otro:</label>
    <input type="text" id="otro_credito" name="otro_credito" value="<?php echo $otro_credito; ?>">
</div>

<script>
    function showTextInput() {
        var select = document.getElementById("ofrece_credito");
        var selectedOption = select.options[select.selectedIndex].value;
        var otroInput = document.getElementById("otro_credito_input");

        if (selectedOption === "otro") {
            otroInput.style.display = "block";
        } else {
            otroInput.style.display = "none";
        }
    }
</script>

          <br>
          
            
              <label for="responsable_iva">Suministra Muestra:</label>
 
        <select id="suministra_muestra" name="suministra_muestra">
            <option value="" <?php if ($suministra_muestra == '') echo 'selected'; ?>>Seleccione</option>
            <option value="si" <?php if ($suministra_muestra == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($suministra_muestra == 'no') echo 'selected'; ?>>no</option>
        </select>
            <br>
          
          
        </div>
        
          <div style="flex:1; margin-left: 30px;">
        
          
           <label for="responsable_iva">Maneja Compras sostenibles</label>
 
        <select id="maneja_sostenibles" name="maneja_sostenibles">
            <option value="" <?php if ($maneja_sostenibles == '') echo 'selected'; ?>>Seleccione</option>
            <option value="si" <?php if ($maneja_sostenibles == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($maneja_sostenibles == 'no') echo 'selected'; ?>>no</option>
        </select>
              
              <br>
          
            <label for="gran_contribuyente">Gestiosn De Residuos:</label><br>
         
              
        <select id="gestiona_residuos" name="gestiona_residuos">
            <option value="" <?php if ($gestiona_residuos == '') echo 'selected'; ?>>Seleccione</option>
            <option value="si" <?php if ($gestiona_residuos == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($gestiona_residuos == 'no') echo 'selected'; ?>>no</option>
        </select>
         <br>
          
          <label for="responsable_iva">Ofrece Garantia y/o Soporte Tecnico:</label>
 
        <select id="garantia_soporte" name="garantia_soporte">
            <option value="" <?php if ($garantia_soporte == '') echo 'selected'; ?>>Seleccione</option>
            <option value="si" <?php if ($garantia_soporte == 'si') echo 'selected'; ?>>si</option>
            <option value="no" <?php if ($garantia_soporte == 'no') echo 'selected'; ?>>no</option>
        </select>

     
 
          </div>    
      </div>
    </div>
  </div>
    </div>
                 <hr>
                 
                 <div class="form-container">
  <div class="left-section">
    <div class="form-section">
     <h2>5.  CALIDAD DE PRODUCTOS/SERVICIOS (Sistemas de Gestión Implementados)  </h2>
     <div class="div-centrado">
      <label for="certificaciones_acreditadas">La empresa tiene certificaciones acreditadas de:</label><br><br>
           <textarea id="certificaciones_acreditadas" name="certificaciones_acreditadas" ><?php echo $certificaciones_acreditadas ; ?></textarea>
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
        <input type="radio" id="gestion_calidad" name="gestion_calidad" value="si"  <?php if ($gestion_calidad  == 'si') echo 'checked'; ?>>
        <label for="si1"  class="radio-label">Sí</label>
          <span class="checkmark"></span>
        <input type="radio" id="gestion_calidad" name="gestion_calidad" value="no"  <?php if ($gestion_calidad  == 'no') echo 'checked'; ?>>
        <label for="no1"   class="radio-label"> No</label>
          <span class="checkmark"></span>
        
          <span class="checkmark"></span>
          </div>
      </td>
      <td><textarea id="observaciones1" name="observaciones1" maxlength="120" ><?php echo $observaciones1; ?></textarea></td>
    </tr>
    <tr>
      <td>Sistema de Gestión de Medio Ambiente</td>
      <td>
        <input type="radio" id="gestion_ambiente" name="gestion_ambiente" value="si"  <?php if ($gestion_ambiente == 'si') echo 'checked'; ?>>
        <label for="si2"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_ambiente" name="gestion_ambiente" value="no"  <?php if ($gestion_ambiente == 'no') echo 'checked'; ?>>
        <label for="no2"   class="radio-label">No</label>
        
      </td>
      <td><textarea id="observaciones2" name="observaciones2" maxlength="120" ><?php echo $observaciones2; ?></textarea></td>
    </tr>
    <tr>
      <td>Sistema de Gestión de Salud y Seguridad en el Trabajo</td>
      <td>
        <input type="radio" id="gestion_saludSeguridad" name="gestion_saludSeguridad" value="si"  <?php if ($gestion_saludSeguridad == 'si') echo 'checked'; ?>>
        <label for="si3"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_saludSeguridad" name="gestion_saludSeguridad" value="no"  <?php if ($gestion_saludSeguridad == 'no') echo 'checked'; ?>>
        <label for="no3"   class="radio-label">No</label>
        
      </td>
      <td><textarea id="observaciones3" name="observaciones3" maxlength="120" ><?php echo $observaciones3; ?></textarea></td>
    </tr>
    <tr>
      <td>Sistema de Gestión de Seguridad de la Cadena de Suministro</td>
      <td>
        <input type="radio" id="gestion_seguridad" name="gestion_seguridad" value="si"  <?php if ($gestion_seguridad  == 'si') echo 'checked'; ?>>
        <label for="si4"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_seguridad" name="gestion_seguridad" value="no"  <?php if ($gestion_seguridad  == 'no') echo 'checked'; ?>>
        <label for="no4"   class="radio-label">No</label>
        
      </td>
      <td><textarea id="observaciones4" name="observaciones4" maxlength="120" ><?php echo $observaciones4; ?></textarea></td>
    </tr>
    <tr>
      <td>WRAP (Sistema de Gestión de cumplimiento social que promueve la fabricación segura, legal, humana y ética) </td>
      <td>
        <input type="radio" id="wrap" name="wrap" value="si"  <?php if ($wrap == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="wrap" name="wrap" value="no"  <?php if ($wrap == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        
      </td>
      <td><textarea id="observaciones5" name="observaciones5" maxlength="120" ><?php echo $observaciones5; ?></textarea></td>
    </tr>
  </tbody>
</table>
      
    </div>
  </div>
    </div>
                 
  
         
         
    <br>
    <fieldset>

    </fieldset>
    <br>
    <br>
         
         
         <p>Declaro que la información consignada y anexa a este formulario es veraz y admito que cualquier omisión o inexactitud en estos documentos podrá ocasionar el rechazo de esta solicitud, la devolución de la documentación y la cancelación de la inscripción  y nos comprometemos a actualizarla en los tiempos establecidos por su organización.  Declaro que la actividad, profesión u oficio de la empresa es licita y se ejerce dentro del marco legal, además, que los recursos poseídos no provienen de actividades ilícitas de acuerdo con el Código Penal Colombiano. Los recursos (económicos, humanos, etc.) que se deriven del desarrollo de la actividad comercial, no se destinarán a la financiación del terrorismo, grupos terroristas o actividades ilícitas. Dentro  de  los  términos  de  la  Ley  y sus  decretos  reglamentarios,  autorizo  a FRANCISCO A. ROCHA ALVARADO S.A.S. para consultar  y  verificar  los  datos  en  centrales de información y/o base de datos nacionales colombianas, extranjeras o internacionales, correspondientes a la persona jurídica que represento, a sus representantes legales, revisores fiscales, miembros de junta directiva y/o socios.  De igual manera autorizo consignar en las cuentas bancarias, registradas en este formulario, los pagos que su compañía tenga a nuestro favor y que dentro de los términos legales establecidos, se puedan almacenar y administrar los datos suministrados en este formato.</p>
      <br>
      <p>AUTORIZACIÓN PARA TRATAMIENTO DE DATOS PERSONALES: En cumplimiento de la Ley Estatutaria 1581 de 2012 de Protección de Datos y normas concordantes, autorizo como Titular de los datos personales para que éstos sean incorporados en una base de datos responsabilidad de FRANCISCO A. ROCHA ALVARADO SAS para su tratamiento, el cual podrá incluir la recolección, almacenamiento, uso, circulación y destinación con la finalidad de realizar gestión administrativa, verificación de datos, gestión de estadísticas internas, encuestas de opinión, gestión de proveedores, evaluación de proveedores, gestión de cobros y pagos, gestión de facturación, gestión económica y contable, gestión fiscal, contacto y envío de comunicaciones a través de los medios registrados (correo electrónico, número de celular, teléfono fijo, dirección física y sistemas de mensajería instantánea), mantener, controlar y desarrollar la relación, consulta de información en fuentes públicas y privadas o listas restrictivas para la prevención de LA/FT y el debido conocimiento de contrapartes; de igual manera, autorizo la transmisión nacional e internacional de datos personales con proveedores de servicios de almacenamiento, custodia y seguridad de la información y proveedores necesarios para desarrollar las finalidades aquí previstas; además, autorizo la transferencia nacional e internacional de datos con aliados comerciales para fines de gestión de proveedores. Declaro que he informado y que cuenta con la autorización de las personas de contacto de las áreas para brindar sus datos personales para que sean incorporados en una base de datos responsabilidad de FRANCISCO A. ROCHA ALVARADO SAS para su tratamiento, el cual podrá incluir la recolección, almacenamiento, uso, circulación y destinación con la finalidad de realizar gestión administrativa, verificación de datos y mantener, controlar y desarrollar la relación contractual. Es de carácter facultativo suministrar información que verse sobre Datos Sensibles, entendidos como aquellos que afectan la intimidad o generen algún tipo de discriminación, o sobre menores de edad. El titular de los datos podrá ejercitar los derechos de acceso, corrección y/o supresión de datos y/o revocación de la autorización o reclamo por infracción sobre sus datos, mediante un escrito dirigido a FRANCISCO A. ROCHA ALVARADO S.A.S a la dirección de correo electrónico protecciondatos@franciscorocha.com indicando en el asunto el derecho que desea ejercitar, o mediante correo ordinario remitido a la dirección Cra. 69B Nro. 19A-18 La política de tratamiento a la que se encuentran sujetos los datos personales se podrá consultar en la página web //franciscorocha.com.</p>
     
    
     <br>
    <br>
                   <h1 style="color: black;">6. DOCUMENTACION</h1><br>
       <hr>
                 
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
        <input type="radio" id="fotocopia_cedula" name="fotocopia_cedula" value="si" <?php if ($fotocopia_cedula == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="fotocopia_cedula" name="fotocopia_cedula" value="no" <?php if ($fotocopia_cedula == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="fotocopia_cedula" name="fotocopia_cedula" value="na" <?php if ($fotocopia_cedula == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>  
      </td>
       

      <td><textarea id="observ_1" name="observ_1" class="form-section" maxlength="55"><?php echo $observ_1;?></textarea></td>
    </tr>
                   <tr>
      <td>CERTIFICADO DE CAMARA Y COMERCIO VIGENTE (No mayor a 60 días)</td>
      <td>
        <input type="radio" id="certificado_camara" name="certificado_camara" value="si" <?php if ($certificado_camara == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificado_camara" name="certificado_camara" value="no" <?php if ($certificado_camara == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificado_camara" name="certificado_camara" value="na" <?php if ($certificado_camara == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>  
      </td>
      <td><textarea id="observ_2" name="observ_2" maxlength="55"><?php echo $observ_2?></textarea></td>
    </tr>
    <tr>
      <td>FOTOCOPIA DEL RUT (ACTUALIZADO)</td>
      <td>
        <input type="radio" id="fotocopia_rut" name="fotocopia_rut" value="si" <?php if ($fotocopia_rut == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="fotocopia_rut" name="fotocopia_rut" value="no" <?php if ($fotocopia_rut == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="fotocopia:rut" name="fotocopia_rut" value="na" <?php if ($fotocopia_rut == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_3" name="observ_3" maxlength="55" ><?php echo $observ_3 ;?></textarea></td>
    </tr>
                   
                   
    <tr>
      <td>CERTIFICACION ACCIONARIA</td>
      <td>
         <input type="radio" id="certificacion_accionaria" name="certificacion_accionaria" value="si" <?php if ($certificacion_accionaria  == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificacion_accionaria" name="certificacion_accionaria" value="no" <?php if ($certificacion_accionaria == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificacion_accionaria" name="certificacion_accionaria" value="na" <?php if ($certificacion_accionaria == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>       
      </td>
      <td><textarea id="observ_4" name="observ_4"  maxlength="55" ><?php echo $observ_4 ;?></textarea></td>
    </tr>
    <tr>
      <td>CERTIFICADO DE ANTECEDENTES DISCIPLINARIOS DE CONTADOR Y REVISOR FISCAL</td>
      <td>
        <input type="radio" id="antecedentes_disciplinarios" name="antecedentes_disciplinarios" value="si" <?php if ($antecedentes_disciplinarios == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="antecedentes_disciplinarios" name="antecedentes_disciplinarios" value="no" <?php if ($antecedentes_disciplinarios == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="antecedentes_disciplinarios" name="antecedentes_disciplinarios" value="na" <?php if ($antecedentes_disciplinarios == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>
      </td>
        <td><textarea id="observ_5" name="observ_5"  maxlength="55" ><?php echo $observ_5;?></textarea></td>
    </tr>
              
                   
    <tr>
      <td>SI ES ENTIDAD VIGILADA POR SFC: ORIGINAL DEL CERTIFICADO DE EXISTENCIA Y REPRESENTACIÓN LEGAL EXPEDIDO POR LA SUPERINTENDENCIA FINANCIERA DE COLOMBIA (No mayor a 90 días)</td>
      <td>
         <input type="radio" id="certificado_existencia" name="certificado_existencia" value="si" <?php if ($certificado_existencia  == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificado_existencia" name="certificado_existencia" value="no" <?php if ($certificado_existencia == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificado_existencia" name="certificado_existencia" value="na" <?php if ($certificado_existencia == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>       
      </td>
      <td><textarea id="observ_6" name="observ_6"  maxlength="55" ><?php echo $observ_6 ;?></textarea></td>
    </tr>
    <tr>
      <td>RESOLUCIÓN DE FACTURACIÓN</td>
      <td>
        <input type="radio" id="resolucion_facturacion" name="resolucion_facturacion" value="si" <?php if ($resolucion_facturacion == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="resolucion_facturacion" name="resolucion_facturacion" value="no" <?php if ($resolucion_facturacion == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="resolucion_facturacion" name="resolucion_facturacion" value="na" <?php if ($resolucion_facturacion == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label" maxlength="55" >N/A</label>
      </td>
        <td><textarea id="observ_7" name="observ_7" ><?php echo $observ_7;?></textarea></td>
    </tr>
      <tr>
      <td>CERTIFICACIÓN BANCARIA EXPEDIDA POR EL BANCO PARA PAGOS POR TRANSFERENCIA. (ORIGINAL)</td>
      <td>
   
        <input type="radio" id="certificacion_bancaria" name="certificacion_bancaria" value="si" <?php if ($certificacion_bancaria == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificacion_bancaria" name="certificacion_bancaria" value="no" <?php if ($certificacion_bancaria == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificacion_bancaria" name="certificacion_bancaria" value="na" <?php if ($certificacion_bancaria == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>
      </td>
          <td><textarea id="observ_8" name="observ_8"  maxlength="55" ><?php echo $observ_8;?></textarea></td>
    </tr>
    <tr>
      <td>ESTADOS FINANCIEROS DEL ÚLTIMO PERIODO GRAVABLE</td>
      <td>
        <input type="radio" id="estados_financieros" name="estados_financieros" value="si" <?php if ($estados_financieros == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="estados_financieros" name="estados_financieros" value="no" <?php if ($estados_financieros == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="estados_financieros" name="estados_financieros" value="na" <?php if ($estados_financieros == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_9" name="observ_9"  maxlength="55" ><?php echo $observ_9 ;?></textarea></td>
    </tr>
    <tr>
      <td>COPIA DE LA DECLARACIÓN DE RENTA DEL ÚLTIMO PERIODO GRAVABLE DISPONIBLE</td>
      <td>
        <input type="radio" id="declaracion_renta" name="declaracion_renta" value="si" <?php if ($declaracion_renta == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="declaracion_renta" name="declaracion_renta" value="no" <?php if ($declaracion_renta == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="declaracion_renta" name="declaracion_renta" value="na" <?php if ($declaracion_renta == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>       
      </td>
        <td><textarea id="observ_10" name="observ_10" maxlength="55"  ><?php echo $observ_10;?></textarea></td>
    </tr>
    <tr>
      <td>APODERADO: SI LA PERSONA JURÍDICA ACTÚA POR INTERMEDIO DE UN APODERADO, DEBERÁ ADJUNTAR ORIGINAL DEL PODER CON RECONOCIMIENTO DE FIRMA ANTE NOTARIO Y EN EL CASO DONDE SE PRESENTE UNO O MÁS BENEFICIARIOS, DEBEN QUEDAR REGISTRADOS EN EL PODER Y EN ESTE DOCUMENTO.</td>
      <td>
        <input type="radio" id="apoderado" name="apoderado" value="si" <?php if ($apoderado == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="apoderado" name="apoderado" value="no" <?php if ($apoderado == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="apoderado" name="apoderado" value="na" <?php if ($apoderado == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>      
      </td>
      <td><textarea id="observ_11" name="observ_11"  maxlength="55" ><?php echo $observ_11;?></textarea></td>
    </tr>
                   <tr>
      <td>PARA EMPRESAS CERTIFICADAS: FOTOCOPIA DE CERTIFICADO ISO 9001, 14001,18001, ISO 28000, BASC, OEA VIGENTES (en caso de no estar certificados en ISO28000, BASC u OEA, diligenciar formato adjunto de Acuerdo de Seguridad RILO-10 ) O CERTIFICACIONES DE PARTICIPACIPACIÓN EN EL PROGRAMA DE GESTIÓN AMBIENTAL EMPRESARIAL GAE LIDERADO POR LA SECRETARÍA DISTRITAL DE AMBIENTE O PISA LIDERADO POR LA SECRETARÍA DISTRITAL DE SALUD</td>
      <td>
        <input type="radio" id="certificaciones" name="certificaciones" value="si" <?php if ($certificaciones == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="certificaciones" name="certificaciones" value="no" <?php if ($certificaciones == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="certificaciones" name="certificaciones" value="na" <?php if ($certificaciones == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>  
      </td>
      <td><textarea id="observ_12" name="observ_12"  maxlength="55" ><?php echo $observ_12;?></textarea></td>
    </tr>
                   <tr>
      <td>PLAN DE CONTINGENCIA DE TRANSPORTE</td>
      <td>
        <input type="radio" id="plan_contingencia" name="plan_contingencia" value="si" <?php if ($plan_contingencia == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="plan_contingencia" name="plan_contingencia" value="no" <?php if ($plan_contingencia == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="plan_contingencia" name="plan_contingencia" value="na" <?php if ($plan_contingencia == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observ_13" name="observ_13"  maxlength="55" ><?php echo $observ_13;?></textarea></td>
    </tr>
                   <tr>
      <td>RESOLUCIONES, PERMISOS, LICENCIAS, ENTRE OTROS, EMITIDOS POR LA ENTIDAD COMPETENTE, PARA REALIZACIÓN DE SU ACTIVIDAD ECONÓMICA</td>
                       <td>
        <input type="radio" id="resoluciones_permisos" name="resoluciones_permisos" value="si" <?php if ($resoluciones_permisos == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="resoluciones_permisos" name="resoluciones_permisos" value="no" <?php if ($resoluciones_permisos == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="resoluciones_permisos" name="resoluciones_permisos" value="na" <?php if ($resoluciones_permisos == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>      
      
      </td>
                       <td><textarea id="observ_14" name="observ_14"  maxlength="55" ><?php echo $observ_14;?></textarea></td>
    </tr>
                   <tr>
      <td>DOS (2) REFERENCIAS COMERCIALES </td>
      <td>
        <input type="radio" id="referencias_comerciales" name="referencias_comerciales" value="si" <?php if ($referencias_comerciales == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="referencias_comerciales" name="referencias_comerciales" value="no" <?php if ($referencias_comerciales == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="referencias_comerciales" name="referencias_comerciales" value="na" <?php if ($referencias_comerciales == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>      
      </td>
      <td><textarea id="observ_15" name="observ_15"  maxlength="55" ><?php echo $observ_15;?></textarea></td>
    </tr>
                   
                   <tr>
      <td>SOPORTES GESTIÓN DE RESIDUOS</td>
      <td>
        <input type="radio" id="gestion_residuos" name="gestion_residuos" value="si" <?php if ($gestion_residuos == 'si') echo 'checked'; ?>>
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_residuos" name="gestion_residuos" value="no" <?php if ($gestion_residuos == 'no') echo 'checked'; ?>>
        <label for="no5"   class="radio-label">No</label>
        <input type="radio" id="gestion_residuos" name="gestion_residuos" value="na" <?php if ($gestion_residuos == 'na') echo 'checked'; ?>>
        <label for="na5"   class="radio-label">N/A</label>      
      </td>
      <td><textarea id="observ_16" name="observ_16"  maxlength="55" ><?php echo $observ_16;?></textarea></td>
    </tr>
  </tbody>
</table> 
   
   
       

         

         <br>
         <br><div class="input-cont">
                 <input type="image" src="sigui.png"  alt="siguiente"value="Siguiente">
      </div>
        
         
                 <a href="indexp.php"  style="text-decoration: none; color: black; display: flex; justify-content: center; align-items: center;">Regresar</a>
         <br>
         <br>
                
            </div>

       </div>
        <?php
}
        ?>
    </form>
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
