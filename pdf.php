<?php
// Crear una carpeta con el nombre único basado en la fecha y hora actual
$carpeta_nombre = date("Y-m-d_H-i-s");
if (!file_exists($carpeta_nombre)) {
    mkdir($carpeta_nombre);
}

// Conectar a la base de datos MySQL
$conexion = new mysqli("localhost", "root", "", "archivo");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}

// Iterar sobre los archivos recibidos
foreach ($_FILES['archivos']['tmp_name'] as $key => $tmp_name) {
    $observaciones = $_POST['observaciones'][$key];
    $archivo_nombre = $_FILES['archivos']['name'][$key];
    $archivo_ruta = $carpeta_nombre . '/' . $archivo_nombre;

    // Mover el archivo a la carpeta única
    move_uploaded_file($_FILES['archivos']['tmp_name'][$key], $archivo_ruta);

    // Insertar información en la base de datos
    $sql = "INSERT INTO archivo (observaciones, nombre_archivo, ruta_archivo) VALUES ('$observaciones', '$archivo_nombre', '$archivo_ruta')";
    if ($conexion->query($sql) !== TRUE) {
        echo "Error al guardar el archivo en la base de datos: " . $conexion->error;
    }
}

// Cerrar conexión a la base de datos
$conexion->close();

echo "Archivos guardados exitosamente.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Adjuntar Archivos</title>
</head>
<body>
    <h2>Adjuntar Archivos PDF</h2>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
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
        <input type="submit" value="Enviar Archivos">
    </form>
</body>
</html>
