<?php

class ControladorProductos
{
    public function index(){
        if ($this->AuthProductos()){
            //Acceso a los CONTROLES del CORE
            require_once "../control/controlProductos.php";
            $listaProductos = getListaProductos("","");
            $json = array(
                "detalle"=>$listaProductos
            );
        }
        else{
            $json = array(
                "data"=>null,
                "status"=>400,
                "info"=>"Tokens No validos, intente reescribir los los valores de Authentication"
            );
        }
        echo json_encode($json,true);
    }

    public function busqueda($data){
        if ($this->AuthProductos()){
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
                        "info"=>"No Se encontraron Productos con este Codigo de Barra"
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
        }
        else{
            $json = array(
                "data"=>null,
                "status"=>400,
                "info"=>"Tokens No validos"
            );
        }
        echo json_encode($json,true);
    }

    public function show($id){
        if ($this->AuthProductos()){
            require_once "../control/controlProductos.php";
            $listaProductos = buscaInfoProducto($id);
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
                "info"=>"Tokens No validos"
            );
        }
        echo json_encode($json,true);
    }


    /*===========================================================================================================
    * VALIDANDO LAS CREDENCIALES DEL CLIENTE
    =========================================================================================================== */
    /**
     * @return Regresa true si el usuario esta aunteticado y este aparece en la BD para acceder a los productos
     */
    private function AuthProductos(){
        include_once "ControlAuth.php";
        return ControlAuth::validaCredenciales();
    }
}