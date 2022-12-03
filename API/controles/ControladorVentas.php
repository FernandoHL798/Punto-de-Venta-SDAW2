<?php

class ControladorVentas
{
    public function newSale(){
        $json = array(
            "detalle"=>"Vista Venta POST VENTA"
        );
        echo json_encode($json,true);
        return;
    }
}