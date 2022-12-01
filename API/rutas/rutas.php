<?php

$arrayRutas = explode("/",$_SERVER["REQUEST_URI"]);

if (count(array_filter($arrayRutas))== 2){

    $json = array(
        "detalle"=>"No encontrado"
    );

    echo json_encode($json,true);
    return;
}

?>