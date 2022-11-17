<?php


interface IProducto
{
    /**
     * @return regresa true cuando se inserto en la BD
     */
    public function queryCrearProducto();

    /**
     * @param $value Valor a buscar [Descripcion, Codigo de Barra]
     * @return lista en array de las PRODUCTOS que concidan con el argumento en la DB
     */
    public function queryBuscaProducto($value);

    /**
     * @return Regreso un objeto de en array que contiene un producto
     */
    public function queryConsultaInfoProducto();

    /**
     * @return true cuando se edito el producto de forma correcta
     */
    public function queryEditarCategoria();

    /**
     * @return true cuando se edito la Eliminado de forma correcta
     */
    public function queryEliminarProducto();
}