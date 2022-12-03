<?php

$arrayRutas = explode("/",$_SERVER["REQUEST_URI"]);

if (count(array_filter($arrayRutas))== 2){
    $json = array(
        "detalle"=>"No encontrado"
    );
    echo json_encode($json,true);
    return;
}
else{
    if (count(array_filter($arrayRutas))==3) {
        # existe una peticion de una ruta en URL
        switch (array_filter($arrayRutas)[3]){
            case "catalogo":
                if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET"){
                    $control = new ControladorProductos();
                    $control ->index();
                }
                break;
            case "producto":
                if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET"){
                    $control = new ControladorProductos();
                    $control ->index();
                }
                break;
            case "venta":
                if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET"){
                    $control = new ControladorProductos();
                    $control ->index();
                }
            default:
                $json = array(
                    "detalle"=>"ERROR DE PETICION"
                );
                break;
        }
    } //end revisando el tipo de peticion
    else{
        if (array_filter($arrayRutas)[3] == "producto" && is_numeric(array_filter($arrayRutas)[4])){
            if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET"){
                $producto = new ControladorProductos();
                $producto->show(array_filter($arrayRutas)[4]);
            }
        }
    }

}

?>