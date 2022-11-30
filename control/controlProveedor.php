<?php
include_once "../model/Proveedor.php";

/**
 * Function for insert supplier
 */
function insertSupplier($razon_social,$direccion,$telefono,$correo,$rfc,$create_at){
    $obj_supplier = new Supplier();

    $obj_supplier->setRazonSocial($razon_social);
    $obj_supplier->setDireccion($direccion);
    $obj_supplier->setPrecioVenta($precioVenta);
    $obj_supplier->setTelefono($telefono);
    $obj_supplier->setCorreo($correo);
    $obj_supplier->setRfc($rfc);
    
    return $obj_supplier->queryCreaProveedor();
}

/**
 * Function for update supplier
 */
function updateSupplier($razon_social,$direccion,$telefono,$correo,$rfc,$create_at){
    $obj_supplier = new Supplier();

    $obj_supplier->setRazonSocial($razon_social);
    $obj_supplier->setDireccion($direccion);
    $obj_supplier->setPrecioVenta($precioVenta);
    $obj_supplier->setTelefono($telefono);
    $obj_supplier->setCorreo($correo);
    $obj_supplier->setRfc($rfc);
    
    return $obj_supplier->queryActualizarProveedor();
}

/**
 * function for delete supplier
 */
function deleteSupplier($Id_proveedor){
    $obj_supplier = new Supplier();

    $obj_supplier->setIdProveedor($Id_proveedor);

    return $obj_supplier->queryEliminaProveedor();
}

/**
 * function for list supplier
 */
function listSupplier(){
    $obj_supplier = new Supplier();

    return $obj_supplier->queryListar();
}

/**
 * function for search info supplier
 */
function searchInfoSupplier($Id_proveedor){
    $obj_supplier = new Supplier();

    $obj_supplier->setIdProveedor($Id_proveedor);

    return $obj_supplier->queryInfoProveedor();
}
?>