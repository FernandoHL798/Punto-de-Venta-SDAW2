<?php

//Al ser muchos parametros, se usa el metodo params para poder guardar
//los datos en un objeto llamado params para no enviar tanta variable por parametro
$params = [
	"nombreProducto" =>"Algodon",
	"stock" =>"10",
	"precioVenta" =>"5",
	"stockMinimo" =>"5",
	"sku" =>"98928918",
	"barCode" =>"778834876834",
	"status" =>"1",
	"ruta_img" =>"786732846hdsuhudsf",
	"porcentaje_ganancia" =>"30",
	"id_categoria_fk"=>"2"
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