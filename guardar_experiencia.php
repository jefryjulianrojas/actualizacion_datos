<?php


session_start();
 
// Verificar si el usuario está autenticado
if (!isset($_SESSION["usuario_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: login.php");
  exit();
}

include ("config.php");

// Verificar la conexión
if ($link->connect_error) {
    die("Conexión fallida: " . $link->connect_error);
}

// Obtener los datos del formulario
$nombre_empresa = $_POST['nombre_empresa'];
$cargo = $_POST['cargo'];
$funciones = $_POST['funciones'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_finalizado = $_POST['fecha_fin'];
$id_colaborador = $_POST['idColaborador'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO experiencia (id_experiencia, nombre_empresa, cargo , funciones, fecha_inicio, fecha_fin, idColaborador)
        VALUES (NULL ,'$nombre_empresa', '$cargo', '$funciones', '$fecha_inicio', '$fecha_finalizado','$id_colaborador')";

 
            $resultado=mysqli_query($link,$sql);

            if($resultado){
        echo "<script language='JavaScript'>
            alert('Registro Exitoso');
            location.assign('datos.php');
            </script>";;
                
            

        }else{
        echo "<script language='JavaScript'>
            alert('Error, Registro Invalido ');
            location.assign('datos.php');
            </script>";
        }
            mysqli_close($link);
?>