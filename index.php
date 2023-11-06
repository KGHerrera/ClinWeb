<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClinWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .icon {
            cursor: pointer;
        }

        body {
            background-color: #0e1318;
        }

        .main {
            background-color: #0e1318;
            padding-top: 32px;
            padding-bottom: 1px;
            border-top: 1px solid rgb(67, 77, 93);
        }

        .separator-vertical {
            height: 30px;
            width: 1px;
            background-color: #404957;
            margin: 0 10px;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-image: url('assets/img/back.jpg');
            background-size: cover;
            background-position: center;
            z-index: -1;

            filter: brightness(0.1);
        }

        .navbar {
            background-color: #171e27;
        }

        .text-info {
            color: #5ec4fb !important;
        }

        #navbarNav ul li a {
            color: #5ec4fb;
        }

        #navbarNav ul li a:hover {
            color: #f0f6fe;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .card-body {
            background-color: #171e27 !important;
        }
    </style>

</head>

<body>


    <?php include 'header.php' ?>




    <!-- HEADER -->
    <header class="header">
    </header>

    <!-- HEADER CONTENT -->
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1>Bienvenido a nuestra clínica de salud,<br> donde ofrecemos servicios médicos de alta calidad</h1>
            <h2 class="text-info">- Su bienestar es nuestra prioridad -</h2>
            <div class="buttons mt-3">
                <button class="btn btn-light">Servicios <i class="fas fa-heartbeat me-2"></i></button>
                <button class="btn btn-light">Contáctenos <i class="fas fa-stethoscope me-2"></i></button>
            </div>
        </div>
    </div>

    <!-- MAIN -->
    <div class="main">
        <!-- SERVICIOS -->
        <div class="container text-center mt-5 mb-5">

            <h2 class="my-2 text-info">- NUESTROS SERVICIOS -</h2>

            <p>
                Explore las posibilidades con tratamientos personalizados, consultas especializadas, tecnología avanzada
                y
                un<br>
                equipo médico dedicado.
            </p>

            <div class="row mt-5 p-4">
                <div class="col-md-4 col-12 mb-4 border-0">
                    <div class="card h-100 d-flex flex-column rounded-0 border-0">
                        <div class="card-body text-start">
                            <h5><i class="fas fa-stethoscope"></i> <span class="text-info ms-2">CONSULTAS
                                    ESPECIALIZADAS</span></h5>
                            <p class="card-text flex-grow-1">Nuestros especialistas están disponibles para consultas
                                detalladas,
                                diagnósticos precisos y planes de tratamiento personalizados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="card h-100 d-flex flex-column rounded-0 border-0">
                        <div class="card-body text-start">
                            <h5><i class="fas fa-heartbeat"></i> <span class="text-info ms-2">TECNOLOGÍA AVANZADA</span>
                            </h5>
                            <p class="card-text flex-grow-1">Contamos con equipos médicos de última generación para
                                asegurar
                                diagnósticos precisos y tratamientos efectivos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="card h-100 d-flex flex-column rounded-0 border-0">
                        <div class="card-body text-start">
                            <h5><i class="fas fa-user-md"></i> <span class="text-info ms-2">CUIDADO PERSONALIZADO</span>
                            </h5>
                            <p class="card-text flex-grow-1">Nuestro equipo médico se dedica a proporcionar atención
                                personalizada y
                                comprensiva a cada paciente, adaptando los tratamientos según sus necesidades.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PLATAFORMAS -->
            <div class="container text-center mt-5">
                <h5 class="mb-4">NUESTRAS UBICACIONES</h5>
                <div class="platform-icons">
                    <i class="fas fa-hospital fa-xl mx-3"></i>
                    <i class="fas fa-heartbeat fa-xl mx-3"></i>
                    <i class="fas fa-stethoscope fa-xl mx-3"></i>
                    <i class="fas fa-heartbeat fa-xl mx-3"></i>
                    <i class="fas fa-hospital fa-xl mx-3"></i>
                </div>
            </div>

            <!-- CONTENIDO -->
            <div class="container my-5 border-bottom border-top">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div>
                            <h2 class="mb-4 mt-4 text-info text-start">EXPERIENCIA DE CALIDAD</h2>
                            <p class="text-start">Nuestros servicios están diseñados para proporcionar una experiencia de atención médica
                                de calidad. Nos
                                esforzamos por ofrecer atención de primera clase en un entorno acogedor y cuidadoso.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="assets/img/back.jpg" alt="Descripción de la imagen" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- VIDEOS -->
            <div class="container text-center my-5 w-75">
                <h2 class="my-4 text-info">Conocenos</h2>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/ID_DEL_VIDEO"></iframe>
                </div>
            </div>

        </div>


        <!-- PIE DE PÁGINA -->
        <div class="container pt-3 mb-5">
            <footer class="d-flex flex-wrap justify-content-between align-items-center pt-3 mt-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <span class="mb-3 mb-md-0 text-body-secondary">© </span>
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        Clínica de Salud
                    </a>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="text-body-secondary" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-body-secondary" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-body-secondary" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </footer>
        </div>
    </div>







</body>

</html>