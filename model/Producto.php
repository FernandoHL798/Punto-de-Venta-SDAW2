<?php
include "./CONEXION.php";
include "./IProducto.php";
class Producto extends CONEXION implements IProducto
{
    private $idProducto;
    private $idCategoriaFK;
    private $nombreProducto;
    private $stock;
    private $precioVenta;
    private $stockMinimo;
    private $sku;
    private $barCode;
    private $status;
    private $ruta_img;
    private $porcentaje_ganancia;

    /**
     * @return mixed
     */
    public function getRutaImg()
    {
        return $this->ruta_img;
    }

    /**
     * @param mixed $ruta_img
     */
    public function setRutaImg($ruta_img)
    {
        $this->ruta_img = $ruta_img;
    }

    /**
     * @return mixed
     */
    public function getPorcentajeGanancia()
    {
        return $this->porcentaje_ganancia;
    }

    /**
     * @param mixed $porcentaje_ganancia
     */
    public function setPorcentajeGanancia($porcentaje_ganancia)
    {
        $this->porcentaje_ganancia = $porcentaje_ganancia;
    }
    

    /**
     * @return mixed
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * @param mixed $idProducto
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;
    }

    /**
     * @return mixed
     */
    public function getIdCategoriaFK()
    {
        return $this->idCategoriaFK;
    }

    /**
     * @param mixed $idCategoriaFK
     */
    public function setIdCategoriaFK($idCategoriaFK)
    {
        $this->idCategoriaFK = $idCategoriaFK;
    }

    /**
     * @return mixed
     */
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * @param mixed $nombreProducto
     */
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return mixed
     */
    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }

    /**
     * @param mixed $precioVenta
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;
    }

    /**
     * @return mixed
     */
    public function getStockMinimo()
    {
        return $this->stockMinimo;
    }

    /**
     * @param mixed $stockMinimo
     */
    public function setStockMinimo($stockMinimo)
    {
        $this->stockMinimo = $stockMinimo;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getBarCode()
    {
        return $this->barCode;
    }

    /**
     * @param mixed $barCode
     */
    public function setBarCode($barCode)
    {
        $this->barCode = $barCode;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @inheritDoc
     */
    public function queryCrearProducto()
    {
        $query="INSERT";
        $this->connect();
        $result = $this->executeInstruction($query);
        $this->close();
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function queryBuscaProducto($value)
    {
        $query="SELECT";
        $this->connect();
        $result = $this->getData($query);
        $this->close();
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function queryConsultaInfoProducto()
    {
        $query="SELECT";
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function queryEditarCategoria()
    {
        $query="INSERT";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function queryEliminarProducto()
    {
        $query="INSERT";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

}