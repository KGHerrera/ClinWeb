let id = (id) => document.getElementById(id);
let classes = (classes) => document.getElementsByClassName(classes);

let inputNombre = id("nombre");
let inputApellidoPaterno = id("apellido_paterno");
let inputApellidoMaterno = id("apellido_materno");
let inputFechaNacimiento = id("fecha_nacimiento");
let inputTipoSangre = id("tipo_sangre");
let inputTelefono = id("telefono");
let inputCorreo = id("correo");
let inputTipoPaciente = id("tipo_paciente");
let inputRFC = id("rfc");
let formAgregarPaciente = id("agregarPacienteForm");
let errorMsgPaciente = classes("errorAgregar");

let validadoPaciente = true;

formAgregarPaciente.addEventListener("submit", (e) => {
    e.preventDefault();

    let fechaActual = new Date().toISOString().slice(0, 10);
    let fechaIngresada = inputFechaNacimiento.value;
    let fechamayor = fechaIngresada > fechaActual;

    validadoPaciente = true;
    const nombreRegex = /^[A-Za-záéíóúüñÁÉÍÓÚÜÑ]+( [A-Za-záéíóúüñÁÉÍÓÚÜÑ]+)*$/;
    const tipoSangreRegex = /^(A|B|AB|O)[+-]$/;
    const telefonoRegex = /^[0-9]+$/;
    const rfcRegex = /^[A-Z&Ñ]{3,4}[0-9]{6}/;

    engine(inputNombre, 0, "Solo letras", inputNombre.value.trim() === "", nombreRegex);
    engine(inputApellidoPaterno, 1, "Solo letras", inputApellidoPaterno.value.trim() === "", nombreRegex);
    engine(inputApellidoMaterno, 2, "Solo letras", inputApellidoMaterno.value.trim() === "", nombreRegex);
    engine(inputFechaNacimiento, 3, "Fecha invalida", inputFechaNacimiento.value.trim() === "" || fechamayor);
    engine(inputTipoSangre, 4, "Tipo invalido", inputTipoSangre.value.trim() === "", tipoSangreRegex);
    engine(inputTelefono, 5, "El teléfono invalido", inputTelefono.value.trim() === "", telefonoRegex);
    engine(inputRFC, 6, "El RFC invalido", inputRFC.value.trim() === "", rfcRegex);
    engine(inputTipoPaciente, 7, "Selecciona opcion", inputTipoPaciente.value.trim() === "" || inputTipoPaciente.value.trim() === "0");
    engine(inputCorreo, 8, "Correo invalido", inputCorreo.value.trim() === "");


    if (validadoPaciente) {
        formAgregarPaciente.submit();
    }
});

function engine(id, serial, message, invalid, regex = null) {
    if (invalid || (regex && !regex.test(id.value.trim()))) {
        errorMsgPaciente[serial].innerHTML = message;
        id.style.border = "2px solid red";
        validadoPaciente = false; 
    } else {
        errorMsgPaciente[serial].innerHTML = "";
        id.style.border = "2px solid green";
    }
}