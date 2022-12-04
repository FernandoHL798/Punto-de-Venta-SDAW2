<?php

class ControladorVentas
{
    public function registraVenta(){
        $json = array(
            "detalle"=>"Vista Venta POST VENTA para registrar la salida"
        );
        echo json_encode($json,true);
        return;
    }

    public function cancelaVenta($idVenta){
        $json = array(
            "detalle"=>"Cancelando venta--->" .$idVenta
        );
        echo json_encode($json,true);
        return;
    }
}