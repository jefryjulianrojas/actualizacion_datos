<?php

require "fpdf/fpdf.php";
require ("conexion.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proveedores";

$conn = new mysqli($servername, $username, $password, $dbname);



$id=$_GET['id'];


$sql="SELECT *  FROM proveedor INNER JOIN infofiscal ON proveedor.id_proveedor = infofiscal.id_proveedor INNER JOIN infofinanciera ON proveedor.id_proveedor = infofinanciera.id_proveedor  INNER JOIN sector_publico ON proveedor.id_proveedor = sector_publico.id_proveedor INNER JOIN operaciones_internacionales ON proveedor.id_proveedor = operaciones_internacionales.id_proveedor INNER JOIN identificacion_accionistas ON proveedor.id_proveedor = identificacion_accionistas.id_proveedor                    INNER JOIN representantes_legales ON proveedor.id_proveedor = representantes_legales.id_proveedor  INNER JOIN contador_revisor ON proveedor.id_proveedor = contador_revisor.id_proveedor   INNER JOIN criterio_seleccion ON proveedor.id_proveedor = criterio_seleccion.id_proveedor  INNER JOIN certificacionesgen ON proveedor.id_proveedor = certificacionesgen.id_proveedor INNER JOIN documento ON proveedor.id_proveedor = documento.id_proveedor  WHERE proveedor.id_proveedor = '$id'";

$result = $conn->query($sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('formato_1.jpg', 1, 2, 208, 287, 'jpg');
$pdf->SetFont('Arial','B',12);

while ($row = $result->fetch_assoc()) {
    
    if($row['tipo_persona'] == 'juridica'){
      $pdf->SetFont('Helvetica', '', 7, '', 'false');
      $pdf->SetXY(120, 25);
      $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
          
      }elseif($row['tipo_persona'] == 'natural'){
      $pdf->SetFont('Helvetica', '', 9, '', 'false');
      $pdf->SetXY(80, 25);
      $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
          
      }
    
    
   
  $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(48, 29);
    $pdf->Cell(60,0, utf8_decode ($row['nombre']),0,0,'C');
   
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(122, 29);
    $pdf->Cell(60,0, utf8_decode ($row['numero_identificacion']),0,0,'C');
    
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(161, 29);
    $pdf->Cell(60,0, utf8_decode ($row['DV']),0,0,'C');
  
    
      $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(143, 39);
    $pdf->Cell(60,0, utf8_decode ($row['direccion']),0,0,'C');

    
    $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(89, 44.5);
    $pdf->Cell(60,0, utf8_decode ($row['direccion_residencia']),0,0,'C');
    
     $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(93, 50);
    $pdf->Cell(60,0, utf8_decode ($row['telefono']),0,0,'C');
    
      $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(21, 54.5);
    $pdf->Cell(60,0, utf8_decode ($row['ciudad']),0,0,'C');
    
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(102, 34);
    $pdf->Cell(60, 0, utf8_decode ($row['actividad_economica']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(70, 39.5);
    $pdf->Cell(60, 0, utf8_decode ($row['empresa_labora']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(124, 54.5);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_empresa']), 0, 0,'C');
    
    
    
    
    
      $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(11, 65);
    $pdf->Cell(60,0, utf8_decode ($row['contacto_contable']),0,0,'C');
    
      $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(61, 65);
    $pdf->Cell(60,0, utf8_decode ($row['cargo_contable']),0,0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(130, 65);
    $pdf->Cell(60, 0, utf8_decode ($row['correo_contable']), 0, 0,'C');   
    
  
    
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(11, 71.5);
    $pdf->Cell(60,0, utf8_decode ($row['contacto_comercial']),0,0,'C');
    
      $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(61, 71.5);
    $pdf->Cell(60,0, utf8_decode ($row['cargo_comercial']),0,0,'C'); 
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(130, 71.5);
    $pdf->Cell(60, 0, utf8_decode ($row['correo_comercial']), 0, 0,'C');
    
    
    
    
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(11, 78);
    $pdf->Cell(60,0, utf8_decode ($row['nombre_otro']),0,0,'C');
    
      $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(61, 78);
    $pdf->Cell(60,0, utf8_decode ($row['cargo_otro']),0,0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(130, 78);
    $pdf->Cell(60, 0, utf8_decode ($row['correo_otro']), 0, 0,'C');
    
  //-------------------------------------------------------------------
        
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(30, 89);
    $pdf->Cell(60,0, utf8_decode ($row['producto1']),0,0,'C');
    
      $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(30, 94);
    $pdf->Cell(60,0, utf8_decode ($row['producto2']),0,0,'C'); 
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(30, 99);
    $pdf->Cell(60, 0, utf8_decode ($row['producto3']), 0, 0,'C');
    
    
    
    
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(130, 89);
    $pdf->Cell(60,0, utf8_decode ($row['marca1']),0,0,'C');
    
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(130, 94);
    $pdf->Cell(60,0, utf8_decode ($row['marca2']),0,0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(130, 99);
    $pdf->Cell(60, 0, utf8_decode ($row['marca3']), 0, 0,'C');
    
    
    

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(82, 109.5);
    $pdf->Cell(60, 0, utf8_decode ($row['t_garantia']), 0, 0,'C');

    
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(82, 115);
    $pdf->Cell(60,0, utf8_decode ($row['poliza']),0,0,'C');
    
  
    //-----------------------------------------------------------------------

  
    if(($row['actividad_recursos']) == 'si'){
      $pdf->SetFont('Helvetica', '', 9, '', 'false');
      $pdf->SetXY(59, 127.5);
      $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
          
      }elseif(($row['actividad_recursos']) == 'no'){
      $pdf->SetFont('Helvetica', '', 9, '', 'false');
      $pdf->SetXY(69, 127.5);
      $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
          
      }

      if(($row['reconocimiento_publico']) == 'si'){
        $pdf->SetFont('Helvetica', '', 9, '', 'false');
        $pdf->SetXY(59, 133);
        $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
            
        }elseif(($row['reconocimiento_publico']) == 'no'){
        $pdf->SetFont('Helvetica', '', 9, '', 'false');
        $pdf->SetXY(69, 133);
        $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
        }

    
 
     
          if(($row['persona_expuesta']) == 'si'){
            $pdf->SetFont('Helvetica', '', 9, '', 'false');
            $pdf->SetXY(59, 139);
            $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                
            }elseif(($row['persona_expuesta']) == 'no'){
            $pdf->SetFont('Helvetica', '', 9, '', 'false');
            $pdf->SetXY(69, 139);
            $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                
            }

            if(($row['vinculo_expuesta']) == 'si'){
              $pdf->SetFont('Helvetica', '', 9, '', 'false');
              $pdf->SetXY(59, 146);
              $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                  
              }elseif(($row['vinculo_expuesta']) == 'no'){
              $pdf->SetFont('Helvetica', '', 9, '', 'false');
              $pdf->SetXY(69, 146);
              $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                  
              }
           
         
              if(($row['representante_organizacion']) == 'si'){
                $pdf->SetFont('Helvetica', '', 9, '', 'false');
                $pdf->SetXY(59, 154.5);
                $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                    
                }elseif(($row['representante_organizacion']) == 'no'){
                $pdf->SetFont('Helvetica', '', 9, '', 'false');
                $pdf->SetXY(69, 154.5);
                $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                    
                }
                if(($row['obligaciones_tributarias']) == 'si'){
                  $pdf->SetFont('Helvetica', '', 9, '', 'false');
                  $pdf->SetXY(59, 162);
                  $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                      
                  }elseif(($row['obligaciones_tributarias']) == 'no'){
                  $pdf->SetFont('Helvetica', '', 9, '', 'false');
                  $pdf->SetXY(69, 162);
                  $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                      
                  }

                  if(($row['poder_publico']) == 'si'){
                    $pdf->SetFont('Helvetica', '', 9, '', 'false');
                    $pdf->SetXY(59, 168);
                    $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                        
                    }elseif(($row['poder_publico']) == 'no'){
                    $pdf->SetFont('Helvetica', '', 9, '', 'false');
                    $pdf->SetXY(69, 168);
                    $pdf->Cell(60, 0,  ('X'), 0, 0,'L');
                        
                    }



$pdf->SetFont('Helvetica', '', 7, '', 'false');
$pdf->SetXY(82, 125);
$pdf->MultiCell(120, 2, utf8_decode ($row['indique_1']), 0, 'L', 0, 0, '', '', true);

$pdf->SetFont('Helvetica', '', 7, '', 'false');
$pdf->SetXY(82, 130);
$pdf->MultiCell(120, 2, utf8_decode ($row['indique_2']), 0, 'L', 0, 0, '', '', true);

$pdf->SetFont('Helvetica', '', 7, '', 'false');
$pdf->SetXY(82, 135.5);
$pdf->MultiCell(120, 2, utf8_decode ($row['indique_3']), 0, 'L', 0, 0, '', '', true);

$pdf->SetFont('Helvetica', '', 7, '', 'false');
$pdf->SetXY(82, 142.5);
$pdf->MultiCell(120, 3, utf8_decode ($row['indique_4']), 0, 'L', 0, 0, '', '', true);

$pdf->SetFont('Helvetica', '', 7, '', 'false');
$pdf->SetXY(82, 152);
$pdf->MultiCell(120, 2, utf8_decode ($row['indique_5']), 0, 'L', 0, 0, '', '', true);
    
$pdf->SetFont('Helvetica', '', 7, '', 'false');
$pdf->SetXY(82, 159);
$pdf->MultiCell(120, 2, utf8_decode ($row['indique_6']), 0, 'L', 0, 0, '', '', true);

$pdf->SetFont('Helvetica', '', 7, '', 'false');
$pdf->SetXY(82, 166);
$pdf->MultiCell(120, 2, utf8_decode ($row['indique_7']), 0, 'L', 0, 0, '', '', true);




    
  //-------------------------------------------------------------------------
 
    $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(35, 178);
    $pdf->Cell(60,0, utf8_decode ($row['codigo_actividad']),0,0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(100, 176);
    $pdf->MultiCell(60, 2, utf8_decode ($row['descripcionCIIU']), 0, 'C', 0, 0, '', '', true);


    
    if($row['autorretenedor'] == 'si'){
        $pdf->SetFont('Helvetica', '', 9, '', 'false');
    $pdf->SetXY(58, 191);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
        
    }elseif($row['autorretenedor'] == 'no'){
        $pdf->SetFont('Helvetica', '', 9, '', 'false');
    $pdf->SetXY(69, 191);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
        
    }
    
    
    
        if($row['responsable_iva'] == 'si'){
        $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(147, 184);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['responsable_iva'] == 'no'){
        $pdf->SetFont('Helvetica', '', 8, '', 'false');
        $pdf->SetXY(161, 184);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }

   
    
    
        if($row['gran_contribuyente'] == 'si'){
        $pdf->SetFont('Helvetica', '', 9, '', 'false');
        $pdf->SetXY(147, 188.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
   }elseif($row['gran_contribuyente'] == 'no'){
        $pdf->SetFont('Helvetica', '', 9, '', 'false');
        $pdf->SetXY(161, 188.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
    
        if($row['regimen_simple'] == 'si'){
        $pdf->SetFont('Helvetica', '', 9, '', 'false');
        $pdf->SetXY(147, 193);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['regimen_simple'] == 'no'){
        $pdf->SetFont('Helvetica', '', 9, '', 'false');
        $pdf->SetXY(161, 193);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
    
    
     $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(13, 197.5);
    $pdf->Cell(60,0, utf8_decode ($row['resolucion1']),0,0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(48, 198);
    $pdf->Cell(60, 0, utf8_decode ($row['fecha1']), 0, 0,'C');
    
    
      $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(110, 198);
    $pdf->Cell(60,0, utf8_decode ($row['resolucion2']),0,0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(158, 198);
    $pdf->Cell(60, 0, utf8_decode ($row['fecha2']), 0, 0,'C');
    
     $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(25, 201);
    $pdf->MultiCell(160, 2, utf8_decode ($row['anexar_resolucion']), 0, 'C', 0, 0, '', '', true);
    
    
    
    
    
        if($row['tarifa_correspondiente'] == '4,14 POR MIL'){
        $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(21, 215);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
        
    }elseif($row['tarifa_correspondiente'] == '6,9 POR MIL'){
        $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(44, 215);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
        
    }elseif($row['tarifa_correspondiente'] == '9,66 POR MIL'){
        $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(64, 215);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');

    }elseif($row['tarifa_correspondiente'] == '11,04 POR MIL'){
            $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(84, 215);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
            
        }elseif($row['tarifa_correspondiente'] == '13,8 POR MIL'){
            $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(81, 215);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
            
        }elseif($row['tarifa_correspondiente'] == 'N/A'){
            $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(120, 215);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
            
        }

        //-----------------------operaciones internacionales------------------------------

        if($row['operaciones_moneda'] == 'si'){
          $pdf->SetFont('Helvetica', '', 8, '', 'false');
          $pdf->SetXY(59, 231);
      $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
          
      }elseif($row['operaciones_moneda'] == 'no'){
          $pdf->SetFont('Helvetica', '', 8, '', 'false');
          $pdf->SetXY(69, 231);
      $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
          
      }

      $pdf->SetFont('', '', 7, '', 'false');
      $pdf->SetXY(57, 231);
      $pdf->Cell(60,0, utf8_decode ($row['operaciones_cual']),0,0,'C');




      if($row['importacion'] == 'si'){
        $pdf->SetFont('Helvetica', '', 8, '', 'false');
        $pdf->SetXY(108, 231);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
        
    }else{
        $pdf->SetFont('Helvetica', '', 8, '', 'false');
        $pdf->SetXY(68, 176);
    $pdf->Cell(60, 0, utf8_decode (''), 0, 0,'L');
        
    }
    if($row['exportacion'] == 'si'){
      $pdf->SetFont('Helvetica', '', 8, '', 'false');
      $pdf->SetXY(128, 231);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
      
     }else{
      $pdf->SetFont('Helvetica', '', 8, '', 'false');
      $pdf->SetXY(68, 176);
     $pdf->Cell(60, 0, utf8_decode (''), 0, 0,'L');
      
    }
    if($row['inversion'] == 'si'){
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(150, 231);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
    
  }else{
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(68, 176);
    $pdf->Cell(60, 0, utf8_decode (''), 0, 0,'L');
    
    }

    if($row['prestamo'] == 'si'){
      $pdf->SetFont('Helvetica', '', 8, '', 'false');
      $pdf->SetXY(170, 231);
      $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
      
    }else{
      $pdf->SetFont('Helvetica', '', 8, '', 'false');
      $pdf->SetXY(68, 176);
      $pdf->Cell(60, 0, utf8_decode (''), 0, 0,'L');
      
      }
      if($row['transferencia'] == 'si'){
        $pdf->SetFont('Helvetica', '', 8, '', 'false');
        $pdf->SetXY(190, 231);
        $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'L');
        
      }else{
        $pdf->SetFont('Helvetica', '', 8, '', 'false');
        $pdf->SetXY(68, 176);
        $pdf->Cell(60, 0, utf8_decode (''), 0, 0,'L');
        
        }

        
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(10, 240.5);
    $pdf->MultiCell(27, 2, utf8_decode ($row['tipo_producto']), 0, 'C', 0, 0, '', '', true);
    

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(10, 245.5);
    $pdf->MultiCell(27, 2, utf8_decode ($row['tipo_producto2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(10, 251);
    $pdf->MultiCell(27, 2, utf8_decode ($row['tipo_producto3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(10, 256.5);
    $pdf->MultiCell(25, 2, utf8_decode ($row['tipo_producto4']), 0, 'C', 0, 0, '', '', true);
    
    
    
    
    
    
     $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(38, 241.5);
    $pdf->MultiCell(27, 2, utf8_decode ($row['numero_producto']), 0, 'C', 0, 0, '', '', true);
    

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(38, 246.5);
    $pdf->MultiCell(27, 2, utf8_decode ($row['numero_producto2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(38, 252);
    $pdf->MultiCell(27, 2, utf8_decode ($row['numero_producto3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(38, 257.5);
    $pdf->MultiCell(25, 2, utf8_decode ($row['numero_producto4']), 0, 'C', 0, 0, '', '', true);





$pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(70, 241);
    $pdf->MultiCell(27, 2, utf8_decode ($row['entidad']), 0, 'C', 0, 0, '', '', true);
    

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(70, 246);
    $pdf->MultiCell(27, 2, utf8_decode ($row['entidad2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(70, 251);
    $pdf->MultiCell(27, 2, utf8_decode ($row['entidad3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(70, 257);
    $pdf->MultiCell(25, 2, utf8_decode ($row['entidad4']), 0, 'C', 0, 0, '', '', true);

 
      
   
 


 
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102.5, 243);
    $pdf->Cell(60, 0, utf8_decode ($row['monto']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102.5, 248);
    $pdf->Cell(60, 0, utf8_decode ($row['monto2']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102.5, 253.5);
    $pdf->Cell(60, 0, utf8_decode ($row['monto3']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102.5, 259);
    $pdf->Cell(60, 0, utf8_decode ($row['monto4']), 0, 0,'L');
      


    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(119, 242);
    $pdf->MultiCell(25, 2, utf8_decode ($row['ciudad']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(119, 247);
    $pdf->MultiCell(25, 2, utf8_decode ($row['ciudad2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(119, 252.5);
    $pdf->MultiCell(25, 2, utf8_decode ($row['ciudad3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(119, 258);
    $pdf->MultiCell(25, 2, utf8_decode ($row['ciudad4']), 0, 'C', 0, 0, '', '', true);




    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143.5, 242);
     $pdf->MultiCell(25, 2, utf8_decode ($row['pais']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143.5, 247);
    $pdf->MultiCell(25, 2, utf8_decode ($row['pais2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143.5, 252.5);
     $pdf->MultiCell(25, 2, utf8_decode ($row['pais3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143.5 ,258);
     $pdf->MultiCell(25, 2, utf8_decode ($row['pais4']), 0, 'C', 0, 0, '', '', true);




    $pdf->SetFont('Helvetica', '', 7 , '', 'false');
    $pdf->SetXY(172.5, 242);
    $pdf->MultiCell(25, 2, utf8_decode ($row['moneda']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(172.5, 247);
    $pdf->MultiCell(25, 2, utf8_decode ($row['moneda2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(172.5, 252.5);
    $pdf->MultiCell(25, 2, utf8_decode ($row['moneda3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(172.5 ,258);
    $pdf->MultiCell(25, 2, utf8_decode ($row['moneda4']), 0, 'C', 0, 0, '', '', true);
    
    

    
    
    

    //-------------------------financiera-------------------------------
   

  
}
//-*--------------------------------accionistas-------------------------------------------------------------



    //--------------------------------------------------------------------------------------------------------
    /*
      
}
    **/

$id=$_GET['id'];


$sql="SELECT *  FROM proveedor INNER JOIN infofiscal ON proveedor.id_proveedor = infofiscal.id_proveedor INNER JOIN infofinanciera ON proveedor.id_proveedor = infofinanciera.id_proveedor  INNER JOIN sector_publico ON proveedor.id_proveedor = sector_publico.id_proveedor INNER JOIN operaciones_internacionales ON proveedor.id_proveedor = operaciones_internacionales.id_proveedor INNER JOIN identificacion_accionistas ON proveedor.id_proveedor = identificacion_accionistas.id_proveedor                    INNER JOIN representantes_legales ON proveedor.id_proveedor = representantes_legales.id_proveedor  INNER JOIN contador_revisor ON proveedor.id_proveedor = contador_revisor.id_proveedor   INNER JOIN criterio_seleccion ON proveedor.id_proveedor = criterio_seleccion.id_proveedor  INNER JOIN certificacionesgen ON proveedor.id_proveedor = certificacionesgen.id_proveedor INNER JOIN documento ON proveedor.id_proveedor = documento.id_proveedor  WHERE proveedor.id_proveedor = '$id'";

$result = $conn->query($sql);

$pdf->AddPage();
$pdf->Image('formato_2.jpg', 1, 2, 208, 289, 'jpg');
$pdf->SetFont('Arial','B',12);

while ($row = $result->fetch_assoc()) {
    
    
    
        
    //--------------------------------accionistas------------------
    
    
   
            
    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 15);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identificacion1']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 19.5);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identificacion2']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 24);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identificacion3']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 28.5);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identificacion4']), 0, 0,'L');  
    
    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 33.5);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identificacion5']), 0, 0,'L');





    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 15);
    $pdf->Cell(60, 0, utf8_decode ($row['identificacion_aso1']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 19.5);
    $pdf->Cell(60, 0, utf8_decode ($row['identificacion_aso2']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 24);
    $pdf->Cell(60, 0, utf8_decode ($row['identificacion_aso3']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 28.5);
    $pdf->Cell(60, 0, utf8_decode ($row['identificacion_aso4']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 33.5);
    $pdf->Cell(60, 0, utf8_decode ($row['identificacion_aso5']), 0, 0,'C');

      
    
      
    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(66, 13);
    $pdf->MultiCell(29, 2, utf8_decode ($row['nombre_1']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(66, 17.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['nombre_2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(66, 22.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['nombre_3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(66, 27);
    $pdf->MultiCell(29, 2, utf8_decode ($row['nombre_4']), 0, 'C', 0, 0, '', '', true);
    
    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(66, 31.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['nombre_5']), 0, 'C', 0, 0, '', '', true);



    

         
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 14);
    $pdf->MultiCell(29, 2, utf8_decode ($row['porcentaje_participacion1']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 18);
    $pdf->MultiCell(29, 2, utf8_decode ($row['porcentaje_participacion2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 23.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['porcentaje_participacion3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 28);
    $pdf->MultiCell(29, 2, utf8_decode ($row['porcentaje_participacion4']), 0, 'C', 0, 0, '', '', true);
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 32.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['porcentaje_participacion5']), 0, 'C', 0, 0, '', '', true);

    

    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(116, 14);
    $pdf->MultiCell(29, 2, utf8_decode ($row['manejo_recursos1']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(116, 18);
    $pdf->MultiCell(29, 2, utf8_decode ($row['manejo_recursos2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(116, 23.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['manejo_recursos3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(116, 28);
    $pdf->MultiCell(29, 2, utf8_decode ($row['manejo_recursos4']), 0, 'C', 0, 0, '', '', true);
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(116, 32.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['manejo_recursos5']), 0, 'C', 0, 0, '', '', true);

    
    
      
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(142.5, 14);
    $pdf->MultiCell(29, 2, utf8_decode ($row['reconocimiento_publico1']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(142.5, 18);
    $pdf->MultiCell(29, 2, utf8_decode ($row['reconocimiento_publico2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(142.5, 23.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['reconocimiento_publico3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(142.5, 28);
    $pdf->MultiCell(29, 2, utf8_decode ($row['reconocimiento_publico4']), 0, 'C', 0, 0, '', '', true);
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(142.5, 32.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['reconocimiento_publico5']), 0, 'C', 0, 0, '', '', true);

    
    
      $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(170, 14);
    $pdf->MultiCell(29, 2, utf8_decode ($row['persona_expuesta1']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(170, 18);
    $pdf->MultiCell(29, 2, utf8_decode ($row['persona_expuesta2']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(170, 23.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['persona_expuesta3']), 0, 'C', 0, 0, '', '', true);

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(170, 28);
    $pdf->MultiCell(29, 2, utf8_decode ($row['persona_expuesta4']), 0, 'C', 0, 0, '', '', true);
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(170, 32.5);
    $pdf->MultiCell(29, 2, utf8_decode ($row['persona_expuesta5']), 0, 'C', 0, 0, '', '', true);

//-----------------------------representantes_legales------------------------------
    
    
    
    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 53);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion1A']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 58.5);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion2A']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 64);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion3A']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 69);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion4A']), 0, 0,'L');  
    
    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 74.5);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion5A']), 0, 0,'L');


    
    
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 53);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion1A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 58.5);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion2A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 64);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion3A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 69);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion4A']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(16, 74.5);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion5A']), 0, 0,'C');
    
 
    
        
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(59, 53);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_1A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(59, 58.5);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_2A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(59, 64);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_3A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(59, 69);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_4A']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(59, 74.5);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_5A']), 0, 0,'C');
    
    
    
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 53);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos1A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 58.5);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos2A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 64);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos3A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 69);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos4A']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 74.5);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos5A']), 0, 0,'C');
    
    
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 53);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico1A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 58.5);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico2A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 64);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico3A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 69);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico4A']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 74.5);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico5A']), 0, 0,'C');
    
    
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 53);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta1A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 58.5);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta2A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 64);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta3A']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 69);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta4A']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 74.5);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta5A']), 0, 0,'C');
    


    //--------------------------contador y revisor-----------------
    
    
    
    
    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 96);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion1B']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 101);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion2B']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 105.5);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion3B']), 0, 0,'L');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 110.5);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion4B']), 0, 0,'L');  
    
    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(12, 115.5);
    $pdf->Cell(60, 0, utf8_decode ($row['tipo_identicacion5B']), 0, 0,'L');

    
    

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(16, 96);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion1B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(16, 101);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion2B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(16, 105.5);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion3B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(16, 110.5);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion4B']), 0, 0,'C');  
    
    $pdf->SetFont('Helvetica', '', 6, '', 'false');
    $pdf->SetXY(16, 115.5);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_identificacion5B']), 0, 0,'C');
    
    
    
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(60, 96);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_1B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(60, 101);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_2B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(60, 105.5);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_3B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(60, 110.5);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_4B']), 0, 0,'C');  
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(60, 115.5);
    $pdf->Cell(60, 0, utf8_decode ($row['nombre_5B']), 0, 0,'C');

    
      $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 96);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos1B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 101);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos2B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 105.5);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos3B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 110.5);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos4B']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(102, 115.5);
    $pdf->Cell(60, 0, utf8_decode ($row['manejo_recursos5B']), 0, 0,'C');
    
    
  
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 96);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico1B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 101);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico2B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 105.5);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico3B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 110.5);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico4B']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(127, 115.5);
    $pdf->Cell(60, 0, utf8_decode ($row['reconocimiento_publico5B']), 0, 0,'C');
    
 
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 96);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta1B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 101);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta2B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 105.5);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta3B']), 0, 0,'C');

    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 110.5);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta4B']), 0, 0,'C');
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(155, 115.5);
    $pdf->Cell(60, 0, utf8_decode ($row['persona_expuesta5B']), 0, 0,'C');
    
    
   

   
    
    
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(24, 125);
    $pdf->Cell(60,0, utf8_decode ($row['titular_cuenta']),0,0,'C');
    
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(17, 131.5);
    $pdf->Cell(60,0, utf8_decode ($row['banco']),0,0,'C');
    
    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(17, 138);
    $pdf->Cell(60,0, utf8_decode ($row['codigo']),0,0,'C');
    
    
      if($row['tipo_cuenta'] == 'ahorros'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 130);
    $pdf->Cell(60, 0, utf8_decode ($row['numero_cuenta']), 0, 0,'C');
        
    }elseif($row['tipo_cuenta'] == 'corriente'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(142, 130);
    $pdf->Cell(60, 0, utf8_decode  ($row['numero_cuenta']), 0, 0,'C');
        
    }
    
    
    
     if($row['modalidad_pago'] == 'contado'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 136);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['modalidad_pago'] == '30Dias'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(120, 136);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['modalidad_pago'] == '60Dias'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(160, 136.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
    
    }
    

    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(120, 140);
    $pdf->Cell(60,0, utf8_decode ($row['cupo_credito']),0,0,'C');
    
    
    
    
    
    
    //----------------------criterios seleccion--------------------------------
    

    
       if($row['tiempo_entrega'] == '30Dias'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(15, 149);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['tiempo_entrega'] == '60Dias'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(32, 149);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['tiempo_entrega'] == '90Dias'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(42, 149);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
           
    } 
    
  
    if($row['ofrece_credito'] == '30Dias'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(15, 155.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['ofrece_credito'] == '60Dias'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(32, 155.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['ofrece_credito'] == '90Dias'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(42, 155.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C'); 
        
    }elseif($row['ofrece_credito'] == 'otro'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(63, 155.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
    
           
    }  

     $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(84.5, 155.5);
    $pdf->Cell(60,0, utf8_decode ($row['otro_credito']),0,0,'C');
    
    
    

    
        if($row['suministra_muestra'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(15, 160.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['suministra_muestra'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(37, 160.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
    if($row['garantia_soporte'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(15, 166);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['garantia_soporte'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(37,166);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
    

      
        if($row['maneja_sostenibles'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(148, 149);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['maneja_sostenibles'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(160, 149);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
    
            if($row['gestiona_residuos'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(148, 155.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['gestiona_residuos'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(160,155.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
    

    $pdf->SetFont('', '', 7, '', 'false');
    $pdf->SetXY(90, 174);
    $pdf->Cell(60,0, utf8_decode ($row['certificaciones_acreditadas']),0,0,'C');
    
 
    
    //------------------------calidad_productos------------------------------
    
    
    if($row['gestion_calidad'] == 'si'){
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(57, 186);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['gestion_calidad'] == 'no'){
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(86, 186);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
   $pdf->SetFont('Helvetica', '', 7, '', 'false');
     $pdf->SetXY(131, 184.5);
    $pdf->MultiCell(75, 2, utf8_decode ($row['observaciones1']), 0, 'L', 0, 0, '', '', true);
     
    if($row['gestion_ambiente'] == 'si'){
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(57, 193);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['gestion_ambiente'] == 'no'){
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(86, 193);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
     $pdf->SetFont('Helvetica', '', 7, '', 'false');
     $pdf->SetXY(131, 191.5);
    $pdf->MultiCell(75, 2, utf8_decode ($row['observaciones2']), 0, 'L', 0, 0, '', '', true);
     
    
        
    if($row['gestion_saludSeguridad'] == 'si'){
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(57, 200);
    $pdf->Cell(60, 0,utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['gestion_saludSeguridad'] == 'no'){
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(86, 200);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(131, 198);
    $pdf->MultiCell(74, 2, utf8_decode ($row['observaciones3']), 0, 'L', 0, 0, '', '', true);
     
    
     if($row['gestion_seguridad'] == 'si'){
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(57,207);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['gestion_seguridad'] == 'no'){
    $pdf->SetFont('Helvetica', '', 8, '', 'false');
    $pdf->SetXY(86, 207);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(131, 205);
    $pdf->MultiCell(74, 2, utf8_decode ($row['observaciones4']), 0, 'L', 0, 0, '', '', true);
    
    
     if($row['wrap'] == 'si'){
    $pdf->SetFont('Helvetica', '', 9, '', 'false');
    $pdf->SetXY(57, 215);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['wrap'] == 'no'){
    $pdf->SetFont('Helvetica', '', 9, '', 'false');
    $pdf->SetXY(86, 215);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    
     $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(131, 213);
    $pdf->MultiCell(74, 2, utf8_decode ($row['observaciones5']), 0, 'L', 0, 0, '', '', true);
    
   
//-------------------documentacion----------------------------------
    
    
    if($row['fotocopia_cedula'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 229);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['fotocopia_cedula'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 229);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['fotocopia_cedula'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 229);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
     $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 227);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_1']), 0, 'L', 0, 0, '', '', true);
    


  if($row['certificado_camara'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 235);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificado_camara'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 235);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificado_camara'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 235);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
     $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 232.5);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_2']), 0, 'L', 0, 0, '', '', true);
    
    

    
  if($row['fotocopia_rut'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 241);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['fotocopia_rut'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 241);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['fotocopia_rut'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 241);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 237.5);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_3']), 0, 'L', 0, 0, '', '', true);

    
        
  if($row['certificacion_accionaria'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 247);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificacion_accionaria'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 247);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificacion_accionaria'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 247);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 243.5);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_4']), 0, 'L', 0, 0, '', '', true);
    
  

        
  if($row['antecedentes_disciplinarios'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 253);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['antecedentes_disciplinarios'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 253);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['antecedentes_disciplinarios'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 253);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 250.5);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_5']), 0, 'L', 0, 0, '', '', true);
    
    
    
    if($row['certificado_existencia'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 260);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificado_existencia'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 260);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificado_existencia'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 260);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 258);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_6']), 0, 'L', 0, 0, '', '', true);
    
    
    
    if($row['resolucion_facturacion'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 268);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['resolucion_facturacion'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 268);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['resolucion_facturacion'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 268);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 265.5);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_7']), 0, 'L', 0, 0, '', '', true);

    
}


$id=$_GET['id'];


$sql="SELECT *  FROM proveedor INNER JOIN infofiscal ON proveedor.id_proveedor = infofiscal.id_proveedor INNER JOIN infofinanciera ON proveedor.id_proveedor = infofinanciera.id_proveedor  INNER JOIN sector_publico ON proveedor.id_proveedor = sector_publico.id_proveedor INNER JOIN operaciones_internacionales ON proveedor.id_proveedor = operaciones_internacionales.id_proveedor INNER JOIN identificacion_accionistas ON proveedor.id_proveedor = identificacion_accionistas.id_proveedor                    INNER JOIN representantes_legales ON proveedor.id_proveedor = representantes_legales.id_proveedor  INNER JOIN contador_revisor ON proveedor.id_proveedor = contador_revisor.id_proveedor   INNER JOIN criterio_seleccion ON proveedor.id_proveedor = criterio_seleccion.id_proveedor  INNER JOIN certificacionesgen ON proveedor.id_proveedor = certificacionesgen.id_proveedor INNER JOIN documento ON proveedor.id_proveedor = documento.id_proveedor  WHERE proveedor.id_proveedor = '$id'";

$result = $conn->query($sql);

$pdf->AddPage();
$pdf->Image('formato_3.jpg', 1, 2, 208, 289, 'jpg');
$pdf->SetFont('Arial','B',12);

while ($row = $result->fetch_assoc()) {
    
    
    
 if($row['certificacion_bancaria'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 15);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificacion_bancaria'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 15);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificacion_bancaria'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 15);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 13);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_8']), 0, 'L', 0, 0, '', '', true);
    
    
  
    if($row['estados_financieros'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 21);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['estados_financieros'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95,21);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['estados_financieros'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 21);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 18);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_9']), 0, 'L', 0, 0, '', '', true);

    
    
    
     if($row['declaracion_renta'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 27);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['declaracion_renta'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 27);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['declaracion_renta'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 27);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 24);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_10']), 0, 'L', 0, 0, '', '', true);
    
    
    
    

    
    if($row['apoderado'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 36);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['apoderado'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 36);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['apoderado'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 36);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 32);
    $pdf->MultiCell(60, 3, utf8_decode ($row['observ_11']), 0, 'L', 0, 0, '', '', true);
    
    
    

    if($row['certificaciones'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 50);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificaciones'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 50);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['certificaciones'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 50);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 46);
    $pdf->MultiCell(60, 4, utf8_decode ($row['observ_12']), 0, 'L', 0, 0, '', '', true);
    
    
    
       
    if($row['plan_contingencia'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 62);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['plan_contingencia'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 62);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['plan_contingencia'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 62);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 59.5);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_13']), 0, 'L', 0, 0, '', '', true);
    
    
    

    
        
        if($row['resoluciones_permisos'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 69.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['resoluciones_permisos'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 69.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['resoluciones_permisos'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 69.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 66.5);
    $pdf->MultiCell(60, 3, utf8_decode ($row['observ_14']), 0, 'L', 0, 0, '', '', true);
    

    
    if($row['referencias_comerciales'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 77);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['referencias_comerciales'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 77);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['referencias_comerciales'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 77);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 74.5);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_15']), 0, 'L', 0, 0, '', '', true);
    
    
    
    
    if($row['gestion_residuos'] == 'si'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(80, 83.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['gestion_residuos'] == 'no'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(95, 83.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }elseif($row['gestion_residuos'] == 'na'){
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(107, 83.5);
    $pdf->Cell(60, 0, utf8_decode ('X'), 0, 0,'C');
        
    }
    $pdf->SetFont('Helvetica', '', 7, '', 'false');
    $pdf->SetXY(143, 81);
    $pdf->MultiCell(60, 2, utf8_decode ($row['observ_16']), 0, 'L', 0, 0, '', '', true);
    
    
    






    $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(15, 148);
    $pdf->Cell(60,0, utf8_decode ($row['nombre_contactoProveedor']),0,0,'C');
    
    $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(15, 160);
    $pdf->Cell(60,0, utf8_decode ($row['nombre_representanteLegal']),0,0,'C');
    
    
    $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(106, 148);
    $pdf->Cell(60,0, utf8_decode ($row['contacto_empresa']),0,0,'C');
    
     $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(15, 165);
    $pdf->Cell(60,0, utf8_decode ($row['cargo']),0,0,'C');
    
   
     $pdf->SetFont('', '', 8, '', 'false');
    $pdf->SetXY(106, 160 );
    $pdf->Cell(60,0, utf8_decode ($row['fecha_registro']),0,0,'C');
   
    
    
    }




ob_start();
$pdf->Output();

ob_end_flush();
// Cerrar la conexión a la base de datos
$conn->close();