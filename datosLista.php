
<?php



// Initialize the session
session_start();
 

// Verificar si el usuario está autenticado
if (!isset($_SESSION["cliente_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: inicio.php");
  exit();

}
$id_cliente = $_SESSION["cliente_id"];
error_reporting(0);

$conn = new mysqli("localhost", "root","", "proveedores");

/*
* Script: Cargar datos de lado del servidor con PHP y MySQL
* Autor: Marco Robles
* Team: Códigos de Programación
*/




/* Un arreglo de las columnas a mostrar en la tabla */
$columns = ['proveedor.id_proveedor', 'proveedor.id_cliente', 'usuarios.id_cliente' ,'proveedor.nombre', 'proveedor.numero_identificacion', 'proveedor.telefono', 'proveedor.direccion', 'proveedor.actividad_economica', 'proveedor.fecha_registro', 'proveedor.cedula_representante' ,'proveedor.nombre_contactoProveedor', 'proveedor.objetivo'];

/* Nombre de la tabla */
$table = "usuarios  JOIN proveedor ON proveedor.id_cliente = usuarios.id_cliente";

$id = 'id_proveedor';

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

$condicion1= "proveedor.id_cliente='$id_cliente'";
/* Filtrado */
$where = '';

if ($campo != null) {
    $where = "WHERE ( ".$condicion1." AND (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= "))";
}

/* Limit */
$limit = isset($_POST['registros']) ? $conn->real_escape_string($_POST['registros']) : 10;
$pagina = isset($_POST['pagina']) ? $conn->real_escape_string($_POST['pagina']) : 0;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $limit;
}

$sLimit = "LIMIT $inicio , $limit";

/**
 * Ordenamiento
 */

 $sOrder = "";
 if(isset($_POST['orderCol'])){
    $orderCol = $_POST['orderCol'];
    $oderType = isset($_POST['orderType']) ? $_POST['orderType'] : 'desc';
    
    $sOrder = "ORDER BY ". $columns[intval($orderCol)] . ' ' . $oderType;
 }


/* Consulta */
$sql = "SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns) . "
FROM $table
$where
$sOrder
$sLimit";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

/* Consulta para total de registro filtrados */
$sqlFiltro = "SELECT FOUND_ROWS()";
$resFiltro = $conn->query($sqlFiltro);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro[0];

/* Consulta para total de registro filtrados */
$sqlTotal = "SELECT count($id) FROM $table ";
$resTotal = $conn->query($sqlTotal);
$row_total = $resTotal->fetch_array();
$totalRegistros = $row_total[0];

/* Mostrado resultados */
$output = [];
$output['totalRegistros'] = $totalRegistros;
$output['totalFiltro'] = $totalFiltro;
$output['data'] = '';
$output['paginacion'] = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $output['data'] .= '<tr>';
        $output['data'] .= '<td>' . $row['id_proveedor'] . '</td>';
        $output['data'] .= '<td>' . $row['numero_identificacion'] . '</td>';
        $output['data'] .= '<td>' . $row['nombre'] . '</td>';
        $output['data'] .= '<td>' . $row['direccion'] . '</td>';
        $output['data'] .= '<td>' . $row['telefono'] .  '</td>';
        $output['data'] .= '<td>' . $row['actividad_economica'] . '</td>';
        $output['data'] .= '<td>' . $row['nombre_contactoProveedor'] . '</td>';
        $output['data'] .= '<td><a target="_blank" href="imprimir.php?id=' . $row['id_proveedor'] . '">Acuerdo de Seguridad</a></td>';
        $output['data'] .= '<td><a target="_blank" href="imprimir2.php?id=' . $row['id_proveedor'] . '">Informacion Proveedores</a></td>';
       
         
    }
} else {
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="7">Sin resultados</td>';
    $output['data'] .= '</tr>';
}

if ($output['totalRegistros'] > 0) {
    $totalPaginas = ceil($output['totalRegistros'] / $limit);

    $output['paginacion'] .= '<nav>';
    $output['paginacion'] .= '<ul class="pagination">';

    $numeroInicio = 1;

    if(($pagina - 4) > 1){
        $numeroInicio = $pagina - 4;
    }

    $numeroFin = $numeroInicio + 9;

    if($numeroFin > $totalPaginas){
        $numeroFin = $totalPaginas;
    }

    for ($i = $numeroInicio; $i <= $numeroFin; $i++) {
        if ($pagina == $i) {
            $output['paginacion'] .= '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
        } else {
            $output['paginacion'] .= '<li class="page-item"><a class="page-link" href="#" onclick="nextPage(' . $i . ')">' . $i . '</a></li>';
        }
    }

    $output['paginacion'] .= '</ul>';
    $output['paginacion'] .= '</nav>';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
