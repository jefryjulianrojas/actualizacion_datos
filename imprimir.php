<?php

require "fpdf/fpdf.php";
require ("conexion.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proveedores";

$conn = new mysqli($servername, $username, $password, $dbname);



$id=$_GET['id'];


$sql="SELECT *  FROM proveedor INNER JOIN infofiscal ON proveedor.id_proveedor = infofiscal.id_proveedor  INNER JOIN certificacionesgen ON proveedor.id_proveedor = certificacionesgen.id_proveedor INNER JOIN  infofinanciera ON  proveedor.id_proveedor = infofinanciera.id_proveedor JOIN documento ON documento.id_proveedor = proveedor.id_proveedor WHERE proveedor.id_proveedor = '$id'";

$result = $conn->query($sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('plantillas/ACUERDO1.jpg', 1, 2, 208, 291, 'jpg');
$pdf->SetFont('Arial','B',12);

while ($row = $result->fetch_assoc()) {
    
   
  $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(28, 66);
    $pdf->Cell(60,0, utf8_decode ($row['nombre']),0,0,'C');
   
  $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(134, 66);
    $pdf->Cell(60,0, utf8_decode ($row['nombre_representanteLegal']),0,0,'C');
    
      $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(114, 69);
    $pdf->Cell(60,0, utf8_decode ($row['direccion']),0,0,'C');
    
     $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(64, 72);
    $pdf->Cell(60,0, utf8_decode ($row['cedula_representante']),0,0,'C');
    
      $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(116, 72);
    $pdf->Cell(60,0, utf8_decode ($row['ciudad']),0,0,'L');
    
    $pdf->SetFont('Helvetica', '', 9, '', 'false');
    $pdf->SetXY(32, 168);
    $pdf->MultiCell(160, 3, utf8_decode ($row['objetivo']), 0, 'L', 0, 0, '', '', true);
    
  
    
  
    
    }


$pdf->AddPage();
$pdf->Image('plantillas/ACUERDO2.jpg', 1, 2, 208, 291, 'jpg');
$pdf->SetFont('Arial','B',12);


    

$id=$_GET['id'];


$sql="SELECT *  FROM proveedor INNER JOIN infofiscal ON proveedor.id_proveedor = infofiscal.id_proveedor  INNER JOIN certificacionesgen ON proveedor.id_proveedor = certificacionesgen.id_proveedor INNER JOIN  infofinanciera ON  proveedor.id_proveedor = infofinanciera.id_proveedor JOIN documento ON documento.id_proveedor = proveedor.id_proveedor WHERE proveedor.id_proveedor = '$id'";

$result = $conn->query($sql);

$pdf->AddPage();
$pdf->Image('plantillas/ACUERDO3.jpg', 1, 2, 208, 291, 'jpg');
$pdf->SetFont('Arial','B',12);

while ($row = $result->fetch_assoc()) {
    $pdf->SetFont('', '', 10, '', 'false');
    $pdf->SetXY(48, 169);
    $pdf->Cell(60,0, utf8_decode ($row['nombre']),0,0,'C');
    
    $pdf->SetFont('', '', 10, '', 'false');
    $pdf->SetXY(35, 172);
    $pdf->Cell(60,0, utf8_decode ($row['direccion']),0,0,'C');
    
     $pdf->SetFont('', '', 10, '', 'false');
    $pdf->SetXY(35, 175.5);
    $pdf->Cell(60,0, utf8_decode ($row['ciudad']),0,0,'C');
    
     $pdf->SetFont('', '', 10, '', 'false');
    $pdf->SetXY(38, 179.5);
    $pdf->Cell(60,0, utf8_decode ($row['telefono']),0,0,'C');   
    
    
     $pdf->SetFont('', '', 10, '', 'false');
    $pdf->SetXY(85, 186 );
    $pdf->Cell(60,0, utf8_decode ($row['fecha_registro']),0,0,'C');
   
  

    
    }



ob_start();
$pdf->Output();

ob_end_flush();
// Cerrar la conexión a la base de datos
$conn->close();