<?php
include_once "../model/Producto.php";

/**
 * Function for insert product
 */

//$nombreProducto,$stock,$precioVenta,$stockMinimo,$sku,$barCode,$status,$ruta_img,$porcentaje_ganancia
function insertProduct($params){
    $obj_producto = new Producto();

    $obj_producto->setNombreProducto($params["nombreProducto"]);
    $obj_producto->setStock($params["stock"]);
    $obj_producto->setPrecioVenta($params["precioVenta"]);
    $obj_producto->setStockMinimo($params["stockMinimo"]);
    $obj_producto->setSku($params["sku"]);
    $obj_producto->setBarCode($params["barCode"]);
    $obj_producto->setRutaImg($params["ruta_img"]);
    $obj_producto->setPorcentajeGanancia($params["porcentaje_ganancia"]);
    $obj_producto->setIdCategoriaFk($params["id_categoria_fk"]);
    return $obj_producto->queryCrearProducto();
}

/**
 * funcion para buscar producto
 */
function getListaProductos($value,$barCode){
	include_once "../model/Producto.php";
	$obj_producto = new Producto();
	//Value es el valor que maneja la condicion de si se piden todos o solo los que tengan el barcode
	if($value==1){
		$obj_producto->setBarCode($barCode);
	}
	return $obj_producto->queryBuscaProducto($value);
}

/**
 * funcion para buscar info producto
 */
function buscaInfoProducto($idProducto){
    $obj_producto = new Producto();
    $obj_producto->setIdProducto($idProducto);
    return $obj_producto->queryConsultaInfoProducto();
}

/**
 * funcion para eliminar producto
 */
function eliminaProducto($idProducto){
    $obj_producto = new Producto();

    $obj_producto->setIdProducto($idProducto);

    return $obj_producto->queryEliminarProducto();
}

/**
 * function para editar producto
 */
function editProduct($nombreProducto,$stock,$precioVenta,$stockMinimo,$sku,$barCode,$status,$ruta_img,$porcentaje_ganancia){
    $obj_producto = new Producto();

    $obj_producto->setNombreProducto($nombreProducto);
    $obj_producto->setStock($stock);
    $obj_producto->setPrecioVenta($precioVenta);
    $obj_producto->setStockMinimo($stockMinimo);
    $obj_producto->setSku($sku);
    $obj_producto->setBarCode($barCode);
    $obj_producto->setRutaImg($ruta_img);
    $obj_producto->setPorcentajeGanancia($porcentaje_ganancia);

    return $obj_producto->queryEditarProducto();
}
?>