<?php

class ConexionUsuarios
{
    private static $conexion;
    private function __construct()
    {
        $host = 'localhost';
        $dbname = 'clinica_usuarios';
        $usuario = 'root';
        $contrasenia = '12345';

        $dsn = "mysql:host=$host;dbname=$dbname";
        $opciones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            ConexionUsuarios::$conexion = new PDO($dsn, $usuario, $contrasenia, $opciones);
            //echo 'se conecto con exito';
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }

    public static function obtenerConexion()
    {
        if (ConexionUsuarios::$conexion == null) {
            new ConexionUsuarios();
        }

        return ConexionUsuarios::$conexion;
    }


    public static function altaUsuario($usuario)
    {
        try {
            ConexionUsuarios::$conexion->beginTransaction();

            $verificarUsuario = 'SELECT COUNT(*) FROM Usuario WHERE usuario = ?';
            $stmt = ConexionUsuarios::$conexion->prepare($verificarUsuario);
            $stmt->bindValue(1, $usuario->getUsuario(), PDO::PARAM_STR);
            $stmt->execute();
            $existeUsuario = $stmt->fetchColumn();

            if ($existeUsuario) {
                return false;
            }

            $sql = 'INSERT INTO Usuario (nombre, usuario, password) VALUES (?, ?, ?)';
            $query = ConexionUsuarios::$conexion->prepare($sql);
            ConexionUsuarios::$conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $query->bindValue(1, $usuario->getNombre(), PDO::PARAM_STR);
            $query->bindValue(2, $usuario->getUsuario(), PDO::PARAM_STR);
            $query->bindValue(3, $usuario->getPassword(), PDO::PARAM_STR);

            $query->execute();

            ConexionUsuarios::$conexion->commit();

            return true;
        } catch (Exception $e) {
            ConexionUsuarios::$conexion->rollBack();
        }

        return false;
    }


    public static function verificarCredenciales($usuarioEncriptado, $contrasenaEncriptada)
    {
        try {
            $sql = 'SELECT * FROM Usuario WHERE usuario = ? AND password = ?';
            $query = ConexionUsuarios::$conexion->prepare($sql);
            $query->bindValue(1, $usuarioEncriptado, PDO::PARAM_STR);
            $query->bindValue(2, $contrasenaEncriptada, PDO::PARAM_STR);
            $query->execute();

            $usuarioEncontrado = $query->fetch(PDO::FETCH_ASSOC);

            if ($usuarioEncontrado) {
                return $usuarioEncontrado;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }






}

ConexionUsuarios::obtenerConexion();

?>