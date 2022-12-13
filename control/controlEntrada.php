<?php
include_once "../model/Entrada.php";

/**
 * Funcion para insertar entrada
 */
function insertarEntrada($PRODUCTOS_REGISTRO,$PROVEEDOR,$fecha,$createdAT,$subTotalCompra,$ivaTotal,$totalCompra){
    $obj_entrada = new Entrada();

    $obj_entrada->setPRODUCTOSREGISTRO($PRODUCTOS_REGISTRO);
    $obj_entrada->setPROVEEDOR($PROVEEDOR);
    $obj_entrada->setFecha($fecha);
    $obj_entrada->setCreatedAt($createdAT);
    $obj_entrada->setSubTotalCompra($subTotalCompra);
    $obj_entrada->setIvaTotal($ivaTotal);
    $obj_entrada->setTotalCompra($totalCompra);
    return $obj_entrada->RegistraEntrada();
}

/**
 * Funcion para consultar entrada
 */
function listarEntrada(){
    $obj_entrada = new Entrada();

    return $obj_entrada->ConsultaEntrada();
}

/**
 * Funcion para listar entrada con fechas
 */
function ListaEntradaDate($value,$fechaIni,$fechaFin){
	$obj_entrada = new Entrada();
	//Value es el valor que maneja la condicion de si se piden todos o solo los que tengan la fecha inicial y fecha final
	return $obj_entrada->Listar($value,$fechaIni,$fechaFin);
}

?>