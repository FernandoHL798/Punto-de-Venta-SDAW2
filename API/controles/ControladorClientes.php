<?php

class ControladorClientes
{
    static public function validaCredenciales(){
        return (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']));
    }

    static public function consultaEnDBLocal(){
        //acceder a la carpeta DE CONTROL USUARIO
        require_once "../../control/controlRegistros.php";
        $username = isset($_SERVER['PHP_AUTH_USER']);
        $pw = $_SERVER['PHP_AUTH_PW'];
        return consultaUsuario($username, $pw);
    }

    public function registroClient($datos){
        /*=============================================
          Validar email
          =============================================*/
        if(isset($datos["email"]) &&
            !preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $datos["email"])){
            $json=array(
                "status"=>404,
                "detalle"=>"error en el campo email "

            );
            echo json_encode($json,true);
            return;
        }

        /*=============================================
		BUSCAR EL CORREO EN LA BASE DE DATOS LOCAL, Y SI NO EXISTE
		=============================================*/
        $resultControlCorreo = false;

        /*=============================================
                ALGORITMO -> REVISAR QUE NO EXISTA ACTRUALMENTE, PARA AGREGARLO
        =============================================*/
        if (!$resultControlCorreo){

            /*=============================================
            Generar credenciales del cliente
            =============================================*/
            $username= str_replace("$","c",crypt($datos["nombre"].$datos["role"].$datos["email"] ,'$2a$07$afartwetsdAD52356FEDGsfhsd$'));

            $llave_secreta= str_replace("$","a",crypt($datos["email"].$datos["role"].$datos["nombre"] ,'$2a$07$afartwetsdAD52356FEDGsfhsd$'));

            $datos = array("nombre"=>$datos["nombre"],
                "role"=>$datos["role"],
                "email"=>$datos["email"],
                "username"=>$username,
                "llave_secreta"=>$llave_secreta,
                "created_at"=>date('Y-m-d h:i:s'),
                "updated_at"=>date('Y-m-d h:i:s')
            );
            /*=============================================
            Crear el usuario en la BD y regresar Credenciales
            =============================================*/
            $create= true;

            if($create){
                $json=array(
                    "status"=>200,
                    "detalle"=> "se genero sus credenciales",
                    "username"=>$username,
                    "llave_secreta"=>$llave_secreta
                );

                echo json_encode($json,true);

            }
        }

    }
}