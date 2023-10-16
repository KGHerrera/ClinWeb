<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>crud dashboard</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!----css3---->
	<link rel="stylesheet" href="assets/css/custom.css">


	<!--google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<!-- Incluye los estilos de iziToast (puedes personalizar esto según tus necesidades) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

	<!-- Incluye la biblioteca iziToast -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

	<link rel="stylesheet" href="/assets/css/scrollbar.css">


	<!--google material icon-->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<style>
		/* Cambiar el fondo del menú */
		#sidebar {
			background-color: #0e1214;
			box-shadow: none !important;
			/* Cambia esto al color de fondo deseado */
		}

		/* Cambiar el color del texto del menú */
		#sidebar a {
			color: #ecf0f1;
			/* Cambia esto al color de texto deseado */
		}

		/* Cambiar el color del icono */
		#sidebar .material-icons {
			color: #f8f8f8 !important;
		}

		.collapse>li>a,
		.dashboard,
		.dropdown-toggle {
			color: #fff4f4 !important;
		}

		/* Cambiar el color del enlace activo */
		#sidebar a.active {
			background-color: #e74c3c;
			/* Cambia esto al color deseado para el enlace activo */
			color: #ffffff;
			/* Cambia esto al color de texto deseado para el enlace activo */
		}

		.logo {
			color: #1de9b6 !important;
		}

		.sidebar-header {
			background-color: #11171a !important;
			border: none !important;
		}

		#sidebar ul li a:hover {
			background-color: #0e1214;
		}

		.list-unstyled li a:hover {
			color: white !important;
		}

		body {
			background-color: #0e1214;
		}

		.top-navbar,
		.navbar {
			background-color: #11171a !important;
		}

		.table-title {
			background-color: #192225 !important;
			border-radius: none !important;
		}

		input[type="search"],
		.xp-searchbar .btn {
			background-color: #161d20 !important;
			color: white !important;
		}

		.table-wrapper {
			background-color: #11171a;
		}

		.modal-header,
		.modal-footer,
		.modal-content {
			background-color: #11171a !important;
			color: white;
			border: none;
		}

		.btn-success {
			background-color: #16ad50 !important;
			border: none !important;
		}

		.btn-secondary {
			background-color: #192225 !important;
			border: none !important;
		}



		.modal-body {
			background-color: #0e1214;
			color: white;
			border: none;
		}

		span {
			color: white !important;
		}

		input::selection {
			background-color: rgb(187, 187, 187);
		}

		thead>tr>th {
			color: #1de9b6 !important;
		}

		thead {
			background-color: #192225 !important;
			border: none !important;
		}

		tr,
		th {
			border: none !important;
			color: white;
		}

		body::-webkit-scrollbar {
			width: 1em;
		}

		body::-webkit-scrollbar-track {
			background: #11171a;
		}

		body::-webkit-scrollbar-thumb {
			background-color: #263238;
			border-radius: 5px;
		}

		body::-webkit-scrollbar-thumb:hover {
			background-color: #25cfa5;
		}
	</style>

</head>

