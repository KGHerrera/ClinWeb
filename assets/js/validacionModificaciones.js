let inputNombreM = id("inputNombre");
let inputApellidoPaternoM = id("inputApellidoPaterno");
let inputApellidoMaternoM = id("inputApellidoMaterno");
let inputFechaNacimientoM = id("inputFechaNacimiento");
let inputTipoSangreM = id("inputTipoSangre");
let inputTelefonoM = id("inputTelefono");
let inputCorreoM = id("inputCorreo");
let inputTipoPacienteM = id("inputTipoPaciente");
let inputRFCMM = id("inputRFC");
let editarPacienteFormM = id("editarPacienteForm");
let errorMsgPacienteM = classes("errorModificar");

let validadoPacienteModificaciones = true;

editarPacienteFormM.addEventListener("submit", (e) => {
    e.preventDefault();

    let fechaActual = new Date().toISOString().slice(0, 10);
    let fechaIngresada = inputFechaNacimientoM.value;
    let fechamayor = fechaIngresada > fechaActual;

    validadoPacienteModificaciones = true;
    const nombreRegex = /^[A-Za-záéíóúüñÁÉÍÓÚÜÑ]+( [A-Za-záéíóúüñÁÉÍÓÚÜÑ]+)*$/;
    const tipoSangreRegex = /^(A|B|AB|O)[+-]$/;
    const telefonoRegex = /^[0-9]+$/;
    const rfcRegex = /^[A-Z&Ñ]{3,4}[0-9]{6}/;

    engineM(inputNombreM, 0, "Solo letras", inputNombreM.value.trim() === "", nombreRegex);
    engineM(inputApellidoPaternoM, 1, "Solo letras", inputApellidoPaternoM.value.trim() === "", nombreRegex);
    engineM(inputApellidoMaternoM, 2, "Solo letras", inputApellidoMaternoM.value.trim() === "", nombreRegex);
    engineM(inputFechaNacimientoM, 3, "Fecha invalida", inputFechaNacimientoM.value.trim() === "" || fechamayor);
    engineM(inputTipoSangreM, 4, "Tipo invalido", inputTipoSangreM.value.trim() === "", tipoSangreRegex);
    engineM(inputTelefonoM, 5, "El teléfono invalido", inputTelefonoM.value.trim() === "", telefonoRegex);
    engineM(inputRFCMM, 6, "El RFC invalido", inputRFCMM.value.trim() === "", rfcRegex);
    engineM(inputTipoPacienteM, 7, "Selecciona opcion", inputTipoPacienteM.value.trim() === "" || inputTipoPacienteM.value.trim() === "0");
    engineM(inputCorreoM, 8, "Correo invalido", inputCorreoM.value.trim() === "");


    if (validadoPacienteModificaciones) {
        editarPacienteFormM.submit();
    }
});

function engineM(id, serial, message, invalid, regex = null) {
    if (invalid || (regex && !regex.test(id.value.trim()))) {
        errorMsgPacienteM[serial].innerHTML = message;
        id.style.border = "2px solid red";
        validadoPacienteModificaciones = false;
    } else {
        errorMsgPacienteM[serial].innerHTML = "";
        id.style.border = "2px solid green";
    }
}