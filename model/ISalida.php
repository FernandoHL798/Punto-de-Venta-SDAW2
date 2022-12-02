<?php

interface ISalida
{
    public function RegistraSalida();
    public function ConsultaSalida();
    public function Listar();
    public function InfoSalida($fechaIni,$FechaFin);
}