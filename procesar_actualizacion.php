<?php
// Conexión a la base de datos

session_start();
 
// Verificar si el usuario está autenticado
if (!isset($_SESSION["usuario_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: login.php");
  exit();
}
         $id= $_SESSION["usuario_id"];
include ("config.php");
 
    $direccion = $_POST["direccion"];
    $ciudad =  $_POST["ciudad"];
    $barrio = $_POST["barrio"];
    $localidad = $_POST["localidad"];
    $correo = $_POST["correo"];
    $celular =$_POST["celular"];
    $estado_civil =  $_POST["estado_civil"];
    $tiene_hijos =  $_POST["tiene_hijos"];
    $nombre_contacto =  $_POST["nombre_contacto"];
    $parentesco_contacto = $_POST["parentesco_contacto"];
    $telefono_contacto = $_POST["telefono_contacto"];
    $nombre_contacto2 = $_POST["nombre_contacto2"];
    $parentesco_contacto2 = $_POST["parentesco_contacto2"];
    $telefono_contacto2 = $_POST["telefono_contacto2"];
    





// Consulta SQL para actualizar los datos en la tabla
$sql= "UPDATE colaboradores SET direccion='$direccion', ciudad='$ciudad', barrio='$barrio', localidad='$localidad' , correo='$correo', celular='$celular', estado_civil='$estado_civil', tiene_hijos='$tiene_hijos' ,nombre_contacto='$nombre_contacto', parentesco_contacto='$parentesco_contacto', telefono_contacto='$telefono_contacto',nombre_contacto2='$nombre_contacto2', parentesco_contacto2='$parentesco_contacto2', telefono_contacto2='$telefono_contacto2' WHERE id='$id' ";

// Ejecutar la consulta
if ($link->query($sql) === TRUE) {
      echo "<script language='JavaScript'>
         alert('Los datos fueron actualizados de manera correcta ');
         location.assign('datos.php');
         </script>";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}

// Cerrar la conexión
$link->close();
?>