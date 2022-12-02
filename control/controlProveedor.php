<?php
include_once "../model/Proveedor.php";

/**
 * Function for insert supplier
 */
function insertSupplier($razon_social,$direccion,$telefono,$correo,$rfc){
    $obj_supplier = new Proveedor();

    $obj_supplier->setRazonSocial($razon_social);
    $obj_supplier->setDireccion($direccion);
    $obj_supplier->setTelefono($telefono);
    $obj_supplier->setCorreo($correo);
    $obj_supplier->setRfc($rfc); 
    return $obj_supplier->queryCreaProveedor();
}

/**
 * Function for update supplier
 */
function updateSupplier($idProveedor,$direccion,$telefono,$correo){
    $obj_supplier = new Proveedor();
    $obj_supplier ->setIdProveedor($idProveedor);
    $obj_supplier->setDireccion($direccion);
    $obj_supplier->setTelefono($telefono);
    $obj_supplier->setCorreo($correo);
    
    return $obj_supplier->queryActualizarProveedor();
}

/**
 * function for delete supplier
 */
function deleteSupplier($Id_proveedor){
    $obj_supplier = new Proveedor();

    $obj_supplier->setIdProveedor($Id_proveedor);

    return $obj_supplier->queryEliminaProveedor();
}

/**
 * function for list supplier
 */
function listSupplier(){
    $obj_supplier = new Proveedor();

    return $obj_supplier->queryListar();
}

/**
 * function for search info supplier
 */
function searchInfoSupplier($Id_proveedor){
    $obj_supplier = new Proveedor();

    $obj_supplier->setIdProveedor($Id_proveedor);

    return $obj_supplier->queryInfoProveedor();
}
?>