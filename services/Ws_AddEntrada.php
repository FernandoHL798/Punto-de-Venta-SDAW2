<?php
//Aqui comienza el algoritmo
//Nos va a llegar un array de datos los cuales tenemos que enviar a backEnd
//Estos son los Id de los proveedores los productos que compramos con ese proveedor, cantidad de los mismos y precio U.

//Recibimos el array
$arrayDatos = $_POST['arrayProductos'];
//Incluimos el control de entradas, ya que aquí es donde se realiza todo el papeleo
include_once "../control/controlEntrada.php";
//Mandamos a llamar la funcion de crear entrada, alla es donde se realizará todo el algoritmo
if(insertarEntrada($arrayDatos)){




	$mjeType =  "1";
    $mjeText =  "Se ha realizado la accion correctamente";
} else{
	$mjeType =  "-1";
    $mjeText =  "Hay un error interno";
}
$mje = array(
    "mjeType"=> $mjeType,
    "mjeText" => $mjeText
);
echo json_encode($mje);