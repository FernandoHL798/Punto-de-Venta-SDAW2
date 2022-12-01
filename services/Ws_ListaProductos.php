<?php
$barCode = "5031540419";
$value = 1;

include_once "../control/controlProductos.php";

$result = getListaProductos($value,$barCode);
echo json_encode($result);