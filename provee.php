<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css"/>

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <title>Formulario de Registro para Proveedores</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
  
    .radio-tarifa {
      display: flex;
      align-items: center;
    }
    .radio-tarifa label {
      margin-right: 10px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
 <style>
         form {
    max-width: 1600px; /* Ancho máximo del formulario */
    margin: 0 auto; /* Centrar el formulario en la página */
    padding: 20px;
  }

  /* Estilos para los inputs */
  input[type="text"],
  input[type="email"],
  input[type="password"],
  select,
  textarea {
    width: 100%; /* Ancho del 100% del contenedor padre */
    padding: 10px; /* Espacio interior */
    margin-bottom: 10px; /* Espacio inferior */
    box-sizing: border-box; /* Incluir el padding y border en el ancho total */
  }
     
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


<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid"> <a class="navbar-brand navbar-logo" href="#"> <img src="images/logo-white.png" alt="logo" class="logo-1"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php">Inicio</a></li>
        <li class="nav-item"><a href="logout.php">Cerrar Sesion</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --> 

<!-- Banner Image -->

<div class="banner text-center" data-scroll-index='0'>
  <div class="banner-overlay">
    </div>
    </div>

  <style>
      h1 {
  font-size: 36px; /* Tamaño de fuente */
  color: #333; /* Color del texto */
  font-weight: bold; /* Peso de la fuente */
}

h2 {
  font-size: 30px;
  color: #333;
}

h3 {
  font-size: 24px;
  color: #333;
}

    body {
      font-family: Arial, sans-serif;
    }
      .separador {
  width: 1px;
  background-color: #ccc;
}
    .container {
     max-width: 70%;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .columnas {
      display: flex;
      justify-content: space-between;
         text-align: center;
    }
    .columna {
      flex: 1;
      margin-right: 200px;
        text-align: center; 
    }
      
       .columnas2 {
      display: flex;
      justify-content: space-between;
        text-align: center;
    }
    .columna2 {
      flex: 1;
      margin-right: 200px;
        text-align: center;
    }
    .radio-tarifa {
      display: flex;
      align-items: center;
    }
    .radio-tarifa label {
      margin-right: 10px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #45a049;
    }
         input[type="text"] {
      /* Ancho del input */
      padding: 10px; /* Espaciado interno del texto */
      border: 1px solid #ccc; /* Borde del input */
      border-radius: 5px; /* Radio de borde */
      background-color: #f9f9f9; /* Color de fondo */
      color: #333; /* Color del texto */
      font-size: 16px; /* Tamaño de fuente */
      font-family: Arial, sans-serif; /* Familia de fuente */
     
    }
      
       input[type="number"] {
     /* Ancho del input */
      padding: 10px; /* Espaciado interno del texto */
      border: 1px solid #ccc; /* Borde del input */
      border-radius: 5px; /* Radio de borde */
      background-color: #f9f9f9; /* Color de fondo */
      color: #333; /* Color del texto */
      font-size: 16px; /* Tamaño de fuente */
      font-family: Arial, sans-serif; /* Familia de fuente */
     
    }
      
       input[type="file"] {
    /* Ancho del input */
      padding: 10px; /* Espaciado interno del texto */
      background-color: #ffffff; /* Color de fondo */
      color: #333; /* Color del texto */
      font-size: 16px; /* Tamaño de fuente */
      font-family: Arial, sans-serif; /* Familia de fuente */
     
    }
        input[type="date"] {
     /* Ancho del input */
      padding: 10px; /* Espaciado interno del texto */
      border: 1px solid #ccc; /* Borde del input */
      border-radius: 5px; /* Radio de borde */
      background-color: #f9f9f9; /* Color de fondo */
      color: #333; /* Color del texto */
      font-size: 16px; /* Tamaño de fuente */
      font-family: Arial, sans-serif; /* Familia de fuente */
     
     
    }
      #miSelect {
  padding: 10px; /* Espaciado interno del select */
  border: 1px solid #ccc; /* Borde del select */
  border-radius: 5px; /* Radio de borde */
  background-color: #f9f9f9; /* Color de fondo */
  color: #333; /* Color del texto */
  font-size: 16px; /* Tamaño de fuente */
  font-family: Arial, sans-serif; /* Familia de fuente */
 
           text-align: right;
}
      
       #inputEspecial {

    }
         #text2 {
      
      padding: 10px; /* Espaciado interno del texto */
      border: 1px solid #ccc; /* Borde del input */
      border-radius: 5px; /* Radio de borde */
      background-color: #f9f9f9; /* Color de fondo */
      color: #333; /* Color del texto */
      font-size: 16px; /* Tamaño de fuente */
      font-family: Arial, sans-serif; /* Familia de fuente */
     
    }
       select {
      padding: 10px; /* Espaciado interno del select */
      border: 1px solid #ccc; /* Borde del select */
      border-radius: 5px; /* Radio de borde */
      background-color: #f9f9f9; /* Color de fondo */
      color: #333; /* Color del texto */
      font-size: 16px; /* Tamaño de fuente */
      font-family: Arial, sans-serif; /* Familia de fuente */
      appearance: none; /* Ocultar el estilo predeterminado del sistema (flecha) */
      width: 370px; /* Ancho del select */
    }
      
      .div-centrado {
  width: 97%; /* Puedes ajustar el ancho según necesites */
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
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 4px;
    }

    th {
      background-color: #f2f2f2;
    }
 .radio-label {
      font-size: 16px; /* Modificar el tamaño de la letra */
    }
      
  </style>

  <h2>1. DATOS DEL PROVEEDOR/CLIENTE</h2>
  <form action="#" method="post">
    <div class="columnas">
      <div class="columna">
         <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="numero_identificacion">Número de Identificación:</label><br>
            <input type="number"  id="inputEspecial" name="numero_identificacion"  required>
          
            <input type="number" id="dv" name="dv" placeholder="DV"><br><br>
          
          
          <label for="nombre_contactoProveedor">Nombre del Contacto del Proveedor:</label><br>
            <input type="text" id="nombre_contactoProveedor" name="nombre_contactoProveedor"><br><br>
          

 </div>
     <div class="columna">
            
       
            <label for="telefono">Teléfono:</label><br>
            <input type="text" id="telefono" name="telefono" required><br><br>
          <label for="direccion">Dirección:</label><br>
            <input type="text" id="direccion" name="direccion" required><br><br>
        
             <label for="cargo">Cargo:</label><br>
            <input type="text" id="cargo" name="cargo"><br><br>
         
            
         
         
 </div>
     <div class="columna">
           

            <label for="ciudad">Ciudad:</label><br>
            <input type="text" id="ciudad" name="ciudad" required><br><br>
         
          <label for="actividad_economica">Actividad Económica:</label><br>
            <input type="text" id="actividad_economica" name="actividad_economica"><br><br>
         
          <label for="nombre_representanteLegal">Nombre del Representante Legal:</label><br>
            <input type="text" id="nombre_representanteLegal" name="nombre_representanteLegal"><br><br>
         
                    
      </div>
    </div>
      <br><br>
      <hr>
      <br> <h4 style="text-align: center">CONTACTOS</h4><br>
    <div class="columnas">
      <div class="columna">
          
            <label for="contacto_contable">Contacto Contable:</label><br>
            <input type="text" id="contacto_contable" name="contacto_contable"><br><br>
           <label for="contacto_comercial">Contacto Comercial:</label><br>
            <input type="text" id="contacto_comercial" name="contacto_comercial"><br><br>
            <label for="nombre_otro">Otro:</label><br>
            <input type="text" id="nombre_otro" name="nombre_otro"><br><br>

           
      </div>
      <div class="columna">
         
         <label for="cargo_contable">Cargo Contable:</label><br>
            <input type="text" id="cargo_contable" name="cargo_contable"><br><br>
          <label for="cargo_comercial">Cargo Comercial:</label><br>
            <input type="text" id="cargo_comercial" name="cargo_comercial"><br><br>
          <label for="cargo_otro">Cargo :</label><br>
            <input type="text" id="cargo_otro" name="cargo_otro"><br><br>   

      </div>
      <div class="columna">
          <label for="correo_contable">Correo Contable:</label><br>
            <input type="text" id="correo_contable" name="correo_contable"><br><br>
          <label for="correo_comercial">Correo Comercial:</label><br>
            <input type="text" id="correo_comercial" name="correo_comercial"><br><br>
          <label for="correo_otro">Correo :</label><br>
            <input type="text" id="correo_otro" name="correo_otro"><br><br>
       
      </div>
    </div> 
      <br>
      <br>
       <hr>
      <br>
    
      
      <div class="columnas2">
      <div class="columna2">
          <h4>PRODUCTOS / SERVICIOS OFRECIDOS/REQUERIDOS</h4>
         
          <br>
            
            <input type="text" id="producto1" name="producto1"><br><br>
           
            <input type="text" id="producto2" name="producto2"><br><br>
           
            <input type="text" id="producto3" name="producto3"><br><br>

           
      </div>
      <div class="columna2">
        

          <h4>MARCA</h4>
        <br>
        <br>
            <input type="text" id="marca1" name="marca1"><br><br>
         
            <input type="text" id="marca2" name="marca2"><br><br>
        
            <input type="text" id="marca3" name="marca3"><br><br>   

      </div>
      
    </div> 
     

         <div class="columnas2">
      <div class="columna2">
            <label for="t_garantia">T Garantia:</label><br>
            <input type="text" id="t_garantia" name="t_garantia"><br><br>      
      </div>
      <div class="columna2">
        
         <label for="poliza">Póliza:</label><br>
            <input type="text" id="poliza" name="poliza"><br><br>
 <br>   
 <br>
 
      </div>
      
    </div>
               <hr><hr>
          
   
 <br><h2>2. INFORMACION FISCAL</h2>
       <br> <br>
         <div class="columnas2">
      <div class="columna2">
            <label for="codigo_actividad">Código Actividad Comercial CIIU:</label><br>
  <input type="text" id="codigo_actividad" name="codigo_actividad"><br><br>
          
          <label for="autorretenedor">Autorretenedor:</label><br>
        <select id="autorretenedor" name="autorretenedor">
            <option value="">Seleccione la Opcion</option>
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>
          <br>
          <br>
       
                <label for="autorretenedor">No. Resolucion:</label><br>
                <input type="text" id="text" name="resolucion1" placeholder="N° Resolucion"><br><br>
          
                    <label for="autorretenedor">Fecha:</label><br>
          <input type="date"  name="fecha1" placeholder="fecha"><br><br><br>
          
          <label for="anexar_resolucion">Anexar Resolución(es):</label><br>
          <textarea id="anexar_resolucion" name="anexar_resolucion" style=" width: 350px; height: 100px" ></textarea><br><br><br><br>
          <br>
      </div>
             <div class="separador"></div>
      <div class="columna2">
        
           <label for="descripcionCIIU">Descripción CIIU:</label><br>
  <input type="text" id="descripcionCIIU" name="descripcionCIIU"><br><br>
          
          
           <label for="responsable_iva">Responsable de IVA:</label><br>
 <select name="responsable_iva"  placeholder="Responsable de IVA">
  <option value="">Seleccione la Opcion</option>
    <option value="si">Sí</option>
    <option value="no">No</option>
  </select>
          <br>
          <br>
            <label for="gran_contribuyente">Gran Contribuyente:</label><br>
          <select  name="gran_contribuyente"  >
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
          <br>
       
                    <label for="autorretenedor">No. Resolucion:</label><br>
  <input type="text" id="text" name="resolucion2" placeholder="N° Resolucion"><br><br>
          
                    <label for="autorretenedor">Fecha:</label><br>
          <input type="date"  name="fecha2" placeholder="fecha"><br>
 <br>   
 <br>
 <br>
 
      </div>
      
    </div>
       <hr>
      <br>
      <br>
      <div class="div-centrado">
      <label for="tarifa_correspondiente">SI ES PROVEEDOR Y/O ACREDEDOR DE BOGOTA, SELECCIONE LA TARIFA CORRESPONDIENTE A LAS ACTIVIDADES REGISTRADAS EN INDUSTRIA Y COMERCIO, DE LO CONTRARIO SELECCIONE N/A::</label><br><br>
          <div class="radio-buttons" name="tarifa_correspondiente" id="tarifa_correspondiente">
                        <input type="radio" id="tarifa_100" name="tarifa_correspondiente" value="100">
                        <label for="tarifa_100"  class="radio-label">4,14 POR MIL</label>
                        <span class="checkmark"></span>
                        <input type="radio" id="tarifa_200" name="tarifa_correspondiente" value="200">
                        <label for="tarifa_200"   class="radio-label">6,9 POR MIL </label>
                        <span class="checkmark"></span>
                        <input type="radio" id="tarifa_500" name="tarifa_correspondiente" value="500">
                        <label for="tarifa_500"   class="radio-label">9,66 POR MIL </label>
                        <span class="checkmark"></span>
                        <input type="radio" id="tarifa_200" name="tarifa_correspondiente" value="200">
                        <label for="tarifa_200"  class="radio-label">11,04 POR MIL </label>
                        <span class="checkmark"></span>
                        <input type="radio" id="tarifa_500" name="tarifa_correspondiente" value="500">
                        <label for="tarifa_500"  class="radio-label">13,8 POR MIL  </label>
                        <span class="checkmark" ></span>
                        <input type="radio" id="tarifa_500" name="tarifa_correspondiente" value="500">
                        <label for="tarifa_500"  class="radio-label">N/A  </label>
                        <span class="checkmark" ></span><br><br>
          </div>
      </div>
