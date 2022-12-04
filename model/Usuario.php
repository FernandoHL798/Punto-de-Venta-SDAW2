<?php
include "CONEXION.php";
include "IUsuario.php";
class Usuario extends CONEXION implements IUsuario
{
    private $IdUsuario;
    private $NombreUsuario;
    private $Email;
    private $Password;
    private $Role;
    private $Username;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param mixed $Username
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
    }
    private $Secret_key;
    private $CreatedAt;
    private $UpdatedAt;

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->IdUsuario;
    }

    /**
     * @param mixed $IdUsuario
     */
    public function setIdUsuario($IdUsuario)
    {
        $this->IdUsuario = $IdUsuario;
    }

    /**
     * @return mixed
     */
    public function getNombreUsuario()
    {
        return $this->NombreUsuario;
    }

    /**
     * @param mixed $NombreUsuario
     */
    public function setNombreUsuario($NombreUsuario)
    {
        $this->NombreUsuario = $NombreUsuario;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * @param mixed $Role
     */
    public function setRole($Role)
    {
        $this->Role = $Role;
    }


    /**
     * @return mixed
     */
    public function getSecretKey()
    {
        return $this->Secret_key;
    }

    /**
     * @param mixed $Secret_key
     */
    public function setSecretKey($Secret_key)
    {
        $this->Secret_key = $Secret_key;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * @param mixed $CreatedAt
     */
    public function setCreatedAt($CreatedAt)
    {
        $this->CreatedAt = $CreatedAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->UpdatedAt;
    }

    /**
     * @param mixed $UpdatedAt
     */
    public function setUpdatedAt($UpdatedAt)
    {
        $this->UpdatedAt = $UpdatedAt;
    }

    /**
     * @return Regresa true cuando el usuario fue creado de forma correcta
     */
    public function queryRegistrarUsuario()
    {
        // TODO: Implement queryRegistrarUsuario() method.
    }

    /**
     * @return Regresa TRUE cuando el correo fue encontrado en la BD y FALSE cuando no fue encontrado
     */
    public function queryBuscaCorreoDuplicado()
    {
        // TODO: Implement queryBuscaCorreoDuplicado() method.
    }

    /**
     * @return Regresa true cuando el usuario fue MOFIFICADO de forma correcta
     */
    public function queryUpdateUsuario()
    {
        // TODO: Implement queryUpdateUsuario() method.
    }

    /**
     * @return regresa informacion del usuario en la BD que concida con el User y el Pw
     */
    public function queryConsultaUsuario()
    {
        // TODO: Implement queryConsultaUsuario() method.
    }
}