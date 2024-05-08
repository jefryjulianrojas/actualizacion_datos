<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizador de Archivos</title>
    <style>
        /* Estilos para la lista de archivos */
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 5px;
        }
        li a {
            text-decoration: none;
            color: blue;
        }
          .oculto {
            margin-left: -9999px;
            position: absolute;
        }
        
    </style>
</head>
<body>
    <h1>Visualizador de Archivos</h1>
    <!-- Formulario para seleccionar un directorio -->
    <form action="" method="post">
        <label for="directorio">Selecciona un directorio:</label>
        <input type="hidden" id="directorio" name="directorio" value="archivos_adjuntos" placeholder="Ruta del directorio">
        <button type="submit">Mostrar archivos</button>
    </form>
    
    <!-- Lista de archivos -->
    <ul id="lista-archivos">
        <?php
        // Verifica si se envió una solicitud POST y si se proporcionó una ruta de directorio
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['directorio'])) {
            $directorio = $_POST['directorio'];

            // Escanear el directorio y mostrar los archivos
            if (is_dir($directorio)) {
                $archivos = scandir($directorio);
                foreach ($archivos as $archivo) {
                    if ($archivo != '.' && $archivo != '..') {
                        echo '<li><a href="#" class="archivo" data-url="' . $directorio . '/' . $archivo . '">' . $archivo . '</a></li>';
                    }
                }
            } else {
                echo '<li>No se encontró el directorio</li>';
            }
        }
        ?>
    </ul>

    <!-- Contenedor para la vista previa del PDF -->
    <div id="vista-previa-pdf"></div>

    <!-- Script para mostrar vista previa de PDF -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var archivosPDF = document.querySelectorAll('.archivo');
            archivosPDF.forEach(function(archivo) {
                archivo.addEventListener('click', function(event) {
                    event.preventDefault();
                    var url = this.getAttribute('data-url');
                    mostrarVistaPreviaPDF(url);
                });
            });

            function mostrarVistaPreviaPDF(url) {
                var visorPDF = document.getElementById('vista-previa-pdf');
                visorPDF.innerHTML = '<embed src="' + url + '" type="application/pdf" width="100%" height="600px" />';
            }
        });
    </script>
</body>
</html>