<br>
      <br>
      <hr>
      <hr>
      
     
 <br><h2>3. INFORMACION FINANCIERA  </h2>
       <br> <br>
      <div class="columnas">
      <div class="columna">
           <label for="titular_cuenta">Titular de la Cuenta:</label><br>
  <input type="text" id="titular_cuenta" name="titular_cuenta"><br><br>

  <label for="banco">Banco:</label><br>
  <input type="text" id="banco" name="banco"><br><br>

  <label for="codigo">Código:</label><br>
  <input type="text" id="codigo" name="codigo"><br><br>

          

 </div>
     <div class="columna">
           <label for="tipo_cuenta">Tipo de Cuenta:</label><br>
  <select id="tipo_cuenta" name="tipo_cuenta">
    <option value="">Seleccione la opcion</option>
    <option value="corriente">Corriente</option>
    <option value="ahorros">Ahorros</option>
  </select><br><br>

  <label for="numero_cuenta">Número de Cuenta:</label><br>
  <input type="text" id="numero_cuenta" name="numero_cuenta"><br><br>  
        
 </div>
     <div class="columna">
    <label for="modalidad_pago">Modalidad de Pago:</label><br>
  <select id="modalidad_pago" name="modalidad_pago">
    <option value="">Seleccione la opcion</option>
    <option value="Contado">Contado</option>
    <option value="30Dias">30 Dias</option>
    <option value="60Dias">60 Dias</option>
  </select>
