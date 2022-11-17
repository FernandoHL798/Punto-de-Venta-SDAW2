<?php


interface ICategoria
{
    /**
     * @return regresa true cuando se inserto en la BD
     */
    public function queryCrearCategoria();

    /**
     * @return lista en array de las categorias creadas en la DB
     */
    public function querylistaCategoria();

    /**
     * @return true cuando se ha eliminado de forma correcta
     */
    public function queryEliminaCategoria();

    /**
     * @return true cuando se edito la categoria de forma correcta
     */
    public function queryEditarCategoria();
}