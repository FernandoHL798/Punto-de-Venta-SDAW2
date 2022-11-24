<?php
include_once "../model/Producto.php";

/**
 * Function for insert product
 */
function insertProduct($nombreProducto,$stock,$precioVenta,$stockMinimo,$sku,$barCode,$status,$ruta_img,$porcentaje_ganancia){
    $obj_producto = new Producto();

    $obj_producto->setNombreProducto($nombreProducto);
    $obj_producto->setStock($stock);
    $obj_producto->setPrecioVenta($precioVenta);
    $obj_producto->setStockMinimo($stockMinimo);
    $obj_producto->setSku($sku);
    $obj_producto->setBarCode($barCode);
    $obj_producto->setRutaImg($ruta_img);
    $obj_producto->setPorcentajeGanancia($porcentaje_ganancia);

    return $obj_producto->queryCrearProducto();
}

/**
 * funcion para buscar producto
 */
function buscaProducto($nombreProducto,$barCode){
    $obj_producto = new Producto();

    $obj_producto->setNombreProducto($nombreProducto);
    $obj_producto->setBarCode($barCode);

    return $obj_producto->queryBuscaProducto();
}

/**
 * funcion para buscar info producto
 */
function buscaInfoProducto(){
    $obj_producto = new Producto();

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

    return $obj_producto->queryEditarCategoria();
}
?>