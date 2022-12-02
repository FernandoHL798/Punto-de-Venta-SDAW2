<?php
include_once  "../control/controlRegistros.php";
$idProducto = 2;
$idRegistroEntrada= 10;
$cantidad = 20;
$precioCompra = 265;

if(registroEntrada($idProducto,$idRegistroEntrada,$cantidad,$precioCompra)){
	$mjeType =  "1";
    $mjeText =  "Se ha registrado la entrada correctamente";
} else{
	$mjeType =  "-1";
    $mjeText =  "Error interno";
}
$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);