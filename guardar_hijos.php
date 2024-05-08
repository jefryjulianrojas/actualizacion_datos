<?php


session_start();
 
// Verificar si el usuario está autenticado
if (!isset($_SESSION["usuario_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: login.php");
  exit();
}
$numero = $_SESSION["usuario_documento"];
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombreHijo'];
$fechaNacimiento = $_POST['fecha_nacimiento'];
$edad = $_POST['edad'];

if(isset($_FILES['archivo_adjunto']) && $_FILES['archivo_adjunto']['error'] === UPLOAD_ERR_OK) {
    $nombreArchivoOriginal = $_FILES['archivo_adjunto']['name'];
    $nombrePersonalizado = $numero ; // Aquí puedes definir el nombre que desees
    $extension = pathinfo($nombreArchivoOriginal, PATHINFO_EXTENSION); // Obtenemos la extensión del archivo original
    $nombreArchivo = $nombrePersonalizado . '.' . $extension; // Concatenamos el nombre personalizado con la extensión
    $rutaTemporal = $_FILES['archivo_adjunto']['tmp_name'];
    $rutaDestino = 'archivos/' . $nombreArchivo;

    $id_colaborador = $_POST['id'];

    // Mover el archivo a la carpeta de destino
    if(move_uploaded_file($rutaTemporal, $rutaDestino)) {
        echo "El archivo se subió correctamente.";
    } else {
        echo "Hubo un error al subir el archivo.";
    }
} else {
    echo "No se ha seleccionado ningún archivo o ha ocurrido un error al subirlo.";
    $rutaDestino = NULL;
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO hijos (id_hijo, nombreHijo, fecha_nacimiento, edad ,archivo_adjunto, idColaborador) VALUES (Null, '$nombre', '$fechaNacimiento', '$edad','$rutaDestino', '$id_colaborador')";

if ($conn->query($sql) === TRUE) {
      echo "<script language='JavaScript'>
         alert('Los datos fueron actualizados de manera correcta ');
         location.assign('datos.php');
         </script>";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}


// Cerrar conexión
$conn->close();
?>
