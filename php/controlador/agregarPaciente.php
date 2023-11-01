<?php
include('../modelo/Paciente.php');
include('../conexion/Conexion.php');
include('../controlador/PacienteDAO.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellido_paterno'];
    $apellidoMaterno = $_POST['apellido_materno'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $tipoSangre = $_POST['tipo_sangre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $tipoPaciente = $_POST['tipo_paciente'];
    $rfc = $_POST['rfc'];


    if (empty($nombre) || empty($apellidoPaterno) || empty($fechaNacimiento) || empty($tipoSangre) || empty($telefono) || empty($correo) || empty($tipoPaciente) || empty($rfc)) {
        header('Location: ../../crud.php?mensaje=0');
        exit();
    }

    $paciente = new Paciente(0, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaNacimiento, $tipoSangre, $telefono, $correo, $tipoPaciente, $rfc);


    $pacienteDAO = new PacienteDAO();
    $resultado = $pacienteDAO->altaPaciente($paciente);


    if ($resultado) {
        header('Location: ../../crud.php?mensaje=1');
        exit();
    } else {
        header('Location: ../../crud.php?mensaje=0');
        exit();
    }
} else {
    header('Location: ../../crud.php?mensaje=0');
    exit();
}
?>