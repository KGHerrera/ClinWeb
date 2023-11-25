<?php
include('../php/conexion/Conexion.php');
include('../php/modelo/Cita.php');
include('../php/controlador/CitaDAO.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cadenaJSON = file_get_contents('php://input');

    if ($cadenaJSON == false) {
        $respuesta['mensaje'] = "No hay cadena de petición JSON";
        $respuestaJSON = json_encode($respuesta);
        echo $respuestaJSON;
    } else {
        $datos = json_decode(urldecode($cadenaJSON), true);

        // Verificar si el criterio está presente y no está vacío
        if (isset($datos['criterio']) && !empty($datos['criterio'])) {
            $criterio = $datos['criterio'];            

            $citaDAO = new CitaDAO();
            $resultados = $citaDAO->buscarCita($criterio);

            $respuesta = array();

            if ($resultados) {
                $citas = array();

                while ($row = $resultados->fetch(PDO::FETCH_ASSOC)) {
                    $cita = array();
                    $cita['id_cita'] = $row['id_cita'];
                    $cita['fk_paciente'] = $row['fk_paciente'];
                    $cita['fk_personal'] = $row['fk_personal'];
                    $cita['fk_sala'] = $row['fk_sala'];
                    $cita['fecha_hora'] = $row['fecha_hora'];
                    $cita['motivo_cita'] = $row['motivo_cita'];

                    $citas[] = $cita;
                }

                $respuesta['citas'] = $citas;
                $respuestaJSON = json_encode($respuesta);
                echo $respuestaJSON;
            } else {
                $respuesta['mensaje'] = 'No se encontraron citas con el criterio proporcionado';
                $respuestaJSON = json_encode($respuesta);
                echo $respuestaJSON;
            }
        } else {
            // Criterio vacío, recuperar todas las citas
            $citaDAO = new CitaDAO();
            $resultados = $citaDAO->mostrarCitas();

            $respuesta = array();

            if ($resultados) {
                $citas = array();

                while ($row = $resultados->fetch(PDO::FETCH_ASSOC)) {
                    $cita = array();
                    $cita['id_cita'] = $row['id_cita'];
                    $cita['fk_paciente'] = $row['fk_paciente'];
                    $cita['fk_personal'] = $row['fk_personal'];
                    $cita['fk_sala'] = $row['fk_sala'];
                    $cita['fecha_hora'] = $row['fecha_hora'];
                    $cita['motivo_cita'] = $row['motivo_cita'];

                    $citas[] = $cita;
                }

                $respuesta['citas'] = $citas;
                $respuestaJSON = json_encode($respuesta);
                echo $respuestaJSON;
            } else {
                $respuesta['mensaje'] = 'Error al obtener todas las citas';
                $respuestaJSON = json_encode($respuesta);
                echo $respuestaJSON;
            }
        }
    }
}
?>