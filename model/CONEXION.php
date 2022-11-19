<?php
require_once "../config/SERVER.php";
class CONEXION 
{
    private $host = SERVER;
    private $usuario = USER;
    private $pass = PASS;
    private $db = DB;
    private $connection;

    protected function connect(){
        $this->connection = mysqli_connect(
            $this->host,
            $this->usuario,
            $this->pass,
            $this->db
        );

        $this->connection->set_charset("utf8");

        if (mysqli_connect_errno()) {
            print("error al conectarse");
        }
    }

    protected function getData($sql)
    {
        $data = array();
        $result = mysqli_query($this->connection, $sql);

        $error = mysqli_error($this->connection);

        if (empty($error)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    array_push($data, $row);
                }
            }
        } else {
            throw new Exception($error);
        }
        return $data;
    }

    protected function numRows($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        $error = mysqli_error($this->connection);

        if (empty($error)) {
            return mysqli_num_rows($result);
        } else {
            throw new Exception($error);
        }
    }

    protected function getDataSingle($sql)
    {

        $result = mysqli_query($this->connection, $sql);

        $error = mysqli_error($this->connection);

        if (empty($error)) {
            if (mysqli_num_rows($result) > 0) {
                return mysqli_fetch_assoc($result);
            }
        } else {
            throw new Exception($error);
        }
        return null;
    }

    protected function getDataSingleProp($sql, $prop)
    {

        $result = mysqli_query($this->connection, $sql);

        $error = mysqli_error($this->connection);

        if (empty($error)) {
            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                return $data[$prop];
            }
        } else {
            throw new Exception($error);
        }
        return null;
    }

   protected function executeInstruction($sql)
    {
        $success = mysqli_query($this->connection, $sql);

        $error = mysqli_error($this->connection);

        if (empty($error)) {
            return $success;
        } else {
            throw new Exception($error);
        }
    }

    protected function close()
    {
        mysqli_close($this->connection);
    }

    protected function getLastId()
    {
        return mysqli_insert_id($this->connection);
    }
}