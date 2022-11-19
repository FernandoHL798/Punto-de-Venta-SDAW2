<?php
include "./CONEXION.php";
include "./IProveedor.php";
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
        // TODO: Implement queryCreaProveedor() method.
    }

    public function queryActualizarProveedor()
    {
        // TODO: Implement queryActualizarProveedor() method.
    }

    public function queryEliminaProveedor()
    {
        // TODO: Implement queryEliminaProveedor() method.
    }

    public function queryListar()
    {
        // TODO: Implement queryListar() method.
    }

    public function queryInfoProveedor()
    {
        // TODO: Implement queryInfoProveedor() method.
    }
}