<br><br>  
  <label for="cupo_credito">Cupo de Crédito Ofrecido:</label><br>
  <input type="text" id="cupo_credito" name="cupo_credito"><br><br>
               
      </div>
    </div>
      
      <br>
      <br>
      <hr>
      <hr>
       <br>
     
      
      
      <h2>4.  CALIDAD DE PRODUCTOS/SERVICIOS (Sistemas de Gestión Implementados)  </h2>
      <br>
   
      <div class="div-centrado">
      <label for="tarifa_correspondiente">La empresa tiene certificaciones acreditadas de:</label><br><br>
           <textarea id="anexar_resolucion" name="anexar_resolucion" style=" width: 700px; height: 50px" ></textarea>
      </div>
      <br><br>
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
      <td>
        <input type="radio" id="gestion_calidad" name="gestion_calidad" value="si">
        <label for="si1"  class="radio-label">Sí</label>
        <input type="radio" id="gestion_calidad" name="gestion_calidad" value="no">
        <label for="no1"   class="radio-label"> No</label><br>
        <input type="radio" id="gestion_calidad" name="gestion_calidad" value="na">
        <label for="na1"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observaciones1" name="observaciones1" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>Sistema de Gestión de Medio Ambiente</td>
      <td>
        <input type="radio" id="gestion_ambiente" name="gestion_ambiente" value="si">
        <label for="si2"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_ambiente" name="gestion_ambiente" value="no">
        <label for="no2"   class="radio-label">No</label><br>
        <input type="radio" id="gestion_ambiente" name="gestion_ambiente" value="na">
        <label for="na2"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observaciones2" name="observaciones2" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>Sistema de Gestión de Salud y Seguridad en el Trabajo</td>
      <td>
        <input type="radio" id="gestion_saludSeguridad" name="gestion_saludSeguridad" value="si">
        <label for="si3"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_saludSeguridad" name="gestion_saludSeguridad" value="no">
        <label for="no3"   class="radio-label">No</label><br>
        <input type="radio" id="gestion_saludSeguridad" name="gestion_saludSeguridad" value="na">
        <label for="na3"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observaciones3" name="observaciones3" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>Sistema de Gestión de Seguridad de la Cadena de Suministro</td>
      <td>
        <input type="radio" id="gestion_seguridad" name="gestion_seguridad" value="si">
        <label for="si4"   class="radio-label">Sí</label>
        <input type="radio" id="gestion_seguridad" name="gestion_seguridad" value="no">
        <label for="no4"   class="radio-label">No</label><br>
        <input type="radio" id="gestion_seguridad" name="gestion_seguridad" value="na">
        <label for="na4"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observaciones4" name="observaciones4" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>WRAP (Sistema de Gestión de cumplimiento social que promueve la fabricación segura, legal, humana y ética) </td>
      <td>
        <input type="radio" id="wrap" name="wrap" value="si">
        <label for="si5"   class="radio-label">Sí</label>
        <input type="radio" id="wrap" name="wrap" value="no">
        <label for="no5"   class="radio-label">No</label><br>
        <input type="radio" id="wrap" name="wrap" value="na">
        <label for="na5"   class="radio-label">N/A</label>
      </td>
      <td><textarea id="observaciones5" name="observaciones5" rows="2" cols="30"></textarea></td>
    </tr>
  </tbody>
