<?php

interface IRegistroProducto
{
    /**
     * @return verdadero al registrar realizado en la base de datos
     */
    public function RegistraEntrada();

    /**
     * @return verdadero al registrar realizado en la base de datos
     */
    public function RegistraSalida();

    /**
     * @param $action Determina si se aumenta o incrementa en un valor positovo o negativo
     * @param $PRODUCTO OBJ de la clase PRODUCTO al que se realizarà el cambio
     * @return verdadero si se ha realziado el cambio
     */
    public function modificaStok($action, $idProducto, $cantidad);

}