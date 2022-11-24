<?php
include "IRegistroProducto.php";
class PoductoRegistro extends Producto implements IRegistroProducto
{
    private $cantidad;
    private $precioFinal;
    private $idRegistro;
    private $accion;
    private $idRegistroEntrada;
    private $idRegistroSalida;
    private $previoVenta;
    private $previoCompra;

    /**
     * @return mixed
     */
    public function getPrevioVenta()
    {
        return $this->previoVenta;
    }

    /**
     * @param mixed $previoVenta
     */
    public function setPrevioVenta($previoVenta)
    {
        $this->previoVenta = $previoVenta;
    }

    /**
     * @return mixed
     */
    public function getPrevioCompra()
    {
        return $this->previoCompra;
    }

    /**
     * @param mixed $previoCompra
     */
    public function setPrevioCompra($previoCompra)
    {
        $this->previoCompra = $previoCompra;
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
    public function RegistraEntrada()
    {
        $query="INSERT INTO `registroentrada` (`Id_entrada`, `id_producto_fk`, `id_orden_fk`, `cantidad`, `precio_compra`) 
            VALUES (NULL, '".$this->getIdProducto()."', '".$this->getIdRegistroEntrada()."', '".$this->getCantidad()."', '".$this->getPrevioCompra()."')";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    /**
     * @return verdadero al registrar realizado en la base de datos
     */
    public function RegistraSalida()
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
    public function modificaStok($action, $idProducto, $cantidad)
    {
        $value = $action ? $cantidad : $cantidad * -1;

        $objProducto = new Producto();
        $objProducto->setIdProducto($idProducto);
        $objProducto->setCantSuma($cantidad);
        return $objProducto->queryActualizaStock($value);
    }
}