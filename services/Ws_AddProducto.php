<?php

//Al ser muchos parametros, se usa el metodo params para poder guardar
//los datos en un objeto llamado params para no enviar tanta variable por parametro

//DEFINIDA POR FRONTEND
$nombre = $_POST['nombreProducto'];
$stock = $_POST['stock'];
$precioVenta = $_POST['precioVenta'];
$stockMinimo = $_POST['stockMinimo'];
$sku = $_POST['sku'];
$barCode = $_POST['barCode'];
$id_categoria_fk = $_POST['id_categoria_fk'];
//DEFINIDA POR FRONTEND

$params = [
	"nombreProducto" =>$nombre,
	"stock" =>$stock,
	"precioVenta" =>$precioVenta,
	"stockMinimo" =>$stockMinimo,
	"sku" =>$sku,
	"barCode" =>$barCode,
	"status" =>"1",
	"ruta_img" =>"786732846hdsuhudsf",
	"porcentaje_ganancia" =>"30",
	//solo si la categoria esta definida se guardan los productos
	"id_categoria_fk"=>52
];
include_once "../control/controlProductos.php";

if(insertProduct($params)){
	$mjeType =  "1";
    $mjeText =  "Se ha registrado correctamente";
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