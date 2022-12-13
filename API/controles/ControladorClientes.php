<?php
class ControladorClientes
{

    public function registroClient($datos)
    {
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
		BUSCAR EL CORREO EN LA BASE DE DATOS LOCAL, Y SI NO EXISTE AGREGARLO
		=============================================*/
        require_once "../control/controlUsuarios.php";
        $resultControlCorreo = buscarEmailRegistrado($datos['email'],$datos['pw']);

        /*=============================================
                ALGORITMO -> REVISAR QUE NO EXISTA ACTRUALMENTE, PARA AGREGARLO
        =============================================*/
        if ($resultControlCorreo){
            $json = $this->crearCredenciales($datos);
            echo json_encode($json,true);
        }
        else{
            $json=array(
                "status"=>200,
                "detalle"=> "No ha sido registrado en el sistema de Almacen, primero intente iniciar sesion en el sistema,".
                    " este usuario es proporcionado por Dashboard, cree una cuenta en https://dashboard-app-sdaw-ii-ecsml.ondigitalocean.app/register",
                "username"=>null,
                "llave_secreta"=>null
            );
            echo json_encode($json,true);
        }

    }

    static function crearCredenciales($datos) {
        /*=============================================
        Generar credenciales del cliente
        =============================================*/
        $username= str_replace("$","c",crypt($datos["nombre"].$datos["email"] ,'$2a$07$afartwetsdAD52356FEDGsfhsd$'));

        $llave_secreta= str_replace("$","a",crypt($datos["email"].$datos["nombre"] ,'$2a$07$afartwetsdAD52356FEDGsfhsd$'));

        //regresamos las credencialess
        $json=array(
            "status"=>200,
            "detalle"=> "Estas son sus credenciales",
            "username"=>$username,
            "llave_secreta"=>$llave_secreta
        );
        return $json;
    }
}