<body>
	<div class="wrapper">

		<div class="body-overlay"></div>

		<!-------sidebar--design------------>

		<div id="sidebar">
			<div class="sidebar-header">
				<a href="index.html">
					<h3 class="logo">WEBCLIN</h3>
				</a>
			</div>
			<div class="container pt-3">
				<p class="m-0">formularios</p>
			</div>


			<ul class="list-unstyled component m-0 p-0">
				<li><a href="#" id="mostrarPacientes"><i class="material-icons">person</i>paciente</a></li>
				<li><a href="#" id="mostrarCitas"><i class="material-icons">event</i>cita</a></li>
				<li><a href="#" id="mostrarPersonal"><i class="material-icons">person_outline</i>personal</a></li>
			</ul>

			<div class="container pt-3">
				<p class="m-0">reportes</p>


			</div>

			<ul class="list-unstyled component m-0 p-0">
				<li><a href="#"><i class="material-icons">book</i>generar reporte</a></li>
			</ul>
		</div>

		<!-------sidebar--design- close----------->



		<!-------page-content start----------->

		<div id="content">

			<!------top-navbar-start----------->

			<div class="top-navbar">
				<div class="xd-topbar">
					<div class="row">
						<div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
							<div class="xp-menubar">
								<span class="material-icons text-white">signal_cellular_alt</span>
							</div>
						</div>

						<div class="col-md-5 col-lg-3 order-3 order-md-2">
							<div class="xp-searchbar">
								<form id="searchForm">
									<div class="input-group">
										<input type="search" class="form-control" name="buscar_paciente" placeholder="Search" id="searchInput">
										<div class="input-group-append">
											<button class="btn" type="submit" id="buscar_paciente">Buscar</button>
										</div>

										<div class="input-group-append">
											<button class="btn" type="button" id="mostrar_pacientes" onClick="verTodos()">Ver todos</button>
										</div>

									</div>
								</form>
							</div>
						</div>


						<div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
							<div class="xp-profilebar text-right">
								<nav class="navbar p-0">
									<ul class="nav navbar-nav flex-row ml-auto">
										<li class="dropdown nav-item active">
											<a class="nav-link" href="#" data-toggle="dropdown">
												<span class="material-icons">notifications</span>
												<span class="notification">1</span>
											</a>
											<ul class="dropdown-menu">
												<li><a href="#">Correle we que nos va agarrar el trafico</a></li>
											</ul>
										</li>

										<li class="nav-item">
											<a class="nav-link" href="#">
												<span class="material-icons">question_answer</span>
											</a>
										</li>

										<li class="dropdown nav-item">
											<a class="nav-link" href="#" data-toggle="dropdown">
												<img src="https://art.ngfiles.com/thumbnails/1443000/1443313_full.png?f1601406845" style="width:40px; border-radius:50%;" />
												<span class="xp-user-live"></span>
											</a>
											<ul class="dropdown-menu small-menu">
												<li><a href="#">
														<span class="material-icons">person_outline</span>
														perfil
													</a></li>
												<li><a href="#">
														<span class="material-icons">settings</span>
														opciones
													</a></li>
												<li><a href="#">
														<span class="material-icons">logout</span>
														cerrar sesion
													</a></li>
											</ul>
										</li>


									</ul>
								</nav>
							</div>
						</div>

					</div>

					<div class="xp-breadcrumbbar text-center">
						<h4 class="page-title">Dashboard</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">WebClin</a></li>
							<li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
						</ol>
					</div>


				</div>
			</div>
			<!------top-navbar-end----------->


			<!------main-content-start----------->

			<div class="main-content">
				<div class="row">
					<div class="col-md-12">
						<div class="table-wrapper" id="tablaPacientes">
							<div class="table-title">
								<div class="row">
									<div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
										<h2 class="ml-lg-2">Pacientes</h2>
									</div>
									<div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
										<a href="#agregarPacienteModal" class="btn btn-success" data-toggle="modal">
											<i class="material-icons">&#xE147;</i>
											<span>Agregar</span>
										</a>
									</div>
								</div>
							</div>

							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<!-- <th>seleccionar</th> -->
										<th>ID</th>
										<th>nombre</th>
										<th>fecha de nacimiento</th>
										<th>tipo de sangre</th>
										<th>telefono</th>
										<th>correo</th>
										<th>tipo paciente</th>
										<th>RFC</th>
										<th>acciones</th>
									</tr>
								</thead>

								<tbody>
									<?php
									include('tablaPacientes.php');
									?>
								</tbody>
							</table>
						</div>
					</div>






					<!-- otra tabla de citas -->
					<div class="col-md-12">
						<div class="table-wrapper table-responsive" id="tablaCitas" style="display:none;">

							<div class="table-title">
								<div class="row">
									<div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
										<h2 class="ml-lg-2">Citas</h2>
									</div>
									<div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
										<a href="#agregarCitaModal" class="btn btn-success" data-toggle="modal">
											<i class="material-icons">&#xE147;</i>
											<span>Agregar</span>
										</a>
									</div>
								</div>
							</div>

							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>seleccionar</th>
										<th>paciente</th>
										<th>especialista</th>
										<th>no. sala</th>
										<th>fecha y hora</th>
										<th>motivo de la cita</th>
										<th>acciones</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<th><span class="custom-checkbox">
												<input type="checkbox" id="checkbox1" name="option[]" value="1">
												<label for="checkbox1"></label></th>

										<th>Kris Topala Rent</th>
										<th>Spamton Ramos Rosas</th>
										<th>021</th>
										<th>03/12/23 12:58</th>
										<th>enfermedad cranial</th>
										<th>
											<a href="#editarCitaModal" class="edit" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
											</a>
											<a href="#eliminarCitaModal" class="delete" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
											</a>
										</th>
									</tr>
								</tbody>


							</table>
						</div>
					</div>


					<!-- otra tabla -->
					<div class="col-md-12">
						<div class="table-wrapper" id="tablaPersonal" style="display:none;">

							<div class="table-title">
								<div class="row">
									<div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
										<h2 class="ml-lg-2">Personal</h2>
									</div>
									<div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
										<a href="#agregarPersonalModal" class="btn btn-success" data-toggle="modal">
											<i class="material-icons">&#xE147;</i>
											<span>Agregar</span>
										</a>
									</div>
								</div>
							</div>

							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<!-- <th>seleccionar</th> -->
										<th>ID</th>
										<th>nombre</th>
										<th>fecha de nacimiento</th>
										<th>cargo</th>
										<th>telefono</th>
										<th>correo</th>
										<th>domicilio</th>
										<th>clasificacion</th>
										<th>acciones</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<!-- <th><span class="custom-checkbox">
													<input type="checkbox" id="checkbox1" name="option[]" value="1">
													<label for="checkbox1"></label></th> -->
										<th>1</th>
										<th>Kris Topala Rent</th>
										<th>02/12/23</th>
										<th>enfermero</th>
										<th>49423891</th>
										<th>kh@gmail.com</th>
										<th>su casita</th>
										<th>DT</th>
										<th>
											<a href="#editarPersonalModal" class="edit" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
											</a>
											<a href="#eliminarPersonalModal" class="delete" data-toggle="modal">
												<i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
											</a>
										</th>
									</tr>
								</tbody>


							</table>
						</div>
					</div>

					<!----add-modal paciente start--------->
					<div class="modal fade" tabindex="-1" id="agregarPacienteModal" role="dialog">
						<div class="modal-dialog" style="min-width: fit-content" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Agregar Paciente</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="./php/controlador/agregarPaciente.php" method="POST">
										<div class="row">
											<div class="col-md-6">
												<!-- Nombre -->
												<div class="form-group">
													<label>Nombre:</label>
													<input type="text" class="form-control" name="nombre" required>
												</div>
											</div>
											<div class="col-md-6">
												<!-- Apellido Paterno -->
												<div class="form-group">
													<label>Apellido Paterno:</label>
													<input type="text" class="form-control" name="apellido_paterno" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<!-- Apellido Materno -->
												<div class="form-group">
													<label>Apellido Materno:</label>
													<input type="text" class="form-control" name="apellido_materno" required>
												</div>
											</div>
											<div class="col-md-6">
												<!-- Fecha de Nacimiento -->
												<div class="form-group">
													<label>Fecha de Nacimiento:</label>
													<input type="date" class="form-control" name="fecha_nacimiento" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<!-- Tipo de Sangre -->
												<div class="form-group">
													<label>Tipo de Sangre:</label>
													<input type="text" class="form-control" name="tipo_sangre" required>
												</div>
											</div>
											<div class="col-md-6">
												<!-- Teléfono -->
												<div class="form-group">
													<label>Teléfono:</label>
													<input type="text" class="form-control" name="telefono" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<!-- RFC -->
												<div class="form-group">
													<label>RFC:</label>
													<input type="text" class="form-control" name="rfc" required>
												</div>
											</div>
											<div class="col-md-6">
												<!-- Tipo de Paciente -->
												<div class="form-group">
													<label>Tipo de Paciente:</label>
													<select class="form-control" name="tipo_paciente" required>
														<option value="normal">Normal</option>
														<option value="frecuente">Frecuente</option>
														<option value="especial">Especial</option>
														<option value="discapacitado">Discapacitado</option>
														<option value="vip">VIP</option>
														<option value="regular">Regular</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<!-- Correo -->
												<div class="form-group">
													<label>Correo:</label>
													<input type="email" class="form-control" name="correo" required>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
											<button type="submit" class="btn btn-success">Agregar</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>


					<!----add-modal end--------->

					<!-- Modal de Editar Paciente -->
					<div class="modal fade" tabindex="-1" id="editarPacienteModal" role="dialog">
						<div class="modal-dialog" style="min-width: fit-content" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Editar Paciente</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<form id="editarPacienteForm" action="./php/controlador/modificarPaciente.php" method="POST">
									<div class="modal-body">

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>ID:</label>
													<input type="text" class="form-control" id="inputID" name="idPaciente" readonly>
												</div>
												<div class="form-group">
													<label>Nombre:</label>
													<input type="text" class="form-control" id="inputNombre" name="nombre" required>
												</div>
												<div class="form-group">
													<label>Apellido Paterno:</label>
													<input type="text" class="form-control" id="inputApellidoPaterno" name="apellido_paterno" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Apellido Materno:</label>
													<input type="text" class="form-control" id="inputApellidoMaterno" name="apellido_materno" required>
												</div>
												<div class="form-group">
													<label>Fecha de Nacimiento:</label>
													<input type="date" class="form-control" id="inputFechaNacimiento" name="fecha_nacimiento" required>
												</div>
												<div class="form-group">
													<label>Tipo de Sangre:</label>
													<input type="text" class="form-control" id="inputTipoSangre" name="tipo_sangre" required>
												</div>
											</div>
										</div>
										<!-- Resto de las cajas de entrada -->
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Teléfono:</label>
													<input type="text" class="form-control" id="inputTelefono" name="telefono" required>
												</div>
												<div class="form-group">
													<label>Correo:</label>
													<input type="email" class="form-control" id="inputCorreo" name="correo" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Tipo de Paciente:</label>
													<select class="form-control" id="inputTipoPaciente" name="tipo_paciente" required>
														<option value="normal">Normal</option>
														<option value="frecuente">Frecuente</option>
														<option value="especial">Especial</option>
														<option value="discapacitado">Discapacitado</option>
														<option value="vip">VIP</option>
														<option value="regular">Regular</option>
													</select>
												</div>
												<div class="form-group">
													<label>RFC:</label>
													<input type="text" class="form-control" id="inputRFC" name="rfc" required>
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
										<button type="submit" class="btn btn-success">Guardar Cambios</button>
									</div>
								</form>
							</div>
						</div>
					</div>


					<!----edit-modal end--------->


					<!----delete-modal start--------->
					<div class="modal fade" tabindex="-1" id="eliminarPacienteModal" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Eliminar paciente</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Estas seguro de eliminar este registro? </p>
									<p class="text-warning"><small>esta accion no tiene ctrl - z,</small>
									</p>
								</div>

								<div class="modal-footer">
									<form id="eliminarPacienteForm" action="./php/controlador/eliminarPaciente.php" method="POST">
										<input type="text" id="inputIdPacienteDelete" name="id_paciente" value="" style="display: none;">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-success">Eliminar</button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!----delete-modal end--------->


					<!----add-modal-cita start--------->
					<div class="modal fade" tabindex="-1" id="agregarCitaModal" role="dialog">
						<div class="modal-dialog" style="min-width: fit-content" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Agregar Cita</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-6">
											<!-- ID Paciente -->
											<div class="form-group">
												<label>ID Paciente:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<!-- ID Personal -->
											<div class="form-group">
												<label>ID Personal:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<!-- Número de Sala -->
											<div class="form-group">
												<label>Número de Sala:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<!-- Fecha -->
											<div class="form-group">
												<label>Fecha:</label>
												<input type="date" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<!-- Hora -->
											<div class="form-group">
												<label>Hora:</label>
												<input type="time" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<!-- Motivo de la Cita -->
											<div class="form-group">
												<label>Motivo de la Cita:</label>
												<textarea class="form-control" required></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
									<button type="button" class="btn btn-success">Agregar</button>
								</div>
							</div>
						</div>
					</div>
					<!----add-modal end--------->

					<!-- Modal de Editar Cita -->
					<div class="modal fade" tabindex="-1" id="editarCitaModal" role="dialog">
						<div class="modal-dialog" style="min-width: fit-content" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Editar Cita</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label>ID:</label>
										<input type="text" class="form-control" value="ID_DE_LA_CITA" readonly>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>ID Paciente:</label>
												<input type="text" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Número de Sala:</label>
												<input type="text" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Fecha:</label>
												<input type="date" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>ID Personal:</label>
												<input type="text" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Hora:</label>
												<input type="time" class="form-control" required>
											</div>
											<div class="form-group">
												<label>Motivo de la Cita:</label>
												<textarea class="form-control" required></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
									<button type="button" class="btn btn-success">Guardar Cambios</button>
								</div>
							</div>
						</div>
					</div>


					<!----delete-modal start--------->
					<div class="modal fade" tabindex="-1" id="eliminarCitaModal" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Eliminar cita</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Estas seguro de eliminar este registro? </p>
									<p class="text-warning"><small>esta accion no tiene ctrl - z,</small>
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-success">Eliminar</button>
								</div>
							</div>
						</div>
					</div>

					<!----delete-modal end--------->

					<!-- Modal de Agregar Personal -->
					<div class="modal fade" tabindex="-1" id="agregarPersonalModal" role="dialog">
						<div class="modal-dialog" style="min-width: fit-content" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Agregar Personal</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="row">
										<div class="col-md-6">
											<!-- Nombre -->
											<div class="form-group">
												<label>Nombre:</label>
												<input type="text" class="form-control" required>
											</div>
											<!-- Apellido Materno -->
											<div class="form-group">
												<label>Apellido Materno:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<!-- Apellido Paterno -->
											<div class="form-group">
												<label>Apellido Paterno:</label>
												<input type="text" class="form-control" required>
											</div>
											<!-- Fecha de Nacimiento -->
											<div class="form-group">
												<label>Fecha de Nacimiento:</label>
												<input type="date" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<!-- Cargo -->
											<div class="form-group">
												<label>Cargo:</label>
												<input type="text" class="form-control" required>
											</div>
											<!-- Teléfono -->
											<div class="form-group">
												<label>Teléfono:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<!-- Correo -->
											<div class="form-group">
												<label>Correo:</label>
												<input type="email" class="form-control" required>
											</div>
											<!-- Domicilio -->
											<div class="form-group">
												<label>Domicilio:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
									</div>

									<!-- Clasificación -->
									<div class="form-group">
										<label>Clasificación:</label>
										<select class="form-control" required>
											<option value="DT">DT</option>
											<option value="ET">ET</option>
										</select>
									</div>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
									<button type="button" class="btn btn-success">Agregar</button>
								</div>
							</div>
						</div>
					</div>


					<!-- Modal de Editar Personal -->
					<div class="modal fade" tabindex="-1" id="editarPersonalModal" role="dialog">
						<div class="modal-dialog" style="min-width: fit-content" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Editar Personal</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label>ID:</label>
										<input type="text" class="form-control" value="ID_DEL_PERSONAL" readonly>
									</div>
									<div class="row">
										<div class="col-md-6">
											<!-- Nombre -->
											<div class="form-group">
												<label>Nombre:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<!-- Apellido Paterno -->
											<div class="form-group">
												<label>Apellido Paterno:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<!-- Apellido Materno -->
											<div class="form-group">
												<label>Apellido Materno:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<!-- Fecha de Nacimiento -->
											<div class="form-group">
												<label>Fecha de Nacimiento:</label>
												<input type="date" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<!-- Cargo -->
											<div class="form-group">
												<label>Cargo:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<!-- Teléfono -->
											<div class="form-group">
												<label>Teléfono:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<!-- Correo -->
											<div class="form-group">
												<label>Correo:</label>
												<input type="email" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<!-- Domicilio -->
											<div class="form-group">
												<label>Domicilio:</label>
												<input type="text" class="form-control" required>
											</div>
										</div>
									</div>
									<!-- Clasificación -->
									<div class="form-group">
										<label>Clasificación:</label>
										<select class="form-control" required>
											<option value="DT">DT</option>
											<option value="ET">ET</option>
										</select>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
									<button type="button" class="btn btn-success">Guardar Cambios</button>
								</div>
							</div>
						</div>
					</div>


					<!----delete-modal start--------->
					<div class="modal fade" tabindex="-1" id="eliminarPersonalModal" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Eliminar personal</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Estas seguro de eliminar este registro? </p>
									<p class="text-warning"><small>esta accion no tiene ctrl - z,</small>
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-success">Eliminar</button>
								</div>
							</div>
						</div>
					</div>

					<!----delete-modal end--------->


					<!-- Mensajes del toast -->
					<!-- Código de las tostadas -->



				</div>
			</div>
		</div>
	</div>
	<!------main-content-end----------->

	<?php
	// Verificar si hay un mensaje y mostrar iziToast según el tipo de mensaje
	if (isset($_GET['mensaje'])) {
		$tipoMensaje = $_GET['mensaje'];
		if ($tipoMensaje == 1) {
			echo '<script>
                    iziToast.success({
                        title: "Éxito",
                        message: "El paciente se agregó correctamente.",
                        position: "bottomRight"
                    });
                  </script>';
		} elseif ($tipoMensaje == 0) {
			echo '<script>
                    iziToast.error({
                        title: "Error",
                        message: "No se pudo agregar el paciente.",
                        position: "bottomRight"
                    });
                  </script>';
		} elseif ($tipoMensaje == 3) {
			echo '<script>
                    iziToast.success({
                        title: "Éxito",
                        message: "El paciente se modificó correctamente.",
                        position: "bottomRight"
                    });
                  </script>';
		} elseif ($tipoMensaje == 4) {
			echo '<script>
                    iziToast.error({
                        title: "Error",
                        message: "No se pudo modificar el paciente.",
                        position: "bottomRight"
                    });
                  </script>';
		} elseif ($tipoMensaje == 5) {
			echo '<script>
                    iziToast.success({
                        title: "Éxito",
                        message: "El paciente se eliminó correctamente.",
                        position: "bottomRight"
                    });
                  </script>';
		} elseif ($tipoMensaje == 6) {
			echo '<script>
                    iziToast.error({
                        title: "Error",
                        message: "No se pudo eliminar el paciente.",
                        position: "bottomRight"
                    });
                  </script>';
		}
	}
	?>




	<!-------complete html----------->



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery-3.3.1.min.js"></script>


	<script type="text/javascript">
		function openEditModalPaciente(event) {
			event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
			var idPaciente = event.target.getAttribute('data-id-paciente');
			var nombre = event.target.getAttribute('data-nombre');
			var apellidoPaterno = event.target.getAttribute('data-apellido-paterno');
			var apellidoMaterno = event.target.getAttribute('data-apellido-materno');
			var fechaNacimiento = event.target.getAttribute('data-fecha-nacimiento');
			var tipoSangre = event.target.getAttribute('data-tipo-sangre');
			var telefono = event.target.getAttribute('data-telefono');
			var correo = event.target.getAttribute('data-correo');
			var tipoPaciente = event.target.getAttribute('data-tipo-paciente');
			var rfc = event.target.getAttribute('data-rfc');

			console.log(tipoPaciente)

			document.getElementById('inputID').value = idPaciente;
			document.getElementById('inputNombre').value = nombre;
			document.getElementById('inputApellidoPaterno').value = apellidoPaterno;
			document.getElementById('inputApellidoMaterno').value = apellidoMaterno;
			document.getElementById('inputFechaNacimiento').value = fechaNacimiento;
			document.getElementById('inputTipoSangre').value = tipoSangre;
			document.getElementById('inputTelefono').value = telefono;
			document.getElementById('inputCorreo').value = correo;
			document.getElementById('inputTipoPaciente').value = tipoPaciente;
			document.getElementById('inputRFC').value = rfc;

			$('#editarPacienteModal').modal('show');
		}

		function openDeleteModalPaciente(event) {
			event.preventDefault();
			var idPaciente = event.target.getAttribute('data-id-paciente');
			document.getElementById('inputIdPacienteDelete').value = idPaciente;
			$('#eliminarPacienteModal').modal('show');
		}
	</script>

	<script src="./assets/js/crud_load.js"></script>


	<script>
		// Obtén el formulario y el contenedor de resultados
		const searchForm = document.getElementById('searchForm');
		const resultadoBusqueda = document.getElementById('resultadoBusqueda');

		// Maneja el evento de envío del formulario
		searchForm.addEventListener('submit', function(event) {
			event.preventDefault(); // Evita que el formulario se envíe de forma tradicional

			// Obtiene el valor del input de búsqueda
			const searchTerm = document.getElementById('searchInput').value;

			// Modifica la URL sin redirigir y recarga la página
			const newUrl = `?q=${searchTerm}`;
			history.pushState(null, null, newUrl);
			location.href = newUrl;
		});
	</script>

	<script>
		function verTodos() {
			// Limpiar la URL y recargar la página
			window.location.href = window.location.pathname;
		}
	</script>


</body>

</html>