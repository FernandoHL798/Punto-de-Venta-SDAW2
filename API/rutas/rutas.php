<?php
define('RUTA', "2");
define('PATH', "3");
define('PARAMETRO', "4");
//const PATH = 3;
//const RUTA = 4;
$arrayRutas = explode("/",$_SERVER["REQUEST_URI"]);
if (count(array_filter($arrayRutas))== RUTA){
    $json = array(
        "detalle"=>"Ruta No valida"
    );
    echo json_encode($json,true);
    return;
}
else{
     if (count(array_filter($arrayRutas))==PATH)
     {
        # existe una peticion de una ruta en URL
        switch (array_filter($arrayRutas)[PATH])
        {
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
                    //Reciniendo el array por POST
                    $json = file_get_contents('php://input');
                    $data = json_decode($json,true);
                    // Converts it into a PHP object
                    if ($json != NULL){
                        if (count($data) > 0){
                            $control = new ControladorVentas();
                            $control ->registraVenta($data);
                        }
                        else{
                            $json = array(
                                "detalle"=>"La lista de elementos no debe estar vacia",
                                "status"=>400
                            );
                            echo json_encode($json,true);
                        }
                    }
                     else{
                         $json = array(
                             "detalle"=>"Parametros no permitidos por la API, porfavor indique en un JSON los valores a 
                                        dar de baja de almacen, Consulte la documentacion para mas detalles",
                             "status"=>400
                         );
                         echo json_encode($json,true);
                     }
                }
                break;
            case "usuario":
                /*==========================================================================================================
                Registrar un usuario para el acceso de APIS
                ==========================================================================================================*/
                if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "POST"){
                    if (isset($_POST['nombre']) && isset($_POST['role']) && $_POST['pw'] && isset($_POST['email'])){
                        $datos = array("nombre" => $_POST["nombre"],
                            "role"=>$_POST["role"],
                            "pw"=>$_POST["pw"],
                            "email" => $_POST["email"]);
                        $control = new ControladorClientes();
                        $control ->registroClient($datos);
                    }
                    else{
                        $json = array(
                            "detalle"=>"ERROR DE PETICION, LOS DATOS SON INCORRECTOS",
                            "status"=>404
                        );
                        echo json_encode($json,true);
                    }
                }
                break;
            default:
                $json = array(
                    "detalle"=>"ERROR DE PETICION END POINT",
                    "status"=>400
                );
                echo json_encode($json,true);
                break;
        }
     } //end revisando el tipo de peticion
    else
    {
        /*==========================================================================================================
                        Regresa un producto en específico dependiendo le ID pasado por URL
         ==========================================================================================================*/
        if (array_filter($arrayRutas)[PATH] == "producto" && is_numeric(array_filter($arrayRutas)[PARAMETRO])) {
            if (isset($_SERVER['REQUEST_METHOD']) && ($_SERVER['REQUEST_METHOD']) == "GET") {
                $producto = new ControladorProductos();
                $producto->show(array_filter($arrayRutas)[PARAMETRO]);
            }
        } /*==========================================================================================================
                Regresa un producto en específico dependiendo le ID pasado por URL
        ==========================================================================================================*/
        else if (array_filter($arrayRutas)[PATH] == "venta" && is_numeric(array_filter($arrayRutas)[PARAMETRO]))
        {
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
                $control->cancelaVenta(array_filter($arrayRutas)[RUTA]);
            }
        }
        else{
            $json = array(
                "detalle"=>"ERROR VALOR NO VALIDO, PARAMETRO O RUTA INVALIDA INVALIDO",
                "status"=>400
            );
            echo json_encode($json,true);
        }
    }
}
