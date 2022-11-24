<?php

function getListaProductos($value,$barCode){
	include_once "../model/Producto.php";
	$obj_producto = new Producto();
	//Value es el valor que maneja la condicion de si se piden todos o solo los que tengan el barcode
	if($value==1){
		$obj_producto->setBarCode($barCode);
	}
	return $obj_producto->queryBuscaProducto($value);
}