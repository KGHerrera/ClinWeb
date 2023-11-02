<div class="container sticky-top bg-dark">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none fw-bold"
                style="color:#5ec4fb !important">
                WEBCLIN
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
            <li><a href="#" class="nav-link px-2 text-muted">Publicaciones</a></li>
            <li><a href="#" class="nav-link px-2 text-muted">Acerca de</a></li>
        </ul>

        <div>
            <?php
            session_start();
            if (isset($_SESSION['usuario'])) {
                echo '<a href="crud.php" type="button" class="btn btn-outline-warning me-2">Dashboard</a>';
                echo '<a href="php/controlador/cerrarSesion.php" type="button" class="btn btn-outline-light">Cerrar sesión</a>';
            } else {
                echo '<a href="login.php" type="button" class="btn btn-outline-warning me-2">Iniciar sesión</a>';
                echo '<a href="registro.php" type="button" class="btn btn-outline-light">Registrarse</a>';
            }
            ?>
        </div>
    </header>
</div>