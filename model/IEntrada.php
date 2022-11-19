<?php

interface IEntrada
{
    public static function RegistraEntrada();
    public static function ConsultaEntrada();
    public static function Listar($fechaIni,$FechaFin);
}