<?php
require_once "../control/controlCategoria.php";
/**
 * Variables que se van a usar  que llegan de Front o del API
 */
$idCategoria = "4";
$nombreCategoria = "Lavanderia";

if(editaCategoria($idCategoria,$nombreCategoria)){
    $mjeType =  "1";
    $mjeText =  "Se ha actualizado correctamente";
} else{
    $mjeType =  "0";
    $mjeText =  "Hubo un error interno";
}

$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);