<?php
include_once "../control/controlProveedor.php";
$idProveedor = 101;
if(deleteSupplier($idProveedor)){
	$mjeType =  "1";
    $mjeText =  "Se ha eliminado correctamente";
} else {
	$mjeType =  "-1";
    $mjeText =  "Error interno";
}

$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);
