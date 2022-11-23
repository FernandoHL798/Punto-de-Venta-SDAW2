<?php

include "CONEXION.php";
include "ICategoria.php";

class Categoria extends CONEXION implements ICategoria
{
    private $idCategoria;
    private $nombreCategoria;

    /**
     * @return id de la categoria
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * @param requerimos el Id de la categorias $idCategoria
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }

    /**
     * @return mixed
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }

    /**
     * @param mixed $nombreCategoria
     */

    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;
    }

    public function queryCrearCategoria()
    {
        $query="INSERT INTO `categoria` (`Id_categoria`, `nombre_categoria`) VALUES (NULL, '".$this->getNombreCategoria()."')";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    public function querylistaCategoria()
    {
        $query="SELECT `Id_categoria`, `nombre_categoria` FROM `categoria` WHERE 1";
        $this->connect();
        $result = $this-> getData($query);
        $this->close();
        return $result;
    }

    public function queryEliminaCategoria()
    {
        $query="UPDATE `categoria` SET `Id_categoria` = '".$this->getIdCategoria()."'*-1 
            WHERE `categoria`.`Id_categoria` = ".$this->getIdCategoria();
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }


    public function queryEditarCategoria()
    {
        $query="UPDATE `categoria` SET `nombre_categoria` = '".$this->getNombreCategoria()."' 
            WHERE `categoria`.`Id_categoria` = ".$this->getIdCategoria();
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }
}