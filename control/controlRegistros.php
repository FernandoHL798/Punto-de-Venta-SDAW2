<?php
/*

Si el action es true, será adicion, si es false, es resta.

Registros de entrada
*/
function registroEntrada($idProducto,$idRegistroEntrada,$cantidad,$precioCompra){
	include_once "../model/RegistroProducto.php";
	$obj_registro = new ProductoRegistro();
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
	include_once "../model/RegistroProducto.php";
	$obj_registro = new ProductoRegistro ();
	$obj_registro->setIdRegistroSalida($idRegistroSalida);
	$obj_registro->setIdProducto($idProducto);
	$obj_registro->setCantidad($cantidad);
	if($obj_registro->queryRegistraSalida()){
		//Si se realiza la salida correctamente, el stock se modificará, haciendo una resta a el stockk actual al que se le quita la cantidad
		return $obj_registro->modificaStock(false,$idProducto,$cantidad);
	}
	//en caso de que no se registre, se retorna un false directamente;
	return false;
}
