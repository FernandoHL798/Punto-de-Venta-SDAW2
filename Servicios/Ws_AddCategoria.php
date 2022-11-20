<?php
require_once "../control/controlCategoria.php";
$nombre_categoria="Oficina";
if(insertaCategoria($nombre_categoria)){
    $mjeType =  "1";
    $mjeText =  "Se ha registrado correctamente";
} else {
    $mjeType =  "0";
    $mjeText =  "Hubo un error";
}

$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);