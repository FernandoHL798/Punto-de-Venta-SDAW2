<?php
include_once "../model/Categoria.php";

/**
 * Funcion para insertar una categoria
 */
function insertaCategoria($nombre_categoria){
    $obj_categoria = new Categoria();
    $obj_categoria->setNombreCategoria($nombre_categoria);
    return $obj_categoria->queryCrearCategoria();
}

/*
* Funcion listar categoria
*/
function listaCategorias(){
    $obj_categoria = new Categoria();
    return $obj_categoria->querylistaCategoria();
}

/**
 * Funcion para eliminar categoria
 */
function eliminaCategoria($id_Categoria){
    $obj_categoria = new Categoria();
    $obj_categoria->setIdCategoria($id_Categoria);
    return $obj_categoria->queryEliminaCategoria();
}

/**
 * Funcion para editar categoria
 */
function editaCategoria($id_Categoria,$nombre_categoria){
    $obj_categoria = new Categoria();
    $obj_categoria->setIdCategoria($id_Categoria);
    $obj_categoria->setNombreCategoria($nombre_categoria);
    return $obj_categoria->queryEditarCategoria();
}

?>