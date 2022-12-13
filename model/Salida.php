<?php
include "ISalida.php";
include_once "RegistroProducto.php";
class Salida extends RegistroProducto implements ISalida
{

    private $idSalida;
    //Lista de Productos
    private $PRODUCTOS_REGISTRO;
    private $createdAt;
    private $log;

    /**
     * @return mixed
     */
    public function getIdSalida()
    {
        return $this->idSalida;
    }

    /**
     * @param mixed $idSalida
     */
    public function setIdSalida($idSalida)
    {
        $this->idSalida = $idSalida;
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
    public function getLog()
    {
        return $this->log;
    }

    /**
     * @param mixed $log
     */
    public function setLog($log)
    {
        $this->log = $log;
    }

    public function RegistraSalida()
    {
        //
        $query="INSERT INTO `salida` (`Id_salida`, `log`, `create_at`) 
                    VALUES ('".$this->getIdSalida()."', '".$this->getLog()."', current_timestamp())";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    public function Listar()
    {
        $query = "SELECT * FROM `salida`S INNER JOIN registrosalida RS ON
                    RS.Id_registro_s = S.`Id_salida` INNER JOIN
                    producto p ON p.Id_producto = RS.id_producto_fk
                    WHERE 1";
    }


    public function ConsultaSalidas($FechaIni, $FechaFin)
    {
        $query = "SELECT `Id_registro_s`, `id_salida_fk`, `id_producto_fk`, `cantidad`, producto.nombre_producto, 
       salida.Id_salida, salida.log, salida.create_at 
FROM `registrosalida` INNER JOIN producto on registrosalida.id_producto_fk = producto.Id_producto 
    INNER JOIN salida on registrosalida.id_salida_fk = salida.Id_salida WHERE `create_at` 
        BETWEEN '".$FechaIni."' AND '".$FechaFin."'";

        // SELECT `Id_salida`, `log`, `create_at` FROM `salida` WHERE `create_at` BETWEEN '01-01-2020' AND '31-12-2022'
    }

    public function InfoSalida($value)
    {
        $condicion = $value ? "WHERE registrosalida.id_salida_fk =".$this->getIdSalida() : '';
        $query = "SELECT `Id_registro_s`, `id_producto_fk`, `cantidad`, producto.nombre_producto,
       salida.Id_salida, salida.log, salida.create_at FROM `registrosalida` 
           INNER JOIN producto on registrosalida.id_producto_fk = producto.Id_producto 
           INNER JOIN salida on registrosalida.id_salida_fk = salida.Id_salida ".$condicion;
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
        // SELECT `Id_salida`, `log`, `create_at` FROM `salida` WHERE `Id_salida` = 2
    }
}