</table>
      
       <br>
      <br>
      <hr>
      <hr>
      <p>Declaro que la información consignada y anexa a este formulario es veraz y admito que cualquier omisión o inexactitud en estos documentos podrá ocasionar el rechazo de esta solicitud, la devolución de la documentación y la cancelación de la inscripción  y nos comprometemos a actualizarla en los tiempos establecidos por su organización.  Declaro que la actividad, profesión u oficio de la empresa es licita y se ejerce dentro del marco legal, además, que los recursos poseídos no provienen de actividades ilícitas de acuerdo con el Código Penal Colombiano. Los recursos (económicos, humanos, etc.) que se deriven del desarrollo de la actividad comercial, no se destinarán a la financiación del terrorismo, grupos terroristas o actividades ilícitas. Dentro  de  los  términos  de  la  Ley  y sus  decretos  reglamentarios,  autorizo  a FRANCISCO A. ROCHA ALVARADO S.A.S. para consultar  y  verificar  los  datos  en  centrales de información y/o base de datos nacionales colombianas, extranjeras o internacionales, correspondientes a la persona jurídica que represento, a sus representantes legales, revisores fiscales, miembros de junta directiva y/o socios.  De igual manera autorizo consignar en las cuentas bancarias, registradas en este formulario, los pagos que su compañía tenga a nuestro favor y que dentro de los términos legales establecidos, se puedan almacenar y administrar los datos suministrados en este formato.</p>
      <br>
      <p>Proveedores/Clientes de acuerdo a lo establecido en la Ley 1581 de 2012 y el Decreto 1377 de 2013 desarrolla el principio constitucional que tienen todas las personas a conocer, actualizar y rectificar todo tipo de información recogida o que haya sido objeto de tratamiento de datos personales en bancos o bases de datos y en general en archivos de entidades públicas y/o privadas.  FRANCISCO A. ROCHA ALVARADO S.A.S. como institución que almacena y recolecta datos personales requiere obtener su autorización para que de manera libre, previa, expresa, voluntaria y debidamente informada, permita a todas las dependencias académicas y/o administrativas recolectar, recaudar, almacenar, usar, circular, suprimir, procesar, compilar, intercambiar, dar tratamiento, actualizar y disponer de los datos que han sido suministrados y que se han incorporado en distintas bases o bancos de datos, o en repositorios electrónicos de todo tipo con que cuenta  FRANCISCO A. ROCHA ALVARADO S.A.S.  Esta información es y será́  utilizada en el desarrollo de las funciones propias de una sociedad comercial, de forma directa o a través de terceros, además de servir para la prevención, detección, monitoreo y control del lavado de activos y la financiación del terrorismo.  Manifiesto que en el caso de recolección de mi información sensible, tengo derecho a contestar o no las preguntas que me formulen y a entregar o no los datos solicitados.  Entiendo que son datos sensibles aquellos que afectan la intimidad del titular o cuyo uso indebido puede generar discriminación.  Por lo anterior, AUTORIZO a FRANCISCO A. ROCHA ALVARADO S.A.S. en los términos dispuestos por el Articulo 10 del Decreto 1377 de 2013 queda autorizada de manera expresa e inequívoca para mantener y manejar toda su información, a no ser que Usted le manifieste lo contrario de manera directa, expresa, inequívoca y por escrito dentro de los treinta (30) días contados a partir de la recepción de la presente comunicación a la cuenta de correo electrónico dispuesta para tal efecto mediante comunicación escrita: extractosfr@franciscorocha.com. Acepto y autorizo de manera expresa e inequívoca que mis datos personales sean tratados conforme a lo previsto en el presente documento.</p>
      <hr>
      
      <hr>
       <br>
     
      
      
      <h2>5. DOCUMENTACION</h2>
   
      <br><br>
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
       <input type="file" id="inputOculto" name="fotocopia_cedula" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox">

      </td>
      <td><textarea id="observ_1" name="observ_1" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>CERTIFICADO DE CAMARA Y COMERCIO VIGENTE (No mayor a 60 días)</td>
      <td>
       <input type="file" id="inputOculto2" name="certificado_camara" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox2">
      </td>
      <td><textarea id="observ_2" name="observ_2" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>FOTOCOPIA DEL RUT (ACTUALIZADO)</td>
      <td>
        <input type="file" id="inputOculto3" name="fotocopia_rut" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox3">
      </td>
      <td><textarea id="observ_3" name="observ_3" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>SI ES ENTIDAD VIGILADA POR SFC: ORIGINAL DEL CERTIFICADO DE EXISTENCIA Y REPRESENTACIÓN LEGAL EXPEDIDO POR LA SUPERINTENDENCIA FINANCIERA DE COLOMBIA (No mayor a 90 días)</td>
      <td>
        <input type="file" id="inputOculto4" name="certificado_existencia" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox4">
      </td>
      <td><textarea id="observ_4" name="observ_4" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>RESOLUCIÓN DE FACTURACIÓN</td>
      <td>
        <input type="file" id="inputOculto5" name="resolucion_facturacion" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox5">
      </td>
      <td><textarea id="observ_5" name="observ_5" rows="2" cols="30"></textarea></td>
    </tr>
      <tr>
      <td>CERTIFICACIÓN BANCARIA EXPEDIDA POR EL BANCO PARA PAGOS POR TRANSFERENCIA. (ORIGINAL)</td>
      <td>
       <input type="file" id="inputOculto6" name="certificacion_bancaria" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox6">

      </td>
      <td><textarea id="observ_6" name="observ_6" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>ESTADOS FINANCIEROS DEL ÚLTIMO PERIODO GRAVABLE</td>
      <td>
       <input type="file" id="inputOculto7" name="estados_financieros" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox7">
      </td>
      <td><textarea id="observ_7" name="observ_7" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>COPIA DE LA DECLARACIÓN DE RENTA DEL ÚLTIMO PERIODO GRAVABLE DISPONIBLE</td>
      <td>
        <input type="file" id="inputOculto8" name="declaracion_renta" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox8">
      </td>
      <td><textarea id="observ_8" name="observ_8" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>APODERADO: SI LA PERSONA JURÍDICA ACTÚA POR INTERMEDIO DE UN APODERADO, DEBERÁ ADJUNTAR ORIGINAL DEL PODER CON RECONOCIMIENTO DE FIRMA ANTE NOTARIO Y EN EL CASO DONDE SE PRESENTE UNO O MÁS BENEFICIARIOS, DEBEN QUEDAR REGISTRADOS EN EL PODER Y EN ESTE DOCUMENTO.</td>
      <td>
        <input type="file" id="inputOculto9" name="apoderado" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox9">
      </td>
      <td><textarea id="observ_9" name="observ_9" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>PARA EMPRESAS CERTIFICADAS: FOTOCOPIA DE CERTIFICADO ISO 9001, 14001,18001, ISO 28000, BASC, OEA VIGENTES (en caso de no estar certificados en ISO28000, BASC u OEA, diligenciar formato adjunto de Acuerdo de Seguridad RILO-10 ) O CERTIFICACIONES DE PARTICIPACIPACIÓN EN EL PROGRAMA DE GESTIÓN AMBIENTAL EMPRESARIAL GAE LIDERADO POR LA SECRETARÍA DISTRITAL DE AMBIENTE O PISA LIDERADO POR LA SECRETARÍA DISTRITAL DE SALUD</td>
      <td>
        <input type="file" id="inputOculto10" name="certificado_iso" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox10">
      </td>
      <td><textarea id="observ_10" name="observ_10" rows="2" cols="30"></textarea></td>
    </tr>
      <tr>
      <td>PLAN DE CONTINGENCIA DE TRANSPORTE</td>
      <td>
        <input type="file" id="inputOculto11" name="plan_contingencia" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox11">
      </td>
      <td><textarea id="observ_11" name="observ_11" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>RESOLUCIONES, PERMISOS, LICENCIAS, ENTRE OTROS, EMITIDOS POR LA ENTIDAD COMPETENTE, PARA REALIZACIÓN DE SU ACTIVIDAD ECONÓMICA</td>
      <td>
        <input type="file" id="inputOculto12" name="resoluciones_permisos" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox12">
      </td>
      <td><textarea id="observ_12" name="observ_12" rows="2" cols="30"></textarea></td>
    </tr>
    <tr>
      <td>DOS (2) REFERENCIAS COMERCIALES </td>
      <td>
        <input type="file" id="inputOculto13" name="referencias_comerciales" accept=".pdf"><br><label for="ocultarInput">N/A</label><input type="checkbox" id="ocultarInputCheckbox13">
      </td>
      <td><textarea id="observaciones13" name="observ_13" rows="2" cols="30"></textarea></td>
    </tr>
  </tbody>
