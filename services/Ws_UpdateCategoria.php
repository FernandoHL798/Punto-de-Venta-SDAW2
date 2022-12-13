<?php

if(isset($_POST['idCategoria']) && isset($_POST['nombreCategoria'])){
    require_once "../control/controlCategorias.php";
    /**
     * Variables que se van a usar  que llegan de Front o del API
     */
    $idCategoria = $_POST['idCategoria'];
    $nombreCategoria = $_POST['nombreCategoria'];

    if(editaCategoria($idCategoria,$nombreCategoria)){
        $mjeType =  "1";
        $mjeText =  "Se ha actualizado correctamente";
    } else{
        $mjeType =  "-1";
        $mjeText =  "Hubo un error interno";
    }    
} else{
    $mjeType =  "0";
        $mjeText =  "Faltan datos";
}

$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);