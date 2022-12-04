<?php

interface IUsuario
{

    /**
     * @return Regresa true cuando el usuario fue creado de forma correcta
     */
    public function queryRegistrarUsuario();

    /**
     * @return Regresa TRUE cuando el correo fue encontrado en la BD y FALSE cuando no fue encontrado
     */
    public function queryBuscaCorreoDuplicado();
    /**
     * @return Regresa true cuando el usuario fue MOFIFICADO de forma correcta
     */
    public function queryUpdateUsuario();

    /**
     * @return regresa informacion del usuario en la BD que concida con el User y el Pw
     */
    public function queryConsultaUsuario();
}