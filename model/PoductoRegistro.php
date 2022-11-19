<?php
include "IRegistroProducto.php";
class PoductoRegistro extends Producto implements IRegistroProducto
{
    private $cantidad;
    private $precioFinal;
    private $idRegistro;
    private $accion;

    /**
     * @return mixed
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * @param mixed $accion
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;
    } //Entrada/Salida


    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return mixed
     */
    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    /**
     * @param mixed $precioFinal
     */
    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;
    }

    /**
     * @return mixed
     */
    public function getIdRegistro()
    {
        return $this->idRegistro;
    }

    /**
     * @param mixed $idRegistro
     */
    public function setIdRegistro($idRegistro)
    {
        $this->idRegistro = $idRegistro;
    }

    public function RegistraEntrada()
    {
        // TODO: Implement RegistraEntrada() method.
    }

    public function RegistraSalida()
    {
        // TODO: Implement RegistraSalida() method.
    }
}