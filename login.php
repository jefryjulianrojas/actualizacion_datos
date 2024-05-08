<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include('config.php');
       
   // Obtener datos del formulario y escaparlos
    $usuario = $link->real_escape_string($_POST["usuario"]);
    $contrasena = $link->real_escape_string($_POST["contrasena"]);


    // Consulta SQL parametrizada para verificar las credenciales
    $sql = "SELECT * FROM colaboradores WHERE usuario = ? AND contrasena = ?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // Inicio de sesión exitoso
        $usuario = $resultado->fetch_assoc();
        
        // Almacena la información del usuario en la sesión
        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["usuario_nombre"] = $usuario["nombre"];
        $_SESSION["usuario_tipo"] = $usuario["tipo_documento"];
        $_SESSION["usuario_contrasena"] = $usuario["contrasena"];
        $_SESSION["usuario_documento"] = $usuario["numero_documento"];
        $_SESSION["usuario_direccion"] = $usuario["direccion"];
        $_SESSION["usuario_ciudad"] = $usuario["ciudad"];
        $_SESSION["usuario_barrio"] = $usuario["barrio"];
        $_SESSION["usuario_localidad"] = $usuario["localidad"]; 
        $_SESSION["usuario_correo"] = $usuario["correo"]; 
        $_SESSION["usuario_celular"] = $usuario["celular"]; 
        $_SESSION["usuario_estado"] = $usuario["estado_civil"]; 
        $_SESSION["usuario_hijos"] = $usuario["tiene_hijos"]; 
        $_SESSION["usuario_contacto1"] = $usuario["nombre_contacto"]; 
        $_SESSION["usuario_parentesco1"] = $usuario["parentesco_contacto"]; 
        $_SESSION["usuario_telefono1"] = $usuario["telefono_contacto"]; 
        $_SESSION["usuario_contacto2"] = $usuario["nombre_contacto2"]; 
        $_SESSION["usuario_parentesco2"] = $usuario["parentesco_contacto2"]; 
        $_SESSION["usuario_telefono2"] = $usuario["telefono_contacto2"]; 
        // Redirige a la página de inicio o a donde desees
        if ($_SESSION["usuario_contrasena"] == $_SESSION["usuario_documento"]) {
            // El campo está vacío
             // Redirige a la página del formulario
                header("Location: contrasena_emp.php");
             exit();
               
        } else {
            // El campo no está vacío
            // Redirige a la página del formulario
                header("Location: index1.php");
                exit();
        }
        
        
       
    } else {
        $mensaje_error = "Usuario o contraseña incorrecta.";
    }

    // Cierra la conexión
    $stmt->close();
    $link->close();
}

?>





<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página de inicio de sesión</title>
<style>
               .styled {
    font-size: 16px;
  line-height: 1.5; /* Espacio entre líneas 1.5 veces el tamaño de la fuente */
  color: #666; /* Color de texto gris */
  margin-bottom: 20px; /* Margen inferior de 20px */
}
    .contenedor {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
        width: 100%;    
    background-image: url('images/datos.jpg'); /* Ruta de la imagen de fondo */
    background-size: cover; /* Cubrir toda la pantalla */
    background-position: center; /* Centrar la imagen */
         background-color: rgba(60, 60, 60, 1.5);
}
    
    .footer {
         font-size: 12px;
    background-color: #333; /* Color de fondo del footer */
    color: #fff; /* Color del texto */
    padding: 1px; /* Espaciado interno */
    text-align: center; /* Alinear texto al centro */
    position: fixed; /* Fijar el footer en la parte inferior */
    bottom: 0; /* Situar el footer al fondo de la página */
    width: 100%; /* Ancho del footer */
}

.footer a {
    color: #fff; /* Color de los enlaces en el footer */
    text-decoration: none; /* Quitar subrayado de los enlaces */
}

.footer a:hover {
    text-decoration: underline; /* Subrayado al pasar el ratón sobre los enlaces */
}
    
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .login-container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
  }

  .login-container h2 {
    margin-bottom: 20px;
    text-align: center;
  }

  .login-container input[type="text"],
  .login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }

  .login-container input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #762918;
    border: none;
    border-radius: 3px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .login-container input[type="submit"]:hover {
    background-color: #0056b3;
  }

  @media (max-width: 768px) {
    .login-container {
      width: 90%;
    }
  }
      .contene {
    display: flex;
    
   
justify-content: center; /* Centrar horizontalmente */
    
   
align-items: center; /* Centrar verticalmente */
    
   

}
</style>
</head>
<body>
<div class="contenedor">
<div class="login-container">
    
    <?php if (isset($mensaje_error)) : ?>
    <p style="color: red;"><?php echo $mensaje_error; ?></p>
<?php endif; ?>

  <h2>Iniciar sesión</h2>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
      
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="contrasena" placeholder="Contrasena">
      
    <input type="submit" value="Iniciar sesión">
      <br>
      <br>
      <div class="contene">
      <a href="index.php" style="text-decoration: none; color: black;">Regresar </a><br>
         </div>
      <br>
            <div class="contene">
      <a href="recuperar_contrasena.php" style="text-decoration: none; color: black;">Olvidaste tu contraseña?</a>
      </div>
  </form>
</div>
    </div>
</body>
    <!-- End Contact -->

 <footer class="footer">
        <p>2024 &copy; Todos los derechos reservados <a href="https://franciscorocha.com/site/" target="_blank" rel="dofollow">Francisco Rocha</a></p>
   
    
</footer>
</html>
