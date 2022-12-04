<?php

require_once "./controles/ControladorRutas.php";
require_once "./controles/ControladorProductos.php";
require_once "./controles/ControladorVentas.php";
require_once "./controles/ControladorClientes.php";

$ruta = new ControladorRutas();
$ruta->inicio();