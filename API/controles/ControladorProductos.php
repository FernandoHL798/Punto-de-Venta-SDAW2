<?php

class ControladorProductos
{
    public function index(){
        //Acceso a los CONTROLES del CORE
        require_once "../control/controlProductos.php";
        $listaProductos = getListaProductos("","");
        $json = array(
            "detalle"=>$listaProductos
        );
        echo json_encode($json,true);
    }
    public function busqueda($data){
        $barCode = $data["barCode"];
        if (isset($barCode) && !filter_var($barCode, FILTER_VALIDATE_INT) === false){
            //Acceso a los CONTROLES del CORE
            require_once "../control/controlProductos.php";
            $listaProductos = getListaProductos("1",$data['barCode']);
            if(count($listaProductos)>0){
                $json = array(
                    "data"=>$listaProductos
                );
            }
            else{
                $json = array(
                    "data"=>null,
                    "info"=>"No Se encontraron Productos"
                );
            }
        }
        else{
            $json = array(
                "data"=>null,
                "status"=>400,
                "info"=>"Solo se permiten Numeros"
            );
        }
        echo json_encode($json,true);
    }

    public function show($id){
        require_once "../control/controlProductos.php";
        $listaProductos = getListaProductos("1",$id);
        if(count($listaProductos)>0){
            $json = array(
                "data"=>$listaProductos
            );
        }
        else{
            $json = array(
                "data"=>null,
                "info"=>"No Se encontraron Productos"
            );
        }
        echo json_encode($json,true);
    }
}