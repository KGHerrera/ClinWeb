<?php

class PacienteDAO
{

    public function __construct()
    {
    }

    public function altaPaciente($paciente)
    {
        return Conexion::altaPaciente($paciente);
    }

    public function bajaPaciente($id)
    {
        return Conexion::bajaPaciente($id);
    }

    public function actualizarPaciente($paciente)
    {
        return Conexion::actualizarPaciente($paciente);
    }

    public function buscarPaciente($criterio)
    {
        return Conexion::buscarPaciente($criterio);
    }

    public function mostrarPacientes()
    {
        return Conexion::mostrarPacientes();
    }
}
?>