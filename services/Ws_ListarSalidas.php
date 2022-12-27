<?php

include_once "../control/controlSalida.php";

//$value = $_POST['all'];
//$id_salida = $_POST['idSalida'];
echo json_encode(consultaSalida(false,0));