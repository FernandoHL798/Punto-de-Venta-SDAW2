<?php
 include_once "../control/controlEntrada.php";
$value=1;
$fechaIni = '2021-01-06 00:00:00';
$fechaFin = '2022-01-06 00:00:00';
 echo json_encode(ListaEntradaDate($value,$fechaIni,$fechaFin));