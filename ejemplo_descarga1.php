<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ruta de la carpeta que deseas comprimir y descargar
    $rutaCarpeta = $_POST["ruta_carpeta"];

    // Verificar si la carpeta existe
    if (is_dir($rutaCarpeta)) {
        // Nombre del archivo ZIP que se va a generar
        $archivoZip = 'carpeta_comprimida.zip';

        // Crear un objeto ZipArchive
        $zip = new ZipArchive();

        // Intentar abrir o crear el archivo ZIP
        if ($zip->open($archivoZip, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            // Agregar todos los archivos y subdirectorios de la carpeta al archivo ZIP
            $archivos = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($rutaCarpeta));
            foreach ($archivos as $archivo) {
                // Excluir el archivo ZIP en sí mismo
                if (substr($archivo, -1) == '.') continue;
                
                // Ruta relativa de los archivos dentro del ZIP
                $archivoLocal = str_replace($rutaCarpeta . '/', '', $archivo);
                
                // Agregar el archivo al ZIP
                $zip->addFile($archivo, $archivoLocal);
            }

            // Cerrar el archivo ZIP
            $zip->close();

            // Enviar el archivo ZIP al navegador
            header("Content-type: application/zip");
            header("Content-Disposition: attachment; filename=$archivoZip");
            readfile($archivoZip);

            // Eliminar el archivo ZIP después de descargarlo
            unlink($archivoZip);
            
            exit();
        } else {
            echo 'No se pudo crear el archivo ZIP';
        }
    } else {
        echo 'La carpeta especificada no existe';
    }
}
?>
