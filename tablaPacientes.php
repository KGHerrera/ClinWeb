<?php
include('./php/modelo/Paciente.php');
include('./php/conexion/Conexion.php');
include('./php/controlador/PacienteDAO.php');

$pacienteDAO = new PacienteDAO();

$nombre = isset($_GET['q']) ? $_GET['q'] : '';

if (!empty($nombre)) {
  $resultado = $pacienteDAO->buscarPaciente($nombre);
} else {
  $resultado = $pacienteDAO->mostrarPacientes();
}

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
                <div class='btn-group' role='group'>
                    <a class='material-icons btn btn-warning text-dark mr-2' style='font-size:1.2rem;' href='#editarPacienteModal' class='edit' data-toggle='modal' data-id-paciente='%s' data-nombre='%s' data-apellido-paterno='%s' data-apellido-materno='%s' data-fecha-nacimiento='%s' data-tipo-sangre='%s' data-telefono='%s' data-correo='%s' data-tipo-paciente='%s' data-rfc='%s' onclick='openEditModalPaciente(event)'>
                        &#xE254
                    </a>
                    <a class='material-icons btn btn-danger text-white' style='font-size:1.2rem;' href='#eliminarPacienteModal' class='delete' data-toggle='modal' data-id-paciente='%s' onclick='openDeleteModalPaciente(event)'>
                        &#xE872
                    </a>
                </div>
            </th>",
      $result["id_paciente"],
      $result["nombre"],
      $result["apellido_paterno"],
      $result["apellido_materno"],
      $result["fecha_nacimiento"],
      $result["tipo_sangre"],
      $result["telefono"],
      $result["correo"],
      $result["tipo_paciente"],
      $result["rfc"],
      $result["id_paciente"]
    );
    printf("</tr>");
  }
} else {
  //echo ("No se encontraron pacientes.");
}
?>