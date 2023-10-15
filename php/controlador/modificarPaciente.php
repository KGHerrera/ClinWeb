<?php
include('../modelo/Paciente.php');
include('../conexion/Conexion.php');
include('../controlador/PacienteDAO.php');

// Verificar que los datos no estén vacíos
if (empty($_POST['idPaciente']) || empty($_POST['nombre']) || empty($_POST['apellido_paterno']) || empty($_POST['apellido_materno']) || empty($_POST['fecha_nacimiento']) || empty($_POST['tipo_sangre']) || empty($_POST['telefono']) || empty($_POST['correo']) || empty($_POST['tipo_paciente']) || empty($_POST['rfc'])) {
    header('Location: ../../altasPacientes.php?mensaje=4'); // Mensaje para campos vacíos
    exit();
}

// Obtener los datos del formulario
$id_paciente = $_POST['idPaciente'];
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellido_paterno'];
$apellidoMaterno = $_POST['apellido_materno'];
$fechaNacimiento = $_POST['fecha_nacimiento'];
$tipoSangre = $_POST['tipo_sangre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$tipoPaciente = $_POST['tipo_paciente'];
$rfc = $_POST['rfc'];

// Crear una instancia de Paciente con los datos del formulario
$paciente = new Paciente($id_paciente, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaNacimiento, $tipoSangre, $telefono, $correo, $tipoPaciente, $rfc);

// Invocar el método para actualizar paciente en PacienteDAO
$pacienteDAO = new PacienteDAO();
$resultado = $pacienteDAO->actualizarPaciente($paciente);

// Redireccionar al formulario con el mensaje correspondiente
if ($resultado) {
    header('Location: ../../crud.php?mensaje=3'); // Mensaje de éxito al actualizar
} else {
    header('Location: ../../crud.php?mensaje=2'); // Mensaje de error al actualizar
}
?>
