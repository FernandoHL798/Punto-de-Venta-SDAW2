<?php
include_once "../control/controlProductos.php";

$idProducto = 2;

echo  json_encode(buscaInfoProducto($idProducto));

