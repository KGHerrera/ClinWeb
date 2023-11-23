<nav class="navbar navbar-expand-lg navbar-dark shadow-lg fixed-top">
	<div class="container-fluid mx-5">
		<a class="navbar-brand" href="#">
			<i class="fas fa-hospital"></i> Clínica de <span class="text-info">Salud</span>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Servicios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Preguntas Frecuentes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contacto</a>
				</li>
			</ul>
			<div class="d-flex align-items-center">
				<div class="separator-vertical"></div>
				<?php
				if (isset($_SESSION['usuario'])) {
					echo '<a href="crud" type="button" class="btn btn-primary me-2">Dashboard</a>';
					echo '<a href="php/controlador/cerrarSesion.php" type="button" class="btn btn-light">Cerrar sesión</a>';
				} else {
					echo '<a href="login" type="button" class="btn btn-primary me-2">Iniciar sesión</a>';
					echo '<a href="registro" type="button" class="btn btn-light">Registrarse</a>';
				}
				?>
			</div>
		</div>
	</div>
</nav>