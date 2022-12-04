<?php
include_once "../control/controlProveedor.php";
//DEFINIDA POR FRONTEND
$razon_social = $_POST['razon_social'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$rfc = $_POST['rfc'];

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