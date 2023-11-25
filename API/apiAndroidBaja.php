<?php
include('../php/conexion/Conexion.php');
include('../php/modelo/Cita.php');
include('../php/controlador/CitaDAO.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cadenaJSON = file_get_contents('php://input');

    if ($cadenaJSON == false) {
        echo json_encode(array("mensaje" => "No hay cadena de petición JSON"));
    } else {
        $datos = json_decode(urldecode($cadenaJSON), true);

        // Verifica que los datos necesarios estén presentes
        if (isset($datos['id_cita'])) {
            $idCita = $datos['id_cita'];

            $citaDAO = new CitaDAO();
            $resultado = $citaDAO->bajaCita($idCita);

            if ($resultado) {
                echo json_encode(array("mensaje" => "Cita eliminada correctamente"));
            } else {
                echo json_encode(array("mensaje" => "Error al eliminar la cita"));
            }
        } else {
            echo json_encode(array("mensaje" => "Faltan datos necesarios para la baja de la cita"));
        }
    }
}
?>