<?php

class Usuario
{
    private $id_usuario;
    private $nombre;
    private $usuario;
    private $password;

    // Constructor
    public function __construct($id_usuario, $nombre, $usuario, $password)
    {
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->password = $password;
    }

    // Métodos de acceso (getters y setters)
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}

?>