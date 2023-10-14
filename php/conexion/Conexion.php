<?php

class Conexion
{
    private static $conexion;
    private function __construct()
    {
        $host = 'localhost';
        $dbname = 'clinica';
        $usuario = 'root';
        $contrasenia = '12345';

        $dsn = "mysql:host=$host;dbname=$dbname";
        $opciones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            Conexion::$conexion = new PDO($dsn, $usuario, $contrasenia, $opciones);
            echo 'se conecto con exito';
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }

    public static function obtenerConexion()
    {
        if (Conexion::$conexion == null) {
            new Conexion();
        }

        return Conexion::$conexion;
    }

    public static function altaPaciente($paciente)
    {
        try {
            Conexion::$conexion->beginTransaction();

            $sql = 'INSERT INTO Paciente (nombre, apellido_paterno, apellido_materno, fecha_nacimiento, tipo_sangre, telefono, correo, tipo_paciente, rfc) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';

            $query = Conexion::$conexion->prepare($sql);
            Conexion::$conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $query->bindValue(1, $paciente->getNombre(), PDO::PARAM_STR);
            $query->bindValue(2, $paciente->getApellidoPaterno(), PDO::PARAM_STR);
            $query->bindValue(3, $paciente->getApellidoMaterno(), PDO::PARAM_STR);
            $query->bindValue(4, $paciente->getFechaNacimiento(), PDO::PARAM_STR); // Asegúrate de que $paciente->getFechaNacimiento() devuelva un formato de fecha válido.
            $query->bindValue(5, $paciente->getTipoSangre(), PDO::PARAM_STR);
            $query->bindValue(6, $paciente->getTelefono(), PDO::PARAM_STR);
            $query->bindValue(7, $paciente->getCorreo(), PDO::PARAM_STR);
            $query->bindValue(8, $paciente->getTipoPaciente(), PDO::PARAM_STR);
            $query->bindValue(9, $paciente->getRFC(), PDO::PARAM_STR);
            $query->execute();

            Conexion::$conexion->commit();

            return true;
        } catch (Exception $e) {
            Conexion::$conexion->rollBack();
        }

        return false;
    }

    public static function bajaPaciente($idPaciente)
    {
        try {
            Conexion::$conexion->beginTransaction();

            $sql = 'DELETE FROM Paciente WHERE id_paciente = ?';

            $query = Conexion::$conexion->prepare($sql);
            $query->bindValue(1, $idPaciente, PDO::PARAM_INT);
            $query->execute();

            Conexion::$conexion->commit();

            return true;
        } catch (Exception $e) {
            Conexion::$conexion->rollBack();
        }

        return false;
    }
}

Conexion::obtenerConexion();
