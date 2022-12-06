<?php
function consultaUsuario($username,$pw){
    include_once "../model/Usuario.php";
    $user = new USUARIO();
    $user->setUsername($username);
    $user->setPassword($pw);
    return $user->queryConsultaUsuario();
}

//Buscar el correo electronico entrante y pw dentro De NUESTRA BASE DE DATOS
function autorizaAccesoAlmacen($correo,$pw){
    if (buscarUsuarioAPI()){
        //buscar el usuario en la BD
        return true;
    }
    return false;
}

//Implementada por Chris R.
function buscarUsuarioAPI($correo,$pw){
    return true;
}

//Busca que exista o no el registro ya en BD,
// SI existe, consultar y regresar falso
//Si no existe registrarlo
function buscaRegistro($nombre, $email, $role, $pw){

}

//busca y regresa si true o false si existe o no el correo ya registrado
function buscarEmailRepetido(){

}


