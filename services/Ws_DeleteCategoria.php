<?php
include_once "../control/controlCategorias.php";
/**
 * Variables que se van a usar  que llegan de Front o del API
 */
$idCategoria =$_POST['idCategoria'];

if(eliminaCategoria($idCategoria)){
    $mjeType = "1";
    $mjeText = "Se ha eliminado exitosamente";
} else{
    $mjeType = "0";
    $mjeText = "Se ha producido un error";
}

$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);