<?php

interface IRegistroProducto
{
    /**
     * @return verdadero al registrar realizado en la base de datos
     */
    public function queryRegistraEntrada();

    /**
     * @return verdadero al registrar realizado en la base de datos
     */
    public function queryRegistraSalida();

    /**
     * @param $action Determina si se aumenta o incrementa en un valor positovo o negativo
     * @param $PRODUCTO OBJ de la clase PRODUCTO al que se realizarà el cambio
     * @return verdadero si se ha realziado el cambio
     */
    public function modificaStock($action, $idProducto, $cantidad);

}