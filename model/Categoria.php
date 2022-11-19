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
        $query="INSERT";
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
        $query="INSERT";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }

    public function queryEditarCategoria()
    {
        $query="UODATE";
        $this->connect();
        $result = $this-> executeInstruction($query);
        $this->close();
        return $result;
    }
}