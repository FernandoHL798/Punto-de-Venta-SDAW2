<?php
include_once "CONEXION.php";
include_once "IProducto.php";
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
    private $cantSuma;

    /**
     * @return mixed
     */
    public function getCantSuma()
    {
        return $this->cantSuma;
    }

    /**
     * @param mixed $cantSuma
     */
    public function setCantSuma($cantSuma)
    {
        $this->cantSuma = $cantSuma;
    }

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

    /*
     * FUNCIONES DE PRODUCTOS
     * */


    /**
     * @inheritDoc
     */
    public function queryCrearProducto()
    {
        $query="INSERT INTO `producto` (`Id_producto`, `nombre_producto`, `stock`, `precio_venta`, `stock_minimo`, `sku`, `bar_code`, `porcentaje_ganancia`, `ruta_img`, `estatus`, `id_categoria_fk`) VALUES (NULL, '".$this->getNombreProducto()."', '".$this->getStock()."', '".$this->getPrecioVenta()."', '".$this->getStockMinimo()."', '".$this->getSku()."', '".$this->getBarCode()."', '".$this->getPorcentajeGanancia()."', '".$this->getRutaImg()."', '".$this->getStatus()."', '".$this->getIdCategoriaFK()."')";
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
        // Si el $value es igual a 1 (Codigo de barras), buscar por codigo de barras, sino todos los productos con id mayor a 0
        $condicion  = $value==1 ? " AND bar_code = '".$this->getBarCode()."'": '' ;
        $query="SELECT * FROM `producto` INNER JOIN categoria on producto.id_categoria_fk = categoria.Id_categoria WHERE Id_producto > 0 ".$condicion;
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
        $query="SELECT `Id_producto`, `nombre_producto`, `stock`, `precio_venta`, `stock_minimo`, `sku`, `bar_code`,
                `porcentaje_ganancia`, `ruta_img`, `estatus`, `id_categoria_fk`, categoria.nombre_categoria 
                FROM `producto` INNER JOIN categoria on producto.id_categoria_fk = categoria.Id_categoria
                WHERE producto.Id_producto =".$this->getIdProducto();
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;

        /*
        $query="SELECT * FROM `producto` WHERE `Id_producto`=".$this->getIdProducto();
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
        */
    }

    /**
     * @inheritDoc
     */
    public function queryEditarProducto()
    {
        $query="UPDATE `producto` SET `nombre_producto` = '".$this->getNombreProducto()."', `stock` = '".$this->getStock()."', `precio_venta` = '".$this->getPrecioVenta()."', `stock_minimo` = '".$this->getStockMinimo()."', `sku` = '".$this->getSku()."', `bar_code` = '".$this->getBarCode()."', `porcentaje_ganancia` = '".$this->getPorcentajeGanancia()."', `id_categoria_fk` = '".$this->getIdCategoriaFK()."' WHERE `producto`.`Id_producto` = ".$this->getIdProducto();
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
        $query="UPDATE `producto` SET `Id_producto` = ".$this->getIdProducto()."*-1 WHERE `producto`.`Id_producto` = ".$this->getIdProducto();
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function queryActualizaStock()
    {
        $query="UPDATE `producto` SET 
                      `stock` = `stock` + '".$this->getCantSuma()."' 
                WHERE `producto`.`Id_producto` = ".$this->getIdProducto();
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }



     public function queryConsultaProductosHome()
    {
        $query="SELECT `Id_producto`, `nombre_producto`, `stock`, `precio_venta`, `stock_minimo`, `sku`, `bar_code`,
        `porcentaje_ganancia`, `ruta_img`, `estatus`, `id_categoria_fk`, categoria.nombre_categoria 
        FROM `producto` INNER JOIN categoria on producto.id_categoria_fk = categoria.Id_categoria 
        WHERE stock <= stock_minimo";
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;

    }
}
 







