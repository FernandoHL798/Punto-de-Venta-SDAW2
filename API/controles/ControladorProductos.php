<?php

class ControladorProductos
{
    public function index(){
        $json = array(
            "detalle"=>"Vista Catalogo de Productos GET"
        );
        echo json_encode($json,true);
        return;
    }

    public function show($id){
        $json = array(
            "detalle"=>"Vista Producto por ID". $id
        );
        echo json_encode($json,true);
        return;
    }
}