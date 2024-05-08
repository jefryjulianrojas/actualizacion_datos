<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Hijos</title>
</head>
<body>
    <h2>Formulario para Hijos</h2>
    <form id="formularioHijo">
        <div>
            <label for="nombreHijo">Nombre del Hijo:</label>
            <input type="text" id="nombreHijo" name="nombreHijo" required>
        </div>
        <div>
            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
        </div>
        <div>
            <label for="edadHijo">Edad del Hijo (años):</label>
            <input type="text" id="edadHijo" name="edadHijo" readonly>
        </div>
        <button type="submit">Guardar</button>
    </form>

    <!-- Script para calcular la edad -->
    <script>
        document.getElementById("fechaNacimiento").addEventListener("change", function() {
            var fechaNacimiento = new Date(this.value);
            var hoy = new Date();
            var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();
            var mes = hoy.getMonth() - fechaNacimiento.getMonth();
            if (mes < 0 || (mes === 0 && hoy.getDate() < fechaNacimiento.getDate())) {
                edad--;
            }
            document.getElementById("edadHijo").value = edad;
        });
    </script>
</body>
</html>
