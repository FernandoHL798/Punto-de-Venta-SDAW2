<?php
include "CONEXION.php";
include "IProveedor.php";
class Proveedor extends CONEXION implements IProveedor
{

    private $Id_proveedor;
    private $razon_social;
    private $direccion;
    private $telefono;
    private $correo;
    private $rfc;
    private $create_at;

    /**
     * @return mixed
     */
    public function getIdProveedor()
    {
        return $this->Id_proveedor;
    }

    /**
     * @param mixed $Id_proveedor
     */
    public function setIdProveedor($Id_proveedor)
    {
        $this->Id_proveedor = $Id_proveedor;
    }

    /**
     * @return mixed
     */
    public function getRazonSocial()
    {
        return $this->razon_social;
    }

    /**
     * @param mixed $razon_social
     */
    public function setRazonSocial($razon_social)
    {
        $this->razon_social = $razon_social;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * @param mixed $rfc
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;
    }

    /**
     * @return mixed
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * @param mixed $create_at
     */
    public function setCreateAt($create_at)
    {
        $this->create_at = $create_at;
    }

    public function queryCreaProveedor()
    {
        $query = "INSERT INTO `proveedor` (`Id_proveedor`, `razon_social`, `direccion`, `telefono`, `correo`, `rfc`, `create_at`) VALUES (NULL, '".$this->getRazonSocial()."', '".$this->getDireccion()."', '".$this->getTelefono()."', '".$this->getCorreo()."', '".$this->getRfc()."', current_timestamp())";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;

    }

    public function queryActualizarProveedor()
    {
        $query = "UPDATE `proveedor` SET `direccion` = '".$this->getDireccion()."', `telefono` = '".$this->getTelefono()."', `correo` = '".$this->getCorreo()."' WHERE `proveedor`.`Id_proveedor` = ".$this->getIdProveedor();
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    public function queryEliminaProveedor()
    {
        // TODO: Implement queryEliminaProveedor() method.
        $query = "UPDATE `proveedor` SET `Id_proveedor` = ".$this->getIdProveedor()."*-1 WHERE `proveedor`.`Id_proveedor` = ".$this->getIdProveedor();
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    public function queryListar()
    {
        $quuery="SELECT * FROM `proveedor`";
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }

    public function queryInfoProveedor()
    {
        $query = "SELECT * FROM `inventarioweb`.`proveedor` WHERE `Id_proveedor` = ".$this->getIdProveedor();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }
}