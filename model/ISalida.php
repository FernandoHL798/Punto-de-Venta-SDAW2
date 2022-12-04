<?php

interface ISalida
{
    public function RegistraSalida();
    public function ConsultaSalidas($FechaIni,$FechaFin);
    public function Listar();
    public function InfoSalida();
}