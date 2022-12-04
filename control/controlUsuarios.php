<?php
function consultaUsuario($username,$pw){
    include_once "../model/Usuario.php";
    $user = new USUARIO();
    $user->setUsername($username);
    $user->setPassword($pw);
    return $user->queryConsultaUsuario();
}