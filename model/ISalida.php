<?php

interface ISalida
{
    public function RegistraSalida();
    public function ConsultaSalida();
    public function Listar($fechaIni,$FechaFin);
}