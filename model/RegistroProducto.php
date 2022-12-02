<?php
include "IRegistroProducto.php";
include "Producto.php";
class PoductoRegistro extends Producto implements IRegistroProducto
{
    private $cantidad;
    private $precioFinal;
    private $idRegistro;
    private $accion;
    private $idRegistroEntrada;
    private $idRegistroSalida;
    private $precioVenta;
    private $precioCompra;

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
    public function getPrecioCompra()
    {
        return $this->precioCompra;
    }

    /**
     * @param mixed $precioCompra
     */
    public function setPrecioCompra($precioCompra)
    {
        $this->precioCompra = $precioCompra;
    }

    /**
     * @return mixed
     */
    public function getIdRegistroEntrada()
    {
        return $this->idRegistroEntrada;
    }

    /**
     * @param mixed $idRegistroEntrada
     */
    public function setIdRegistroEntrada($idRegistroEntrada)
    {
        $this->idRegistroEntrada = $idRegistroEntrada;
    }

    /**
     * @return mixed
     */
    public function getIdRegistroSalida()
    {
        return $this->idRegistroSalida;
    }

    /**
     * @param mixed $idRegistroSalida
     */
    public function setIdRegistroSalida($idRegistroSalida)
    {
        $this->idRegistroSalida = $idRegistroSalida;
    }

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


    /**
     * @return verdadero al registrar realizado en la base de datos
     */
    public function queryRegistraEntrada()
    {
        $query="INSERT INTO `registroentrada` (`Id_entrada`, `id_producto_fk`, `id_orden_fk`, `cantidad`, `precio_compra`) 
            VALUES (NULL, '".$this->getIdProducto()."', '".$this->getIdRegistroEntrada()."', '".$this->getCantidad()."', '".$this->getPrecioCompra()."')";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    /**
     * @return verdadero al registrar realizado en la base de datos
     */
    public function queryRegistraSalida()
    {
        $query="INSERT INTO `registrosalida` (`Id_registro_s`, `id_salida_fk`, `id_producto_fk`, `cantidad`) 
                VALUES (NULL, '".$this->getIdRegistroSalida()."', '".$this->getIdProducto()."', '".$this->getCantidad()."');";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    /**
     * @param $action que va a relaizar true:agregar a stock, false:reducir de stock, se envia a la clase producto
     * @return mixed
     */
    public function modificaStock($action, $idProducto, $cantidad)
    {
        //Si la accion es true, entonces se manda a adicionar con una nueva cantidad, si es false, se hará negativa la nueva cantidad y se le restará al actual
        $newCant = $action ? $cantidad : $cantidad * -1;
        include_once "Producto.php";
        $objProducto = new Producto();
        $objProducto->setIdProducto($idProducto);
        $objProducto->setCantSuma($newCant);
        return $objProducto->queryActualizaStock();
    }
}