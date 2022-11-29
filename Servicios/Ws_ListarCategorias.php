<?php
require_once "../control/controlCategorias.php";
$result = listaCategorias();
echo json_encode($result);
