<?php
require_once "../control/controlUsuarios.php";
/**
 * Variables que se van a usar  que llegan de Front o del API
 */

//DEFINIDA POR FRONTEND
$email =  $_POST['email'];
$password = $_POST['password'];
//DEFINIDA POR FRONTEND

//Controlador de usuarios Sesiones CONSUMO DE API

if(buscarUsuarioAPI($email, $password)){
    $mjeType =  "1";
    $mjeText =  "Iniciando Sesión";
} else {
    $mjeType =  "0";
    $mjeText =  "El usuario no existe en los registros de Dashboard";
}

$mje = array(
    "success" => $mjeType,
    "message" => $mjeText
);
echo json_encode($mje);