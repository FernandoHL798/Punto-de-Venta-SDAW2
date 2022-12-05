<?php
include_once "../model/Salida.php";
/**
 * 
 * Falta de completar setters and getters de Salida.php
 * 
 */

/**
 * Funcion para insertar salida
 */
function insertarSalida($PRODUCTOS_REGISTRO,$createdAT,$subTotalCompra,$ivaTotal,$totalCompra){
    $obj_salida = new Salida();

    $obj_salida->setPRODUCTOSREGISTRO($PRODUCTOS_REGISTRO);
    $obj_salida->setCreatedAt($createdAT);
    $obj_salida->setSubTotalCompra($subTotalCompra);
    $obj_salida->setIvaTotal($ivaTotal);
    $obj_salida->setTotalCompra($totalCompra);
    
    return $obj_salida->RegistraSalida();
}

/**
 * Funcion para consultar salida
 */
function consultaSalida(){
    $obj_salida = new Salida();

    return $obj_salida->ConsultaSalida();
}

/**
 * Funcion para listar salida con fechas
 */
/*
function ListaSalidaDate($value,$fecha){
	$obj_salida = new Salida();
	//Value es el valor que maneja la condicion de si se piden todos o solo los que tengan la fecha
	if($value==1){
        $obj_salida->setCreatedAt($fecha);
	}
	return $obj_salida->Listar($value);
}*/

?>