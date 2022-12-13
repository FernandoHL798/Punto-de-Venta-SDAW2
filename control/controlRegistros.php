<?php
/*

Si el action es true, será adicion, si es false, es resta.

Registros de entrada
*/
function registroEntrada($idProducto,$idRegistroEntrada,$cantidad,$precioCompra){
	include_once "../model/RegistroProducto.php";
	$obj_registro = new RegistroProducto();
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
function registroSalida($listaProductos,$tipo){
    include_once "../model/Salida.php";
	include_once "../model/TOOLS.php";
	$objSalida = new Salida();
	$IDgenerado = TOOLS::genIdBIGInt();
	$objSalida->setIdSalida($IDgenerado);
	$objSalida->setLog("Se registro una salida por: ". $tipo);
	//Se crea el registro de salida den la BD
	if ($objSalida->RegistraSalida()){
        //Iteramos los pdocutos para asociarlos al registro de salida
        foreach ($listaProductos as $producto){
            registraSalidaProducto($producto['id'],$IDgenerado,$producto['cantidad']);
        }
        return true;
    }
	//en caso de que no se registre, se retorna un false directamente;
	return false;
}


/**
 * @param IdProducto del producto a actualizar en el stock
 * @param IdSalida del registro de salida
 * @param Cantidad a descontar
 */
function registraSalidaProducto($idProducto, $idSalida, $cantidad){
    include_once "../model/RegistroProducto.php";
    $obj_registro = new RegistroProducto();
    $obj_registro->setIdRegistroSalida($idSalida);
    $obj_registro->setIdProducto($idProducto);
    $obj_registro->setCantidad($cantidad);
    if($obj_registro->queryRegistraSalida()){
        //Si se realiza la salida correctamente, el stock se modificará, haciendo una resta a el stockk actual al que se le quita la cantidad
        $obj_registro->modificaStock(false,$obj_registro->getIdProducto(),$obj_registro->getCantidad());
    }
}
