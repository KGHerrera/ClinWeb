<?php

session_start();

include('../modelo/Paciente.php');
include('../conexion/Conexion.php');
include('../controlador/PacienteDAO.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = strtolower($_POST['nombre']);
    $apellidoPaterno = strtolower($_POST['apellido_paterno']);
    $apellidoMaterno = strtolower($_POST['apellido_materno']);
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $tipoSangre = strtoupper($_POST['tipo_sangre']);
    $telefono = $_POST['telefono'];
    $correo = strtolower($_POST['correo']);
    $tipoPaciente = strtolower($_POST['tipo_paciente']);
    $rfc = strtoupper($_POST['rfc']);

    // Validaciones
    $errors = [];

    if (empty($nombre) || !preg_match("/^[A-Za-záéíóúüñÁÉÍÓÚÜÑ]+( [A-Za-záéíóúüñÁÉÍÓÚÜÑ]+)*$/", $nombre)) {
        $errors[] = "Nombre invalido";
    }

    if (empty($apellidoPaterno) || !preg_match("/^[A-Za-záéíóúüñÁÉÍÓÚÜÑ]+$/", $apellidoPaterno)) {
        $errors[] = "Apellido paterno invalido";
    }

    if (empty($apellidoMaterno) || !preg_match("/^[A-Za-záéíóúüñÁÉÍÓÚÜÑ]+$/", $apellidoMaterno)) {
        $errors[] = "Apellido materno invalido";
    }

    if (empty($fechaNacimiento) || $fechaNacimiento > date("Y-m-d")) {
        $errors[] = "Fecha de nacimiento invalida";
    }

    if (empty($tipoSangre) || !preg_match("/^(A|B|AB|O)[+-]$/", $tipoSangre)) {
        $errors[] = "Tipo de sangre invalido";
    }

    if (empty($telefono) || !preg_match("/^[0-9]+$/", $telefono)) {
        $errors[] = "Teléfono invalido";
    }

    if (empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Correo invalido";
    }

    if (empty($rfc) || !preg_match("/^[A-Z&Ñ]{3,4}[0-9]{6}$/", $rfc)) {
        $errors[] = "RFC invalido";
    }

    if (empty($tipoPaciente) || $tipoPaciente === "0") {
        $errors[] = "Selecciona una opción valida para el tipo de paciente";
    }

    // Verificar errores
    if (count($errors) > 0) {

        $_SESSION['a_nombre'] = strtolower($_POST['nombre']);
        $_SESSION['a_apellido_paterno'] = strtolower($_POST['apellido_paterno']);
        $_SESSION['a_apellido_materno'] = strtolower($_POST['apellido_materno']);
        $_SESSION['a_fecha_nacimiento'] = $_POST['fecha_nacimiento'];
        $_SESSION['a_tipo_sangre'] = strtoupper($_POST['tipo_sangre']);
        $_SESSION['a_telefono'] = $_POST['telefono'];
        $_SESSION['a_correo'] = strtolower($_POST['correo']);
        $_SESSION['a_tipo_paciente'] = strtolower($_POST['tipo_paciente']);
        $_SESSION['a_rfc'] = strtoupper($_POST['rfc']);

        $_SESSION['mensaje'] = 0;
        $_SESSION['error_altas'] = true;

        
        
        header('Location: ../../crud.php');
        exit();
    }

    // Si no hay errores, crear el objeto Paciente y realizar la operación correspondiente
    $paciente = new Paciente(0, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaNacimiento, $tipoSangre, $telefono, $correo, $tipoPaciente, $rfc);

    $pacienteDAO = new PacienteDAO();
    $resultado = $pacienteDAO->altaPaciente($paciente);

    if ($resultado) {
        $_SESSION['mensaje'] = 1;
        header('Location: ../../crud.php');
        exit();
    } else {

        $_SESSION['a_nombre'] = strtolower($_POST['nombre']);
        $_SESSION['a_apellido_paterno'] = strtolower($_POST['apellido_paterno']);
        $_SESSION['a_apellido_materno'] = strtolower($_POST['apellido_materno']);
        $_SESSION['a_fecha_nacimiento'] = $_POST['fecha_nacimiento'];
        $_SESSION['a_tipo_sangre'] = strtoupper($_POST['tipo_sangre']);
        $_SESSION['a_telefono'] = $_POST['telefono'];
        $_SESSION['a_correo'] = strtolower($_POST['correo']);
        $_SESSION['a_tipo_paciente'] = strtolower($_POST['tipo_paciente']);
        $_SESSION['a_rfc'] = strtoupper($_POST['rfc']);

        $_SESSION['mensaje'] = 0;
        $_SESSION['error_altas'] = true;

        header('Location: ../../crud.php');
        exit();
    }
} else {
    $_SESSION['mensaje'] = 0;
    $_SESSION['error_altas'] = true;
    header('Location: ../../crud.php');
    exit();
}
?>