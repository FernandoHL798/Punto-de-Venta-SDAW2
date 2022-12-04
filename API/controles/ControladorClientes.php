<?php

class ControladorClientes
{
    private function validaString($value){
        return isset($value) && !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/' , $value);
    }


    public function registroClient($datos){
        /*=============================================
          Validar nombre
          =============================================*/
        if(!$this->validaString($datos['nombre'])){
            $json = array(
                "status" => 404,
                "detalle" => "error en el campo del nombre permitido solo letras en el nombre"
            );
            echo json_encode($json, true);
        }

        /*=============================================
          Validar ROLE
          =============================================*/
        if(!$this->validaString($datos['role'])){
            $json = array(
                "status" => 404,
                "detalle" => "error en el campo ROL permitido deben ser solo letras"
            );
            echo json_encode($json, true);
        }

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
            $id_cliente= str_replace("$","c",crypt($datos["nombre"].$datos["apellido"].$datos["email"] ,'$2a$07$afartwetsdAD52356FEDGsfhsd$'));

            $llave_secreta= str_replace("$","a",crypt($datos["email"].$datos["apellido"].$datos["nombre"] ,'$2a$07$afartwetsdAD52356FEDGsfhsd$'));

            $datos = array("nombre"=>$datos["nombre"],
                "apellido"=>$datos["apellido"],
                "email"=>$datos["email"],
                "id_cliente"=>$id_cliente,
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
                    "status"=>404,
                    "detalle"=> "se genero sus credenciales",
                    "id_cliente"=>$id_cliente,
                    "llave_secreta"=>$llave_secreta
                );

                echo json_encode($json,true);

            }
        }

    }
}