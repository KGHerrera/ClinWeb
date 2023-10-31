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
        header('Location: ../../crud.php?mensaje=5');
    } else {
        header('Location: ../../crud.php?mensaje=6');
    }
} else {
    header('Location: ../../crud.php?mensaje=6');
}

?>