</table>
      <script>
  // Obtener referencias a los elementos
  const checkbox = document.getElementById('ocultarInputCheckbox');
  const inputOculto = document.getElementById('inputOculto');

 

  // Agregar un event listener al checkbox
  checkbox.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox2 = document.getElementById('ocultarInputCheckbox2');
  const inputOculto2 = document.getElementById('inputOculto2');

 

  // Agregar un event listener al checkbox
  checkbox2.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto2.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto2.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox3 = document.getElementById('ocultarInputCheckbox3');
  const inputOculto3 = document.getElementById('inputOculto3');

 

  // Agregar un event listener al checkbox
  checkbox3.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto3.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto3.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox4 = document.getElementById('ocultarInputCheckbox4');
  const inputOculto4 = document.getElementById('inputOculto4');

 

  // Agregar un event listener al checkbox
  checkbox4.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto4.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto4.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox5 = document.getElementById('ocultarInputCheckbox5');
  const inputOculto5 = document.getElementById('inputOculto5');

 

  // Agregar un event listener al checkbox
  checkbox5.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto5.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto5.style.display = 'block';
    }
  });
</script>
       <script>
  // Obtener referencias a los elementos
  const checkbox6 = document.getElementById('ocultarInputCheckbox6');
  const inputOculto6 = document.getElementById('inputOculto6');

 

  // Agregar un event listener al checkbox
  checkbox6.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto6.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto6.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox7 = document.getElementById('ocultarInputCheckbox7');
  const inputOculto7 = document.getElementById('inputOculto7');

 

  // Agregar un event listener al checkbox
  checkbox7.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto7.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto7.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox8 = document.getElementById('ocultarInputCheckbox8');
  const inputOculto8 = document.getElementById('inputOculto8');

 

  // Agregar un event listener al checkbox
  checkbox8.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto8.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto8.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox9 = document.getElementById('ocultarInputCheckbox9');
  const inputOculto9 = document.getElementById('inputOculto9');

 

  // Agregar un event listener al checkbox
  checkbox9.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto9.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto9.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox10 = document.getElementById('ocultarInputCheckbox10');
  const inputOculto10 = document.getElementById('inputOculto10');

 

  // Agregar un event listener al checkbox
  checkbox10.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto10.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto10.style.display = 'block';
    }
  });
</script>
                  <script>
  // Obtener referencias a los elementos
  const checkbox11 = document.getElementById('ocultarInputCheckbox11');
  const inputOculto11 = document.getElementById('inputOculto11');

 

  // Agregar un event listener al checkbox
  checkbox11.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto11.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto11.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox12 = document.getElementById('ocultarInputCheckbox12');
  const inputOculto12 = document.getElementById('inputOculto12');

 

  // Agregar un event listener al checkbox
  checkbox12.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto12.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto12.style.display = 'block';
    }
  });
</script>
            <script>
  // Obtener referencias a los elementos
  const checkbox13 = document.getElementById('ocultarInputCheckbox13');
  const inputOculto13 = document.getElementById('inputOculto13');

 

  // Agregar un event listener al checkbox
  checkbox13.addEventListener('change', function() {
    // Verificar si el checkbox está marcado
    if (this.checked) {
      // Ocultar el input
      inputOculto13.style.display = 'none';
    } else {
      // Mostrar el input
      inputOculto13.style.display = 'block';
    }
  });
</script>
            
      
<br>
<br>
    <button type="submit">Registrarse</button>
  </form>
</div>
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
