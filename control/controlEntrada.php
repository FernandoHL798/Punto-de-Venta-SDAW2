<?php
include_once "../model/Entrada.php";

//Generador de numeros
function genIdEntrada($strength = 6)  {
    $input = '0123456789';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}
//Agrupador de arrays por una key
function groupArray($array,$groupkey)
{
 if (count($array)>0)
 {
    $keys = array_keys($array[0]);
    $removekey = array_search($groupkey, $keys);        if ($removekey===false)
        return array("Clave \"$groupkey\" no existe");
    else
        unset($keys[$removekey]);
    $groupcriteria = array();
    $return=array();
    foreach($array as $value)
    {
        $item=null;
        foreach ($keys as $key)
        {
            $item[$key] = $value[$key];
        }
        $busca = array_search($value[$groupkey], $groupcriteria);
        if ($busca === false)
        {
            $groupcriteria[]=$value[$groupkey];
            $return[]=array($groupkey=>$value[$groupkey],'groupeddata'=>array());
            $busca=count($return)-1;
        }
        $return[$busca]['groupeddata'][]=$item;
    }
    return $return;
 }
 else
    return array();
}
/**
 * Funcion para insertar entrada
 */
function insertarEntrada($arrayDatos){
    //Generamos el objeto para poder acceder a sus funciones del modelo
    $obj_entrada = new Entrada();
    //Convertimos el array de datos en un array de datos agrupados con una funcion
    //groupArray(Array a agrupar,claveconlaquebusca)
    $nuevoArray = groupArray($arrayDatos,'proveedor');
    $resultado=true;
    //Con el nuevo array generamos las distintas ordenes y distintos registros del producto a modificar
    //incluimos el controlRegistros para poder hacer los registros
    include_once "controlRegistros.php";
    foreach($nuevoArray as $proveedor){
        $newClave = genIdEntrada();
        $newClave.= date('ymdhms');
        $obj_entrada->setIdEntrada($newClave);
        $obj_entrada->setPROVEEDOR($proveedor['proveedor']);
        $obj_entrada->setFecha(date('y-m-d h:m:s'));
        //Si se hace el registro de la fecha de compra, entonces comenzamos con el guardado en los registros de enttrada
        if($obj_entrada->RegistraEntrada()){
            //Recorremos el array que esta dentro de el array de proveedor
            foreach($proveedor['groupeddata'] as $productos){
                //Registramos en el registroEntrada
                if(registroEntrada($productos['producto'],$obj_entrada->getIdEntrada(),$productos['cantidad'] ,$productos['precio'])){
                    $resultado = true;
                } else{
                    $resultado = false;
                }
            }
        }
        
    }
    return $resultado;

    
}

/**
 * Funcion para consultar entrada
 */
function listarEntrada($idEntrada){
    $obj_entrada = new Entrada();

    return $obj_entrada->ConsultaEntrada($idEntrada);
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