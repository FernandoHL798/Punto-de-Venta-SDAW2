<?php

class ControladorClientes
{
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
            $token_privado= str_replace("$","c",crypt($datos["nombre"].$datos["role"].$datos["email"] ,'$2a$07$afartwetsdAD52356FEDGsfhsd$'));

            $llave_secreta= str_replace("$","a",crypt($datos["email"].$datos["role"].$datos["nombre"] ,'$2a$07$afartwetsdAD52356FEDGsfhsd$'));

            $datos = array("nombre"=>$datos["nombre"],
                "role"=>$datos["role"],
                "email"=>$datos["email"],
                "id_cliente"=>$token_privado,
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
                    "token_privado"=>$token_privado,
                    "llave_secreta"=>$llave_secreta
                );

                echo json_encode($json,true);

            }
        }

    }
}