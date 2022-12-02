<?php
include_once "../control/controlRegistros.php";
$idProducto = 2;
$idRegistroSalida = 10;
$cantidad = 50;

if(registroSalida($idRegistroSalida,$idProducto,$cantidad)){
	$mjeType =  "1";
    $mjeText =  "Se ha registrado la salida correctamente";
} else{
	$mjeType =  "-1";
    $mjeText =  "Error interno";
}

$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);