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
    include_once "../model/Usuario.php";
    $user = new Usuario();
    if (buscarUsuarioAPI()){
        //buscar el usuario en la BD
        $user->setEmail($correo);
        $user->setPassword($pw);
        return true;
    }
    return false;
}

//Implementada por Chris R.
function buscarUsuarioAPI($correo,$pw){
    include_once "../model/Usuario.php";
    $user = new User();
    $user->setEmail($correo);
    $user->setPassword($pw);
    return true;
}

//Busca que exista o no el registro ya en BD,
// SI existe, consultar y regresar falso
//Si no existe registrarlo
function buscaRegistro($nombre, $email, $role, $pw){
    include_once "../model/Usuario.php";
    $user = new Usuario();
    if(buscarUsuarioAPI() == true){
        return false;
    }
    else{
        return $user->creaUser();
    }
}

//busca y regresa si true o false si existe o no el correo ya registrado
function buscarEmailRepetido(){
    include_once "../model/Usuario.php";
    $user = new User();
    if(buscarUsuarioAPI()==true){
        return true;
    }
    else{
        return false;
    }
}

/**
 * Funcion para crear usuario
 */
function creaUser($nombre,$email,$pw,$role,$username){
    include_once "../model/Usuario.php";
    $user = new User();

    $user->setNombreUsuario($nombre);
    $user->setEmail($email);
    $user->setPassword($pw);
    $user->setRole($role);
    $user->setUsername($username);

    return $user->queryRegistrarUsuario();
}

/**
 * Funcion para editar usuario
 */
function editaUser($nombre,$email,$pw,$role,$username){
    include_once "../model/Usuario.php";
    $user = new User();

    $user->setNombreUsuario($nombre);
    $user->setEmail($email);
    $user->setPassword($pw);
    $user->setRole($role);
    $user->setUsername($username);

    return $user->queryUpdateUsuario();
}