<?php
include "CONEXION.php";
include "IEntrada.php";
class Entrada extends CONEXION implements IEntrada
{
    private $idEntrada;
    //Lista de Productos
    private $PRODUCTOS_REGISTRO;
    //Obj Proveedor
    private $PROVEEDOR;
    private $fecha;
    private $createdAt;

    /// SUMATORIA DE LA LISTA DE LOS PRODUCTOS
    private $subTotalCompra;
    private $ivaTotal;
    private $totalCompra;

    /**
     * @return mixed
     */
    public function getIdEntrada()
    {
        return $this->idEntrada;
    }

    /**
     * @param mixed $idEntrada
     */
    public function setIdEntrada($idEntrada)
    {
        $this->idEntrada = $idEntrada;
    }

    /**
     * @return mixed
     */
    public function getPRODUCTOSREGISTRO()
    {
        return $this->PRODUCTOS_REGISTRO;
    }

    /**
     * @param mixed $PRODUCTOS_REGISTRO
     */
    public function setPRODUCTOSREGISTRO($PRODUCTOS_REGISTRO)
    {
        $this->PRODUCTOS_REGISTRO = $PRODUCTOS_REGISTRO;
    }

    /**
     * @return mixed
     */
    public function getPROVEEDOR()
    {
        return $this->PROVEEDOR;
    }

    /**
     * @param mixed $PROVEEDOR
     */
    public function setPROVEEDOR($PROVEEDOR)
    {
        $this->PROVEEDOR = $PROVEEDOR;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getSubTotalCompra()
    {
        return $this->subTotalCompra;
    }

    /**
     * @param mixed $subTotalCompra
     */
    public function setSubTotalCompra($subTotalCompra)
    {
        $this->subTotalCompra = $subTotalCompra;
    }

    /**
     * @return mixed
     */
    public function getIvaTotal()
    {
        return $this->ivaTotal;
    }

    /**
     * @param mixed $ivaTotal
     */
    public function setIvaTotal($ivaTotal)
    {
        $this->ivaTotal = $ivaTotal;
    }

    /**
     * @return mixed
     */
    public function getTotalCompra()
    {
        return $this->totalCompra;
    }

    /**
     * @param mixed $totalCompra
     */
    public function setTotalCompra($totalCompra)
    {
        $this->totalCompra = $totalCompra;
    }


    public function RegistraEntrada()
    {
        // TODO: Implement RegistraEntrada() method.

    }

    public function ConsultaEntrada()
    {
        // TODO: Implement ConsultaEntrada() method.
    }

    public function Listar($value,$fechaIni, $fechaFin)
    {
        //Si se piden entre dos fechas value=1 sino, son todos
        $condition  = $value==1 ? "WHERE fecha_orden >='".$fechaIni."' AND fecha_orden<= '".$fechaFin."'": '';
        $query="SELECT * FROM `ordencompra` ".$condition;
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }
}