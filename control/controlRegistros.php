<?php
/*

Si el action es true, será adicion, si es false, es resta.

Registros de entrada
*/
function registroEntrada($idProducto,$idRegistroEntrada,$cantidad,$precioCompra){
	include_once "../model/RegistroProducto.php";
	$obj_registro = new PoductoRegistro();
	$obj_registro->setIdProducto($idProducto);
	$obj_registro->setIdRegistroEntrada($idRegistroEntrada);
	$obj_registro->setCantidad($cantidad);
	$obj_registro->setPrecioCompra($precioCompra);

	if($obj_registro->queryRegistraEntrada()){
		//Si se realiza la entrada correctamente, el stock se modificará, haciendo una adicion a el stock del actual al que se le agregue la cantidad.
		return $obj_registro->modificaStock(true,$idProducto,$cantidad);

	}
	//En caso de que no se registre, se retornará falso
	return false;
}
/*
Registros de entrada
*/
function registroSalida($idRegistroSalida,$idProducto,$cantidad){

}
