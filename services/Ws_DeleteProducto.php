<?php
include_once "../control/controlProductos.php";
$idProducto =50;
if(eliminaProducto($idProducto)){
	$mjeType =  "1";
    $mjeText =  "Se ha eliminado correctamente";
} else{
	$mjeType =  "-1";
    $mjeText =  "Error Interno";

}
$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);
?>