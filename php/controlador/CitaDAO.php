<?php

class CitaDAO
{
    public function __construct()
    {
    }

    public function altaCita($cita)
    {
        return Conexion::altaCita($cita);
    }

    public function bajaCita($id)
    {
        return Conexion::bajaCita($id);
    }

    public function actualizarCita($cita)
    {
        return Conexion::actualizarCita($cita);
    }

    public function buscarCita($criterio)
    {
        return Conexion::buscarCita($criterio);
    }

    public function mostrarCitas()
    {
        return Conexion::mostrarCitas();
    }
}
?>