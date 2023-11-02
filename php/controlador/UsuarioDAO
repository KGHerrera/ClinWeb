<?php

class UsuarioDAO
{
    public function __construct()
    {
    }

    public function altaUsuario($usuario)
    {
        return ConexionUsuarios::altaUsuario($usuario);
    }

    public function verificarCredenciales($usuarioEncriptado, $contrasenaEncriptada)
    {
        return ConexionUsuarios::verificarCredenciales($usuarioEncriptado, $contrasenaEncriptada);
    }
}

?>