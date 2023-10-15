<?php
include('./php/modelo/Paciente.php');
include('./php/conexion/Conexion.php');
include('./php/controlador/PacienteDAO.php');

$pacienteDAO = new PacienteDAO();
$resultado = $pacienteDAO->mostrarPacientes();

if ($resultado->rowCount()) {
    while ($result = $resultado->fetch(PDO::FETCH_ASSOC)) {
        printf("<tr>");
        printf("<th>%s</th>", $result["id_paciente"]);
        printf("<th>%s %s %s</th>", $result["nombre"], $result["apellido_paterno"], $result["apellido_materno"]);
        printf("<th>%s</th>", $result["fecha_nacimiento"]);
        printf("<th>%s</th>", $result["tipo_sangre"]);
        printf("<th>%s</th>", $result["telefono"]);
        printf("<th>%s</th>", $result["correo"]);
        printf("<th>%s</th>", $result["tipo_paciente"]);
        printf("<th>%s</th>", $result["rfc"]);
        printf(
            "<th>
                <a class='material-icons' style='font-size:1.2rem; color: yellow;' href='#editarPacienteModal' class='edit' data-toggle='modal' data-id-paciente='%s' data-nombre='%s' data-apellido-paterno='%s' data-apellido-materno='%s' data-fecha-nacimiento='%s' data-tipo-sangre='%s' data-telefono='%s' data-correo='%s' data-tipo-paciente='%s' data-rfc='%s' onclick='openEditModalPaciente(event)'>
                    &#xE254
                </a>
                <a class='material-icons' style='font-size:1.2rem; color: red;' href='#eliminarPacienteModal' class='delete' data-toggle='modal' data-id-paciente='%s' onclick='openDeleteModalPaciente(event)'>
                    &#xE872
                </a>
            </th>",
            $result["id_paciente"], $result["nombre"], $result["apellido_paterno"], $result["apellido_materno"], $result["fecha_nacimiento"], $result["tipo_sangre"], $result["telefono"], $result["correo"], $result["tipo_paciente"], $result["rfc"],
            $result["id_paciente"]
        );
        printf("</tr>");
    }
} else {
    echo ("Aún no se han agregado pacientes");
}
?>