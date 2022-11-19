<?php
require_once "../control/controlCategoria.php";
$result = listaCategorias();
echo json_encode($result);
