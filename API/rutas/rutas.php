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
    if (count(array_filter($arrayRutas))==3)
    {
        # existe una peticion de una ruta en URL
        switch (array_filter($arrayRutas)[3]){
            case "catalogo":
                /*==========================================================================================================
                //Regresa el catalog de productos completa
                ==========================================================================================================*/
                if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET"){
                    $control = new ControladorProductos();
                    $control ->index();
                }
                break;
            case "producto":
                /*==========================================================================================================
                                //Regresa informacion de un producto en funcion del ID
                ==========================================================================================================*/
                if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET"){
                    $control = new ControladorProductos();
                    $control ->index();
                }
                else if(isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "POST"){
                    $datos = array("barCode" => $_POST["barCode"]);
                    $control = new ControladorProductos();
                    $control ->busqueda($datos);
                }
                break;
            case "venta":
                /*==========================================================================================================
                    Registra una salida en por POST con una lista de objetos a descontar del inventario
                ==========================================================================================================*/
                if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "POST"){
                    $datos = array("barCode" => $_POST["barCode"],
                                    "");
                    $control = new ControladorVentas();
                    $control ->registraVenta();
                }
                break;
            case "usuario":
                /*==========================================================================================================
                Registrar un usuario para el acceso de APIS
                ==========================================================================================================*/
                if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "POST"){
                    $datos = array("nombre" => $_POST["nombre"],
                        "role"=>$_POST["role"],
                        "pw"=>$_POST["pw"],
                        "email" => $_POST["email"]);
                    $control = new ControladorClientes();
                    $control ->registroClient();
                }
                break;
            default:
                $json = array(
                    "detalle"=>"ERROR DE PETICION",
                    "status"=>400
                );
                echo json_encode($json,true);
                break;
        }

    } //end revisando el tipo de peticion
    else {
        /*==========================================================================================================
                        Regresa un producto en específico dependiendo le ID pasado por URL
         ==========================================================================================================*/
        if (array_filter($arrayRutas)[3] == "producto" && is_numeric(array_filter($arrayRutas)[4])) {
            if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET") {
                $producto = new ControladorProductos();
                $producto->show(array_filter($arrayRutas)[4]);
            }
        } /*==========================================================================================================
                Regresa un producto en específico dependiendo le ID pasado por URL
        ==========================================================================================================*/
        else if (array_filter($arrayRutas)[3] == "venta" && is_numeric(array_filter($arrayRutas)[4])) {
            /*==========================================================================================================
            Registrando los productos por methon PUT, creando la salida por VENTA
            ==========================================================================================================*/
            if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "PUT") {
                $control = new ControladorVentas();
                $control->registraVenta();
            } /*==========================================================================================================
            Registrando una cancelacion de venta en funcion del ID Ticket
            ==========================================================================================================*/
            else if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "DELETE") {
                $control = new ControladorVentas();
                $control->cancelaVenta(array_filter($arrayRutas)[4]);
            }
        }
        else{
            $json = array(
                "detalle"=>"ERROR VALOR GET NO VALIDO",
                "status"=>400
            );
            echo json_encode($json,true);
        }
    }

}
