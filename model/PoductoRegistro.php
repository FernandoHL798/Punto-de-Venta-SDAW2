<?php

class PoductoRegistro extends Producto
{
    private $cantidad;
    private $precioFinal;
    private $idRegistro;

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
}