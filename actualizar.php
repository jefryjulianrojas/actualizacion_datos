<?php

// Initialize the session
session_start();
 
// Verificar si el usuario está autenticado
if (!isset($_SESSION["proveedor_id"])) {
  // Si no está autenticado, redirige a la página de inicio de sesión
  header("Location: inicio.php");
  exit();

}
 $id = $_SESSION["proveedor_id"];
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root","", "proveedores");


// Obtener los datos actualizados del formulario


$nombre = $_POST['nombre'];
$tipo_persona = $_POST['tipo_persona'];
$numero_identificacion = $_POST['numero_identificacion'];
$carpeta_nombre= $_POST['numero_identificacion'];
$DV = $_POST['DV'];
$usuario=$_POST['numero_identificacion'];
$contrasena=$_POST['numero_identificacion'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$direccion_residencia = $_POST['direccion_residencia'];
$ciudad = $_POST['ciudad'];
$nombre_contactoProveedor = $_POST['nombre_contactoProveedor'];
$cargo = $_POST['cargo'];
$nombre_representanteLegal = $_POST['nombre_representanteLegal'];
$actividad_economica = $_POST['actividad_economica'];
$tipo_empresa = $_POST['tipo_empresa'];
$cedula_representante = $_POST['cedula_representante'];
$objetivo = $_POST['objetivo'];
$empresa_labora = $_POST['empresa_labora'];
$contacto_empresa = $_POST['contacto_empresa'];
$contacto_contable = $_POST['contacto_contable'];
$cargo_contable = $_POST['cargo_contable'];
$correo_contable = $_POST['correo_contable'];
$contacto_comercial = $_POST['contacto_comercial'];
$cargo_comercial = $_POST['cargo_comercial'];
$correo_comercial = $_POST['correo_comercial'];
$nombre_otro = $_POST['nombre_otro'];
$cargo_otro = $_POST['cargo_otro'];
$correo_otro = $_POST['correo_otro'];
$producto1 = $_POST['producto1'];
$marca1 = $_POST['marca1'];
$producto2 = $_POST['producto2'];
$marca2 = $_POST['marca2'];
$producto3 = $_POST['producto3'];
$marca3 = $_POST['marca3'];
$t_garantia = $_POST['t_garantia'];
$poliza = $_POST['poliza'];
$fecha_registro = $_POST['fecha_registro'];


//informacion fiscal

$codigo_actividad = $_POST['codigo_actividad'];
$autorretenedor = $_POST['autorretenedor'];
$resolucion1 = $_POST['resolucion1'];
$fecha1 = $_POST['fecha1'];
$descripcionCIIU = $_POST['descripcionCIIU'];
$responsable_iva  = $_POST['responsable_iva'];
$gran_contribuyente  = $_POST['gran_contribuyente'];
$regimen_simple  = $_POST['regimen_simple'];
$resolucion2 = $_POST['resolucion2'];
$fecha2 = $_POST['fecha2'];
$anexar_resolucion = $_POST['anexar_resolucion'];
$tarifa_correspondiente = $_POST['tarifa_correspondiente'];

//informacion financiero

$titular_cuenta = $_POST['titular_cuenta'];
$banco = $_POST['banco'];
$codigo = $_POST['codigo'];
$tipo_cuenta = $_POST['tipo_cuenta'];
$numero_cuenta = $_POST['numero_cuenta'];
$modalidad_pago  = $_POST['modalidad_pago'];
$cupo_credito = $_POST['cupo_credito'];


//certificaciones

$certificaciones_acreditadas = $_POST['certificaciones_acreditadas'];
$gestion_calidad  = $_POST['gestion_calidad'];
$observaciones1 = $_POST['observaciones1'];
$gestion_ambiente = $_POST['gestion_ambiente'];
$observaciones2 = $_POST['observaciones2'];
$gestion_saludSeguridad = $_POST['gestion_saludSeguridad'];
$observaciones3 = $_POST['observaciones3'];
$gestion_seguridad = $_POST['gestion_seguridad'];
$observaciones4 = $_POST['observaciones4'];
$wrap = $_POST['wrap'];
$observaciones5 = $_POST['observaciones5'];


//documento

$fotocopia_cedula = $_POST['fotocopia_cedula'];
$observ_1  = $_POST['observ_1'];
$certificado_camara = $_POST['certificado_camara'];
$observ_2 = $_POST['observ_2'];
$fotocopia_rut = $_POST['fotocopia_rut'];
$observ_3 = $_POST['observ_3'];
$certificado_existencia = $_POST['certificado_existencia'];
$observ_4 = $_POST['observ_4'];
$certificacion_accionaria= $_POST['certificacion_accionaria'];
$observ_5 = $_POST['observ_5'];
$antecedentes_disciplinarios = $_POST['antecedentes_disciplinarios'];
$observ_6 = $_POST['observ_6'];
$resolucion_facturacion = $_POST['resolucion_facturacion'];
$observ_7 = $_POST['observ_7'];
$certificacion_bancaria = $_POST['certificacion_bancaria'];
$observ_8 = $_POST['observ_8'];
$estados_financieros  = $_POST['estados_financieros'];
$observ_9 = $_POST['observ_9'];
$declaracion_renta = $_POST['declaracion_renta'];
$observ_10 = $_POST['observ_10'];
$apoderado = $_POST['apoderado'];
$observ_11 = $_POST['observ_11'];
$certificaciones = $_POST['certificaciones'];
$observ_12 = $_POST['observ_12'];
$plan_contingencia = $_POST['plan_contingencia'];
$observ_13 = $_POST['observ_13'];
$resoluciones_permisos = $_POST['resoluciones_permisos'];
$observ_14 = $_POST['observ_14'];
$referencias_comerciales = $_POST['referencias_comerciales'];
$observ_15 = $_POST['observ_15'];
$gestion_residuos = $_POST['gestion_residuos'];
$observ_16 = $_POST['observ_16'];


//internacional
$posee_productos= $_POST['posee_productos'];
$operaciones_moneda = $_POST['operaciones_moneda'];
$operaciones_cual = $_POST['operaciones_cual'];
$importacion = $_POST['importacion'];
$exportacion = $_POST['exportacion'];
$inversion = $_POST['inversion'];
$prestamo = $_POST['prestamo'];
$transferencia = $_POST['transferencia'];

//contador_revisor

$tipo_identicacion1B = $_POST['tipo_identicacion1B'];
$numero_identificacion1B  = $_POST['numero_identificacion1B'];
$nombre_1B = $_POST['nombre_1B'];
$manejo_recursos1B = $_POST['manejo_recursos1B'];
$reconocimiento_publico1B = $_POST['reconocimiento_publico1B'];
$persona_expuesta1B = $_POST['persona_expuesta1B'];
$tipo_identicacion2B = $_POST['tipo_identicacion2B'];
$numero_identificacion2B = $_POST['numero_identificacion2B'];
$nombre_2B = $_POST['nombre_2B'];
$manejo_recursos2B = $_POST['manejo_recursos2B'];
$reconocimiento_publico2B = $_POST['reconocimiento_publico2B'];
$persona_expuesta2B  = $_POST['persona_expuesta2B'];
$tipo_identicacion3B = $_POST['tipo_identicacion3B'];
$numero_identificacion3B = $_POST['numero_identificacion3B'];
$nombre_3B = $_POST['nombre_3B'];
$manejo_recursos3B = $_POST['manejo_recursos3B'];
$reconocimiento_publico3B = $_POST['reconocimiento_publico3B'];
$persona_expuesta3B = $_POST['persona_expuesta3B'];
$tipo_identicacion4B = $_POST['tipo_identicacion4B'];
$numero_identificacion4B = $_POST['numero_identificacion4B'];
$nombre_4B = $_POST['nombre_4B'];
$manejo_recursos4B = $_POST['manejo_recursos4B'];
$reconocimiento_publico4B = $_POST['reconocimiento_publico4B'];
$persona_expuesta4B = $_POST['persona_expuesta4B'];
$tipo_identicacion5B = $_POST['tipo_identicacion5B'];
$numero_identificacion5B = $_POST['numero_identificacion5B'];
$nombre_5B = $_POST['nombre_5B'];
$manejo_recursos5B = $_POST['manejo_recursos5B'];
$reconocimiento_publico5B = $_POST['reconocimiento_publico5B'];
$persona_expuesta5B = $_POST['persona_expuesta5B'];

//criterios_seleccion

$tiempo_entrega = $_POST['tiempo_entrega'];
$ofrece_credito = $_POST['ofrece_credito'];
$otro_credito = $_POST['otro_credito'];
$suministra_muestra = $_POST['suministra_muestra'];
$garantia_soporte = $_POST['garantia_soporte'];
$maneja_sostenibles = $_POST['maneja_sostenibles'];
$gestiona_residuos = $_POST['gestiona_residuos'];

//identificacion_accionistas

$tipo_identificacion1 = $_POST['tipo_identificacion1'];
$identificacion_aso1  = $_POST['identificacion_aso1'];
$nombre_1 = $_POST['nombre_1'];
$porcentaje_participacion1 = $_POST['porcentaje_participacion1'];
$manejo_recursos1 = $_POST['manejo_recursos1'];
$reconocimiento_publico1 = $_POST['reconocimiento_publico1'];
$persona_expuesta1 = $_POST['persona_expuesta1'];

$tipo_identificacion2 = $_POST['tipo_identificacion2'];
$identificacion_aso2  = $_POST['identificacion_aso2'];
$nombre_2 = $_POST['nombre_2'];
$porcentaje_participacion2 = $_POST['porcentaje_participacion2'];
$manejo_recursos2 = $_POST['manejo_recursos2'];
$reconocimiento_publico2 = $_POST['reconocimiento_publico2'];
$persona_expuesta2 = $_POST['persona_expuesta2'];

$tipo_identificacion3 = $_POST['tipo_identificacion3'];
$identificacion_aso3  = $_POST['identificacion_aso3'];
$nombre_3 = $_POST['nombre_3'];
$porcentaje_participacion3 = $_POST['porcentaje_participacion3'];
$manejo_recursos3 = $_POST['manejo_recursos3'];
$reconocimiento_publico3 = $_POST['reconocimiento_publico3'];
$persona_expuesta3 = $_POST['persona_expuesta3'];

$tipo_identificacion4 = $_POST['tipo_identificacion4'];
$identificacion_aso4  = $_POST['identificacion_aso4'];
$nombre_4 = $_POST['nombre_4'];
$porcentaje_participacion4 = $_POST['porcentaje_participacion4'];
$manejo_recursos4 = $_POST['manejo_recursos4'];
$reconocimiento_publico4 = $_POST['reconocimiento_publico4'];
$persona_expuesta4 = $_POST['persona_expuesta4'];


$tipo_identificacion5 = $_POST['tipo_identificacion5'];
$identificacion_aso5  = $_POST['identificacion_aso5'];
$nombre_5 = $_POST['nombre_5'];
$porcentaje_participacion5 = $_POST['porcentaje_participacion5'];
$manejo_recursos5 = $_POST['manejo_recursos5'];
$reconocimiento_publico5 = $_POST['reconocimiento_publico5'];
$persona_expuesta5 = $_POST['persona_expuesta5'];

//operaciones_internacionales


$tipo_producto = $_POST['tipo_producto'];
$numero_producto  = $_POST['numero_producto'];
$entidad = $_POST['entidad'];
$monto = $_POST['monto'];
$ciudad1 = $_POST['ciudad1'];
$pais = $_POST['pais'];
$moneda = $_POST['moneda'];

$tipo_producto2 = $_POST['tipo_producto2'];
$numero_producto2  = $_POST['numero_producto2'];
$entidad2 = $_POST['entidad2'];
$monto2 = $_POST['monto2'];
$ciudad2 = $_POST['ciudad2'];
$pais2 = $_POST['pais2'];
$moneda2 = $_POST['moneda2'];

$tipo_producto3 = $_POST['tipo_producto3'];
$numero_producto3  = $_POST['numero_producto3'];
$entidad3 = $_POST['entidad3'];
$monto3 = $_POST['monto3'];
$ciudad3 = $_POST['ciudad3'];
$pais3 = $_POST['pais3'];
$moneda3 = $_POST['moneda3'];

$tipo_producto4 = $_POST['tipo_producto4'];
$numero_producto4  = $_POST['numero_producto4'];
$entidad4 = $_POST['entidad4'];
$monto4 = $_POST['monto4'];
$ciudad4 = $_POST['ciudad4'];
$pais4 = $_POST['pais4'];
$moneda4 = $_POST['moneda4'];

//representantes_legales

$tipo_identicacion1A = $_POST['tipo_identicacion1A'];
$numero_identificacion1A  = $_POST['numero_identificacion1A'];
$nombre_1A = $_POST['nombre_1A'];
$manejo_recursos1A = $_POST['manejo_recursos1A'];
$reconocimiento_publico1A = $_POST['reconocimiento_publico1A'];
$persona_expuesta1A = $_POST['persona_expuesta1A'];

$tipo_identicacion2A = $_POST['tipo_identicacion2A'];
$numero_identificacion2A  = $_POST['numero_identificacion2A'];
$nombre_2A = $_POST['nombre_2A'];
$manejo_recursos2A = $_POST['manejo_recursos2A'];
$reconocimiento_publico2A = $_POST['reconocimiento_publico2A'];
$persona_expuesta2A = $_POST['persona_expuesta2A'];

$tipo_identicacion3A = $_POST['tipo_identicacion3A'];
$numero_identificacion3A  = $_POST['numero_identificacion3A'];
$nombre_3A = $_POST['nombre_3A'];
$manejo_recursos3A = $_POST['manejo_recursos3A'];
$reconocimiento_publico3A = $_POST['reconocimiento_publico3A'];
$persona_expuesta3A = $_POST['persona_expuesta3A'];

$tipo_identicacion4A = $_POST['tipo_identicacion4A'];
$numero_identificacion4A  = $_POST['numero_identificacion4A'];
$nombre_4A = $_POST['nombre_4A'];
$manejo_recursos4A = $_POST['manejo_recursos4A'];
$reconocimiento_publico4A = $_POST['reconocimiento_publico4A'];
$persona_expuesta4A = $_POST['persona_expuesta4A'];

$tipo_identicacion5A = $_POST['tipo_identicacion5A'];
$numero_identificacion5A  = $_POST['numero_identificacion5A'];
$nombre_5A = $_POST['nombre_5A'];
$manejo_recursos5A = $_POST['manejo_recursos5A'];
$reconocimiento_publico5A = $_POST['reconocimiento_publico5A'];
$persona_expuesta5A = $_POST['persona_expuesta5A'];

//sector_publico


$actividad_recursos = $_POST['actividad_recursos']; 
$poder_publico  = $_POST['poder_publico'];
$reconocimiento_publico = $_POST['reconocimiento_publico'];
$persona_expuesta = $_POST['persona_expuesta'];
$vinculo_expuesta = $_POST['vinculo_expuesta'];
$representante_organizacion = $_POST['representante_organizacion'];
$obligaciones_tributarias = $_POST['obligaciones_tributarias'];




$indique_1 = $_POST['indique_1'];
$indique_2  = $_POST['indique_2'];
$indique_3 = $_POST['indique_3'];
$indique_4 = $_POST['indique_4'];
$indique_5 = $_POST['indique_5'];
$indique_6 = $_POST['indique_6'];
$indique_7 = $_POST['indique_7'];




$sql = "UPDATE proveedor SET nombre='$nombre', tipo_persona='$tipo_persona', numero_identificacion='$numero_identificacion', DV='$DV', telefono='$telefono', direccion='$direccion', ciudad='$ciudad', direccion_residencia='$direccion_residencia' , nombre_contactoProveedor='$nombre_contactoProveedor', cargo='$cargo', nombre_representanteLegal='$nombre_representanteLegal',tipo_empresa='$tipo_empresa', empresa_labora='$empresa_labora', contacto_empresa='$contacto_empresa' , actividad_economica='$actividad_economica',  cedula_representante='$cedula_representante', objetivo='$objetivo', contacto_contable='$contacto_contable', cargo_contable='$cargo_contable', correo_contable='$correo_contable', contacto_comercial='$contacto_comercial',  cargo_comercial='$cargo_comercial', correo_comercial='$correo_comercial', nombre_otro='$nombre_otro', cargo_otro='$cargo_otro',  correo_otro='$correo_otro', producto1='$producto1', marca1='$marca1', producto2='$producto2',  marca2='$marca2', producto3='$producto3', marca3='$marca3', t_garantia='$t_garantia',  poliza='$poliza',fecha_registro='$fecha_registro'  WHERE id_proveedor='$id' ";

// Ejecutar la consulta
if ($conexion->query($sql) === TRUE) {
      echo "se actualizo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}

$sql2 = "UPDATE infofiscal SET codigo_actividad='$codigo_actividad', autorretenedor='$autorretenedor', resolucion1='$resolucion1',  fecha1='$fecha1', descripcionCIIU='$descripcionCIIU', responsable_iva='$responsable_iva', gran_contribuyente='$gran_contribuyente',  regimen_simple='$regimen_simple', resolucion2='$resolucion2', fecha2='$fecha2', anexar_resolucion='$anexar_resolucion',  tarifa_correspondiente='$tarifa_correspondiente' WHERE id_proveedor='$id'";

if ($conexion->query($sql2) === TRUE) {
      echo "se actualizo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}


$sql3 = "UPDATE infofinanciera SET titular_cuenta='$titular_cuenta', banco='$banco', codigo='$codigo',  tipo_cuenta='$tipo_cuenta', numero_cuenta='$numero_cuenta', modalidad_pago='$modalidad_pago', cupo_credito='$cupo_credito', posee_productos='$posee_productos', operaciones_moneda='$operaciones_moneda',operaciones_cual='$operaciones_cual', importacion='$importacion', exportacion= '$exportacion', inversion= '$inversion', prestamo='$prestamo', transferencia='$transferencia'  WHERE id_proveedor='$id'";

if ($conexion->query($sql3) === TRUE) {
      echo "se actualizo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}


$sql4 = "UPDATE certificacionesgen SET certificaciones_acreditadas='$certificaciones_acreditadas', gestion_calidad='$gestion_calidad', observaciones1='$observaciones1',  gestion_ambiente='$gestion_ambiente', observaciones2='$observaciones2', gestion_saludSeguridad='$gestion_saludSeguridad', observaciones3='$observaciones3',  gestion_seguridad='$gestion_seguridad', observaciones4='$observaciones4', wrap='$wrap', observaciones5='$observaciones5' WHERE id_proveedor='$id'";

if ($conexion->query($sql4) === TRUE) {
      echo "se actualizo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}


$sql5 = "UPDATE documento SET fotocopia_cedula='$fotocopia_cedula', observ_1='$observ_1', certificado_camara='$certificado_camara',  observ_2='$observ_2', fotocopia_rut='$fotocopia_rut', observ_3='$observ_3',certificacion_accionaria='$certificacion_accionaria'  , observ_4='$observ_4' , antecedentes_disciplinarios='$antecedentes_disciplinarios' , observ_5= '$observ_5', certificado_existencia='$certificado_existencia',  observ_6='$observ_6', resolucion_facturacion='$resolucion_facturacion', observ_7='$observ_7', certificacion_bancaria='$certificacion_bancaria',  observ_8='$observ_8', estados_financieros='$estados_financieros', observ_9='$observ_9', declaracion_renta='$declaracion_renta',  observ_10='$observ_10', apoderado='$apoderado', observ_11='$observ_11', certificaciones='$certificaciones',  observ_12='$observ_12', plan_contingencia='$plan_contingencia', observ_13='$observ_13', resoluciones_permisos='$resoluciones_permisos',  observ_14='$observ_14',  referencias_comerciales='$referencias_comerciales',  observ_15='$observ_15' ,  gestion_residuos='$gestion_residuos',  observ_16='$observ_16' WHERE id_proveedor='$id' ";


if ($conexion->query($sql5) === TRUE) {
      echo "se actualizo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}



$sql6 = "UPDATE contador_revisor SET tipo_identicacion1B='$tipo_identicacion1B', numero_identificacion1B='$numero_identificacion1B', nombre_1B='$nombre_1B',  manejo_recursos1B='$manejo_recursos1B', reconocimiento_publico1B='$reconocimiento_publico1B', persona_expuesta1B='$persona_expuesta1B',tipo_identicacion2B='$tipo_identicacion2B'  , numero_identificacion2B='$numero_identificacion2B' , nombre_2B='$nombre_2B' , manejo_recursos2B= '$manejo_recursos2B', reconocimiento_publico2B='$reconocimiento_publico2B',  persona_expuesta2B='$persona_expuesta2B', tipo_identicacion3B='$tipo_identicacion3B', numero_identificacion3B='$numero_identificacion3B', nombre_3B='$nombre_3B',  manejo_recursos3B='$manejo_recursos3B', reconocimiento_publico3B='$reconocimiento_publico3B', persona_expuesta3B='$persona_expuesta3B',  tipo_identicacion4B='$tipo_identicacion4B', numero_identificacion4B='$numero_identificacion4B', nombre_4B='$nombre_4B',  manejo_recursos4B='$manejo_recursos4B', reconocimiento_publico4B='$reconocimiento_publico4B', persona_expuesta4B='$persona_expuesta4B',  tipo_identicacion5B='$tipo_identicacion5B', numero_identificacion5B='$numero_identificacion5B', nombre_5B='$nombre_5B',  manejo_recursos5B='$manejo_recursos5B', reconocimiento_publico5B='$reconocimiento_publico5B', persona_expuesta5B='$persona_expuesta5B' WHERE id_proveedor='$id' ";


if ($conexion->query($sql6) === TRUE) {
      echo "se actualizo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}



$sql7 = "UPDATE criterio_seleccion SET tiempo_entrega='$tiempo_entrega',ofrece_credito='$ofrece_credito',otro_credito='$otro_credito', suministra_muestra='$suministra_muestra',  garantia_soporte='$garantia_soporte', maneja_sostenibles='$maneja_sostenibles', gestiona_residuos='$gestiona_residuos' WHERE id_proveedor='$id'";

if ($conexion->query($sql7) === TRUE) {
      echo "se actualizo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}


$sql8 = "UPDATE identificacion_accionistas SET tipo_identificacion1='$tipo_identificacion1', identificacion_aso1='$identificacion_aso1', nombre_1='$nombre_1',  porcentaje_participacion1='$porcentaje_participacion1', manejo_recursos1='$manejo_recursos1', reconocimiento_publico1='$reconocimiento_publico1',persona_expuesta1='$persona_expuesta1'  , tipo_identificacion2='$tipo_identificacion2' , identificacion_aso2='$identificacion_aso2' , nombre_2= '$nombre_2', porcentaje_participacion2='$porcentaje_participacion2',  manejo_recursos2='$manejo_recursos2', reconocimiento_publico2='$reconocimiento_publico2', persona_expuesta2='$persona_expuesta2', tipo_identificacion3='$tipo_identificacion3',  identificacion_aso3='$identificacion_aso3', nombre_3='$nombre_3', porcentaje_participacion3='$porcentaje_participacion3', manejo_recursos3='$manejo_recursos3',  reconocimiento_publico3='$reconocimiento_publico3', persona_expuesta3='$persona_expuesta3', tipo_identificacion4='$tipo_identificacion4', identificacion_aso4='$identificacion_aso4',  nombre_4='$nombre_4', porcentaje_participacion4='$porcentaje_participacion4', manejo_recursos4='$manejo_recursos4', reconocimiento_publico4='$reconocimiento_publico4',  persona_expuesta4='$persona_expuesta4',  tipo_identificacion5='$tipo_identificacion5',  identificacion_aso5='$identificacion_aso5' ,  nombre_5='$nombre_5',  porcentaje_participacion5='$porcentaje_participacion5', manejo_recursos5='$manejo_recursos5',  reconocimiento_publico5='$reconocimiento_publico5',  persona_expuesta5='$persona_expuesta5' WHERE id_proveedor='$id' ";


if ($conexion->query($sql8) === TRUE) {
      echo "se actualizo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}


$sql9 = "UPDATE operaciones_internacionales SET  tipo_producto='$tipo_producto', numero_producto='$numero_producto', entidad='$entidad', monto='$monto', ciudad1='$ciudad1', pais='$pais', moneda='$moneda', tipo_producto2='$tipo_producto2', numero_producto2='$numero_producto2',entidad2='$entidad2', monto2='$monto2', ciudad2='$ciudad2', pais2='$pais2', moneda2='$moneda2', tipo_producto3='$tipo_producto3', numero_producto3='$numero_producto3', entidad3='$entidad3', monto3='$monto3', ciudad3='$ciudad3', pais3='$pais3', moneda3='$moneda3', tipo_producto4='$tipo_producto4', numero_producto4='$numero_producto4', entidad4='$entidad4',monto4='$monto4', ciudad4='$ciudad4', pais4='$pais4', moneda4='$moneda4' WHERE id_proveedor='$id' ";


if ($conexion->query($sql9) === TRUE) {
      echo "se actualizo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}


$sql10 = "UPDATE representantes_legales SET  tipo_identicacion1A='$tipo_identicacion1A', numero_identificacion1A='$numero_identificacion1A', nombre_1A='$nombre_1A', manejo_recursos1A='$manejo_recursos1A', reconocimiento_publico1A='$reconocimiento_publico1A', 
persona_expuesta1A='$persona_expuesta1A', tipo_identicacion2A='$tipo_identicacion2A', numero_identificacion2A='$numero_identificacion2A', nombre_2A='$nombre_2A', manejo_recursos2A='$manejo_recursos2A', reconocimiento_publico2A='$reconocimiento_publico2A', persona_expuesta2A='$persona_expuesta2A', tipo_identicacion3A='$tipo_identicacion3A', numero_identificacion3A='$numero_identificacion3A', nombre_3A='$nombre_3A', manejo_recursos3A='$manejo_recursos3A', reconocimiento_publico3A='$reconocimiento_publico3A', persona_expuesta3A='$persona_expuesta3A', tipo_identicacion4A='$tipo_identicacion4A', numero_identificacion4A='$numero_identificacion4A', nombre_4A='$nombre_4A', manejo_recursos4A='$manejo_recursos4A', reconocimiento_publico4A='$reconocimiento_publico4A', 
 persona_expuesta4A='$persona_expuesta4A', tipo_identicacion5A='$tipo_identicacion5A', numero_identificacion5A='$numero_identificacion5A', nombre_5A='$nombre_5A', manejo_recursos5A='$manejo_recursos5A', reconocimiento_publico5A='$reconocimiento_publico5A', persona_expuesta5A='$persona_expuesta5A'  WHERE id_proveedor='$id' ";


if ($conexion->query($sql10) === TRUE) {
      echo "se cargo correctamente";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}

$sql11 = "UPDATE sector_publico SET  actividad_recursos='$actividad_recursos', poder_publico='$poder_publico', reconocimiento_publico='$reconocimiento_publico', persona_expuesta='$persona_expuesta', vinculo_expuesta='$vinculo_expuesta', representante_organizacion='$representante_organizacion', obligaciones_tributarias='$obligaciones_tributarias',indique_1='$indique_1', indique_2='$indique_2', indique_3='$indique_3', indique_4='$indique_4', indique_5='$indique_5', indique_6='$indique_6', indique_7='$indique_7' WHERE id_proveedor='$id' ";


if ($conexion->query($sql11) === TRUE) {
      echo "<script language='JavaScript'>
         alert('Los datos fueron actualizados de manera correcta ');
         location.assign('documentos.php');
         </script>";
} else {
    echo "Error al actualizar los datos: " . $link->error;
}


// Cerrar conexión a la base de datos
$conexion->close();
?>
