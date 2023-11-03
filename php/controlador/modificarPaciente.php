<?php
include('../modelo/Paciente.php');
include('../conexion/Conexion.php');
include('../controlador/PacienteDAO.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_paciente = $_POST['idPaciente'];
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
        header('Location: ../../crud.php?mensaje=0&errors=' . urlencode(json_encode($errors)));
        exit();
    }

    // Si no hay errores, crear el objeto Paciente y realizar la operación correspondiente
    $paciente = new Paciente($id_paciente, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaNacimiento, $tipoSangre, $telefono, $correo, $tipoPaciente, $rfc);

    $pacienteDAO = new PacienteDAO();
    $resultado = $pacienteDAO->actualizarPaciente($paciente);

    if ($resultado) {
        header('Location: ../../crud.php?mensaje=3');
        exit();
    } else {
        header('Location: ../../crud.php?mensaje=2'); 
        exit();
    }
} else {
    header('Location: ../../crud.php?mensaje=0');
    exit();
}
?>
