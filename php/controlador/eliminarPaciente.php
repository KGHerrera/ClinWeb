<?php
include('../controlador/PacienteDAO.php');
include('../conexion/Conexion.php');
include('../modelo/Paciente.php');


if (!empty($_POST['id_paciente'])) {
    $id_paciente = $_POST['id_paciente'];
    $pacienteDAO = new PacienteDAO();
    Conexion::obtenerConexion();
    $resultado = $pacienteDAO->bajaPaciente($id_paciente);
    if ($resultado) {
        header('Location: ../../crud.php?mensaje=5'); // Redirige a la página de lista de pacientes con mensaje 5 (eliminación exitosa)
    } else {
        header('Location: ../../crud.php?mensaje=6'); // Redirige a la página de lista de pacientes con mensaje 6 (error al eliminar)
    }
} else {
    header('Location: ../../crud.php?mensaje=8'); // Redirige a la página de lista de pacientes con mensaje 6 (error al eliminar debido a falta de datos)
}
