$(document).ready(function() {
    $(".xp-menubar").on('click', function() {
        $("#sidebar").toggleClass('active');
        $("#content").toggleClass('active');
    });

    $('.xp-menubar,.body-overlay').on('click', function() {
        $("#sidebar,.body-overlay").toggleClass('show-nav');
    });

});

// Obtén referencias a las tablas y botones
const tablaPacientes = document.getElementById('tablaPacientes');
const tablaCitas = document.getElementById('tablaCitas');
const tablaPersonal = document.getElementById('tablaPersonal');

const btnMostrarPacientes = document.getElementById('mostrarPacientes');
const btnMostrarCitas = document.getElementById('mostrarCitas');
const btnMostrarPersonal = document.getElementById('mostrarPersonal');

// Función para ocultar todas las tablas
function ocultarTablas() {
    tablaPacientes.style.display = 'none';
    tablaCitas.style.display = 'none';
    tablaPersonal.style.display = 'none';
}

// Agregar manejadores de eventos a los botones
btnMostrarPacientes.addEventListener('click', function() {
    ocultarTablas();
    tablaPacientes.style.display = 'block'; // Mostrar tabla de pacientes
    console.log('click');
});

btnMostrarCitas.addEventListener('click', function() {
    ocultarTablas();
    tablaCitas.style.display = 'block'; // Mostrar tabla de citas
});

btnMostrarPersonal.addEventListener('click', function() {
    ocultarTablas();
    tablaPersonal.style.display = 'block'; // Mostrar tabla de personal
});

// Ocultar todas las tablas inicialmente
ocultarTablas();
tablaPacientes.style.display = 'block';