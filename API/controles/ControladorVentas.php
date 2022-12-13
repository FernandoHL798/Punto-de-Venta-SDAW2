<?php

class ControladorVentas
{
    public function registraVenta($data){
        if ($this->AuthVentas()){
            if ($this->RegistrarBajaFromVenta($data)){
                $json = array(
                    "status"=>200,
                    "detalle"=>"Se ha descontado del almacen los productos"
                );
            }
            else{
                $json = array(
                    "status"=>500,
                    "detalle"=>"Un error ha ocurrido"
                );
            }
        }
        else{
            $json = array(
                "data"=>null,
                "status"=>400,
                "info"=>"Tokens No validos para realizar salida de mercancia"
            );
        }
        echo json_encode($json,true);
    }

    public function cancelaVenta($idVenta){
        $json = array(
            "detalle"=>"Cancelando venta--->" .$idVenta
        );
        echo json_encode($json,true);
        return;
    }

    /*===========================================================================================================
    * Registrando la salida del Inventario
    =========================================================================================================== */
    private function RegistrarBajaFromVenta($data){
        include_once "../control/controlRegistros.php";
        return registroSalida($data,"SALE API-Success");
    }
    /*===========================================================================================================
    * VALIDANDO LAS CREDENCIALES DEL CLIENTE PARA PROCESAR LA SALIDA
    =========================================================================================================== */
    /**
     * @return Regresa true si el usuario esta aunteticado y este aparece en la BD para registrar la salida de mercancia
     */
    private function AuthVentas(){
        include_once "ControlAuth.php";
        return ControlAuth::validaCredenciales();
    }

}