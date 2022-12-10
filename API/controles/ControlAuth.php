<?php

class ControlAuth
{
    static public function validaCredenciales(){
        return (self::consultaHeadersAuthEnDBLocal());
    }

    static private function consultaHeadersAuthEnDBLocal(){
        //acceder a la carpeta DE CONTROL USUARIO
        include_once("../control/controlUsuarios.php");
        $username = $_SERVER['PHP_AUTH_USER'];
        $key = $_SERVER['PHP_AUTH_PW'];
        return consultaUsuario($username, $key);
    }
}