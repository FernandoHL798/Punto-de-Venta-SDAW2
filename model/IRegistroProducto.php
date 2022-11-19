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
}