<?php

include("config.php");
    $id=$_GET['id'];
    


    $sql="delete  from educacion where id_programa='".$id."' ";
    $resultado=mysqli_query($link ,$sql);

    if($resultado){
                echo"<script laguage='JavaScript'>
                alert('Se elimino el Registro Correctamente');
                location.assign('datos.php');
                </script>";


    }else{

        echo"<script laguage='JavaScript'>
        alert('ERROR!!!');
        location.assign('datos.php');
        </script>";

    }

?>