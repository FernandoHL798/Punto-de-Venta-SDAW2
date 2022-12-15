<?php

interface IEntrada
{
    public function RegistraEntrada();
    public function ConsultaEntrada($idEntrada);
    public function Listar($value,$fechaIni,$FechaFin);
}