<?php
require_once "../control/controlCategoria.php";
$idCategoria ="9";

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