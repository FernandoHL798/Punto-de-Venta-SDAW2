<?php

require_once "./controles/ControladorRutas.php";
require_once "./controles/ControladorProductos.php";
require_once "./controles/ControladorVentas.php";
$ruta = new ControladorRutas();
$ruta->inicio();