<?php
include_once "../control/controlProductos.php";
$idProducto =$_POST['idProducto'];
$nombreProducto = $_POST['nombreProducto'];
$precioVenta = $_POST['precioVenta'];
$stock = $_POST['stock'];
$stockMinimo= $_POST['stockMinimo'];
$sku = $_POST['sku'];
$barCode = $_POST['barCode'];
$idCategoria = $_POST['idCategoria'];
$porcentaje_ganancia = 0;

if(editProduct($idProducto,$nombreProducto,$precioVenta,$stock,$stockMinimo,$sku,$barCode,$porcentaje_ganancia,$idCategoria)){
	$mjeType =  "1";
	$mjeText =  "Se ha actualizado correctamente";
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