<?php
include('../modelo/Paciente.php');
include('../conexion/Conexion.php');
include('../controlador/PacienteDAO.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellido_paterno'];
    $apellidoMaterno = $_POST['apellido_materno'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $tipoSangre = $_POST['tipo_sangre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $tipoPaciente = $_POST['tipo_paciente'];
    $rfc = $_POST['rfc'];

    // Validar que los datos no estén vacíos
    if (empty($nombre) || empty($apellidoPaterno) || empty($fechaNacimiento) || empty($tipoSangre) || empty($telefono) || empty($correo) || empty($tipoPaciente) || empty($rfc)) {
        header('Location: ../../crud.php?mensaje=0');
        exit();
    }

    // Crear una instancia de Paciente con los datos del formulario
    $paciente = new Paciente(0, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaNacimiento, $tipoSangre, $telefono, $correo, $tipoPaciente, $rfc);

    // Invocar el método para agregar paciente en PacienteDAO
    $pacienteDAO = new PacienteDAO();
    $resultado = $pacienteDAO->altaPaciente($paciente);

    // Redireccionar al formulario con el mensaje correspondiente
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