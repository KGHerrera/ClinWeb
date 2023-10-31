<?php
class Paciente
{
    private $id_paciente;
    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;
    private $fecha_nacimiento;
    private $tipo_sangre;
    private $telefono;
    private $correo;
    private $tipo_paciente;
    private $rfc;

    // Constructor
    public function __construct($id_paciente, $nombre, $apellido_paterno, $apellido_materno, $fecha_nacimiento, $tipo_sangre, $telefono, $correo, $tipo_paciente, $rfc)
    {
        $this->id_paciente = $id_paciente;
        $this->nombre = $nombre;
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->tipo_sangre = $tipo_sangre;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->tipo_paciente = $tipo_paciente;
        $this->rfc = $rfc;
    }

    // Getters y Setters
    public function getIdPaciente()
    {
        return $this->id_paciente;
    }

    public function setIdPaciente($id_paciente)
    {
        $this->id_paciente = $id_paciente;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellidoPaterno()
    {
        return $this->apellido_paterno;
    }

    public function setApellidoPaterno($apellido_paterno)
    {
        $this->apellido_paterno = $apellido_paterno;
    }

    public function getApellidoMaterno()
    {
        return $this->apellido_materno;
    }

    public function setApellidoMaterno($apellido_materno)
    {
        $this->apellido_materno = $apellido_materno;
    }

    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function getTipoSangre()
    {
        return $this->tipo_sangre;
    }

    public function setTipoSangre($tipo_sangre)
    {
        $this->tipo_sangre = $tipo_sangre;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getTipoPaciente()
    {
        return $this->tipo_paciente;
    }

    public function setTipoPaciente($tipo_paciente)
    {
        $this->tipo_paciente = $tipo_paciente;
    }

    public function getRFC()
    {
        return $this->rfc;
    }

    public function setRFC($rfc)
    {
        $this->rfc = $rfc;
    }
}

?>