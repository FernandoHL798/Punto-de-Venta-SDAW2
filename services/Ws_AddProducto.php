<?php

//Al ser muchos parametros, se usa el metodo params para poder guardar
//los datos en un objeto llamado params para no enviar tanta variable por parametro

//DEFINIDA POR FRONTEND
$nombre = $_POST['nombreProducto'];
$cantidad = $_POST['cantidad'];
$stock = $_POST['cantidad'];
$stockMinimo = $_POST['stockMinimo'];
$sku = $_POST['sku'];
$precioVenta = $_POST['precioVenta'];
$ruta_img = $_POST['ruta_img'];
$id_categoria_fk = $_POST['categoria'];


//DEFINIDA POR FRONTEND

$params = [
	"nombreProducto" =>$nombre,
	"stock" =>$stock,
	"cantidad" =>$cantidad,
	"stockMinimo" =>$stockMinimo,
	"sku" =>$sku,
	"barCode" =>,
	"status" =>"1",
	"ruta_img" =>$ruta_img,
	"porcentaje_ganancia" =>"30",
	"id_categoria_fk"=>$id_categoria_fk
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