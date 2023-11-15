<?php
class Cita
{
    private $idCita;
    private $fkPaciente;
    private $fkPersonal;
    private $fkSala;
    private $fechaHora;
    private $motivoCita;

    // Constructor

    public function __construct()
    {
    }

    // Métodos Get
    public function getIdCita()
    {
        return $this->idCita;
    }

    public function getFkPaciente()
    {
        return $this->fkPaciente;
    }

    public function getFkPersonal()
    {
        return $this->fkPersonal;
    }

    public function getFkSala()
    {
        return $this->fkSala;
    }

    public function getFechaHora()
    {
        return $this->fechaHora;
    }

    public function getMotivoCita()
    {
        return $this->motivoCita;
    }

    public function setIdCita($idCita)
    {
        $this->idCita = $idCita;
    }

    public function setFkPaciente($fkPaciente)
    {
        $this->fkPaciente = $fkPaciente;
    }

    public function setFkPersonal($fkPersonal)
    {
        $this->fkPersonal = $fkPersonal;
    }

    public function setFkSala($fkSala)
    {
        $this->fkSala = $fkSala;
    }

    public function setFechaHora($fechaHora)
    {
        $this->fechaHora = $fechaHora;
    }

    public function setMotivoCita($motivoCita)
    {
        $this->motivoCita = $motivoCita;
    }

}

?>