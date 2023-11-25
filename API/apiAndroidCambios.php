<?php
include('../php/conexion/Conexion.php');
include('../php/modelo/Cita.php');
include('../php/controlador/CitaDAO.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cadenaJSON = file_get_contents('php://input');

    if ($cadenaJSON == false) {
        echo "No hay cadena de petición JSON";
    } else {
        $datos = json_decode(urldecode($cadenaJSON), true);

        // Verificar si los datos necesarios están presentes
        if (
            isset($datos['id_cita'])
            && isset($datos['fk_paciente'])
            && isset($datos['fk_personal'])
            && isset($datos['fk_sala'])
            && isset($datos['fecha_hora'])
            && isset($datos['motivo_cita'])
        ) {
            // Crear un objeto Cita
            $cita = new Cita();

            // Establecer los valores
            $cita->setIdCita($datos['id_cita']);
            $cita->setFkPaciente($datos['fk_paciente']);
            $cita->setFkPersonal($datos['fk_personal']);
            $cita->setFkSala($datos['fk_sala']);
            $cita->setFechaHora($datos['fecha_hora']);
            $cita->setMotivoCita($datos['motivo_cita']);

            // Crear un objeto DAO y realizar la actualización
            $citaDAO = new CitaDAO();
            $resultado = $citaDAO->actualizarCita($cita);

            // Verificar el resultado y enviar una respuesta
            if ($resultado) {
                echo json_encode(array("mensaje" => "Cita actualizada correctamente"));
            } else {
                echo json_encode(array("mensaje" => "Error al actualizar la cita"));
            }
        } else {
            echo json_encode(array("mensaje" => "Datos incompletos en la petición"));
        }
    }
}
?>