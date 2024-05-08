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
$nivel_educativo = $_POST['nivel_educativo'];
$nombre_programa = $_POST['nombre_programa'];
$institucion = $_POST['institucion'];
$fecha_inicio = $_POST['fecha_inicio'];
$finalizado = $_POST['finalizado'];
$fin = $_POST['fecha_fin'];
$id_colaborador = $_POST['idColaborador'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO educacion (id_programa, nivel_educativo, nombre_programa, institucion, fecha_inicio, finalizado, fecha_fin , idColaborador)
        VALUES (NULL, '$nivel_educativo', '$nombre_programa', '$institucion', '$fecha_inicio', '$finalizado', '$fin' ,'$id_colaborador')";

 
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