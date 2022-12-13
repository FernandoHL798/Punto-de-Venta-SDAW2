<?php
include_once "../control/controlProveedor.php";
$idProveedor="101";
$direccion = "Yanga S/N Col Independencia 2da Seccion";
$telefono ="5537091960";
$correo = "fernandohlqwe@gmail.com";
if(updateSupplier($idProveedor,$direccion,$telefono,$correo)){
	$mjeType =  "1";
    $mjeText =  "Se ha actualizado correctamente";
} else {
	$mjeType =  "-1";
    $mjeText =  "Error interno";
}

$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);