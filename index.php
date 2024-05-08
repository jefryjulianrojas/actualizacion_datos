<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Página con Botones</title>
  <style>
    
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f0f0f0;
}
      footer {
    background-color: #333333;
    color: #fff;
    text-align: center;
    padding: 0px 0; /* Añade espacio de relleno arriba y abajo del footer */
    width: 100%;
    bottom: 0; /* Fija el footer en la parte inferior */
    position: fixed; /* Fija el footer en la parte inferior de la ventana */
}

.container {
      font-size: 18px;
  text-align: center;
  padding-top: 100px;
}
      
      p {
  margin: 20px 200px;   /* Márgen izquierdo de 10px */
}


.button-wrapper {
  margin-top: 20px;
}

.button {
  display: inline-block;
  padding: 20px 40px;
  font-size: 18px;
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  border-radius: 10px;
  transition: background-color 0.3s;
    
}

.button:hover {
  background-color: #0056b3;
}
      
     .buttons {
  display: flex;
  justify-content: center;
}

.btn {
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin: 0 10px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #ddd;
    color: black;
}

.empleado {
  background-color: #4CAF50;
  color: white;
}

.proveedor {
  background-color: #008CBA;
  color: white;
}

.responsable {
  background-color: #f44336;
  color: white;
} 
      
      h1 {
  
 
font-size: 75px;
  
 
font-weight: bold;
  
 
color: #333; /* Color de texto negro */
  margin-bottom: 10px; /* Margen inferior de 10px */
}

/* Estilos para etiqueta p */
p {
  font-size: 24px;
  line-height: 1.5; /* Espacio entre líneas 1.5 veces el tamaño de la fuente */
  color: #666; /* Color de texto gris */
  margin-bottom: 20px; /* Margen inferior de 20px */
}
      
      .styled  {
  font-size: 14px;
  line-height: 1.5; /* Espacio entre líneas 1.5 veces el tamaño de la fuente */
  color: #666; /* Color de texto gris */
  margin-bottom: 20px; /* Margen inferior de 20px */
}
      
      
</style>
</head>
<body>
  <div class="container">
    <h1>¡Bienvenido!</h1>
      <p>¡Te damos la bienvenida a la plataforma de gestión integral de Francisco A Rocha Alvarado SAS! Estamos entusiasmados de recibirte en nuestro sistema diseñado para simplificar y mejorar la gestión de datos de empleados y proveedores. Con nosotros, puedes mantener actualizada de manera eficiente y segura la información esencial de tu equipo y asociados comerciales. Nuestra plataforma ofrece la flexibilidad necesaria para gestionar los detalles de empleados y proveedores de forma centralizada e intuitiva. Ya sea que necesites actualizar los datos de contacto de un proveedor clave o incorporar nuevos miembros al equipo, estamos aquí para que el proceso sea lo más fluido posible. </p>

<p>Además de una interfaz fácil de usar, nos comprometemos a garantizar la seguridad de tus datos en todo momento. Nuestros sistemas cumplen con los más altos estándares de seguridad para proteger la confidencialidad e integridad de la información en la que confiamos. Estamos aquí para ayudarte a optimizar tus operaciones y simplificar la gestión de datos. Agradecemos tu elección de nuestra plataforma de gestión integral y esperamos que tengas una experiencia excepcional mientras trabajas con nosotros.</p>
      <br>
      <br>
    <div class="buttons">
      <a href="login.php" style="text-decoration: none;" class="btn empleado">Soy Empleado</a>
      <a href="loginp.php" style="text-decoration: none;" class="btn proveedor">Soy Proveedor</a>
      <a href="loginc.php" style="text-decoration: none;" class="btn responsable">Soy Responsable</a>
    </div>
  </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br> <br>
    <br>
    <br>
    <br>
    <br>
    <footer >
        <p class="styled" style="color:white;">2024 &copy; Todos los derechos reservados a | <a style="color:white; text-decoration: none;" href="https://franciscorocha.com/site/" target="_blank" rel="dofollow">Francisco Rocha</a></p>
   
    
</footer>
</body>
</html>
