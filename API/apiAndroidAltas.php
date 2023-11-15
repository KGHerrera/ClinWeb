<?php

include('../php/conexion/Conexion.php');
include('../php/modelo/Cita.php');
include('../php/controlador/CitaDAO.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cadenaJSON = file_get_contents('php://input');

    if ($cadenaJSON == false) {
        echo "No hay cadena de petición JSON";
    } else {
        // Decodificar la cadena JSON
        $datos = json_decode($cadenaJSON, true);

        if ($datos == null) {
            echo "Error al decodificar el JSON";
        } else {
            // Crear un objeto Cita y asignar los valores directamente
            $cita = new Cita();
            $cita->setFkPaciente($datos['fk_paciente']);
            $cita->setFkPersonal($datos['fk_personal']);
            $cita->setFkSala($datos['fk_sala']);
            $cita->setFechaHora($datos['fecha_hora']);
            $cita->setMotivoCita($datos['motivo_cita']);

            // Guardar la cita en la base de datos
            $citaDAO = new CitaDAO();
            $resultado = $citaDAO->altaCita($cita);

            if ($resultado) {
                echo json_encode(array("mensaje" => "Cita agregada correctamente"));
            } else {
                echo json_encode(array("mensaje" => "Error al agregar la cita"));
            }
        }
    }
}

?>