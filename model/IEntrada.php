<?php

interface IEntrada
{
    public function RegistraEntrada();
    public function ConsultaEntrada();
    public function Listar($value,$fechaIni,$FechaFin);
}