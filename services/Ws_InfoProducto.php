<?php
include_once "../control/controlProductos.php";

$idProducto = $_POST['idProducto'];

echo  json_encode(buscaInfoProducto($idProducto));

