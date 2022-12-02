<?php
include_once "../control/controlProveedor.php";
$razon_social = "ReckreaStudios SA de CV";
$direccion = "Yanga S/N Col Independencia";
$telefono ="562525388";
$correo = "fernando@gmail.com";
$rfc = "HHEUU34553";

if(insertSupplier($razon_social,$direccion,$telefono,$correo,$rfc)){
	$mjeType =  "1";
    $mjeText =  "Se ha registrado correctamente";
} else {
	$mjeType =  "-1";
    $mjeText =  "Error interno";
}

$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);