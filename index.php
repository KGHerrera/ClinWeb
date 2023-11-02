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

</head>

<body>


    <?php include 'header.php' ?>


    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold text-body-emphasis">Clinica Bienestar</h1>
        <div class="col-lg-6 mx-auto">
            <p class="mb-4">En Nuestra Clínica Rural "Bienestar", nos dedicamos a ofrecer atención médica cálida y
                personalizada a las comunidades rurales. Nuestro equipo de profesionales altamente capacitados se
                esfuerza por brindar servicios de calidad para mejorar la salud y el bienestar de nuestros
                pacientes.</p>

        </div>
        <div class="overflow-hidden" style="max-height: 80vh;">
            <div class="container">
                <img src="assets/img/back.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
                    loading="lazy">
            </div>
        </div>


    </div>


    <div class="container py-5 px-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Salud</strong>
                        <h3 class="mb-0">Artículo destacado</h3>
                        <div class="mb-1 text-body-secondary">Nov 12</div>
                        <p class="card-text mb-auto">Este es un artículo amplio con texto de soporte debajo como una
                            introducción natural a contenido adicional.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Seguir leyendo
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em"></text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Bienestar</strong>
                        <h3 class="mb-0">Título del artículo</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">Este es un artículo amplio con texto de soporte debajo como una introducción
                            natural a contenido adicional.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Seguir leyendo
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em"></text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="assets/img/back.jpg" class="d-block mx-lg-auto img-fluid" alt="Clinica Image" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Bienvenido a Nuestra Clínica</h1>
                <p>En Nuestra Clínica Rural "Bienestar", nos dedicamos a ofrecer atención médica cálida y
                    personalizada a las comunidades rurales. Nuestro equipo de profesionales altamente capacitados se
                    esfuerza por brindar servicios de calidad para mejorar la salud y el bienestar de nuestros
                    pacientes.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-outline-warning px-4 me-md-2">Conoce Más</button>
                    <button type="button" class="btn btn-outline-secondary px-4">Contáctanos</button>
                </div>
            </div>
        </div>
    </div>



    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2">Nuestros Servicios</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">Consulta General</h3>
                    <p>Ofrecemos servicios de consulta general para atender diversas necesidades de salud en todas las
                        etapas de la vida. Nuestros médicos están dedicados a proporcionar atención compasiva y
                        personalizada.</p>
                    <a href="#" class="text-muted">
                        Saber más
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">Dentista</h3>
                    <p>Nuestros dentistas altamente capacitados ofrecen servicios dentales de calidad, desde limpiezas
                        regulares hasta procedimientos más complejos. Nos esforzamos por mantener tu sonrisa sana y
                        hermosa.</p>
                    <a href="#" class="text-muted">
                        Saber más
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">Laboratorio</h3>
                    <p>Nuestro laboratorio cuenta con tecnología avanzada para análisis precisos y confiables.
                        Trabajamos diligentemente para proporcionar resultados de laboratorio rápidos y precisos para
                        ayudar en tu diagnóstico y tratamiento.</p>
                    <a href="#" class="text-muted">
                        Saber más
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5">

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal text-body-emphasis">Tarifas</h1>
            <p class="fs-5 text-body-secondary">Crea rápidamente una tabla de precios efectiva para tus potenciales
                clientes
                con este ejemplo de Bootstrap. Está construido con componentes y utilidades predeterminados de Bootstrap
                con
                poca personalización.</p>
        </div>

        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Básico</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Gratis<small
                                class="text-body-secondary fw-light">/mes</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Consulta general</li>
                            <li>2 consultas</li>
                            <li>Soporte por correo electrónico</li>
                            <li>Acceso al centro de ayuda</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-light">Registrarse gratis</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Premium</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small
                                class="text-body-secondary fw-light">/mes</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Consulta especializada</li>
                            <li>10 consultas</li>
                            <li>Soporte prioritario por correo electrónico</li>
                            <li>Acceso al centro de ayuda</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-light">Empezar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Corporativo</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29<small
                                class="text-body-secondary fw-light">/mes</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Consulta VIP</li>
                            <li>15 consultas</li>
                            <li>Soporte telefónico y por correo electrónico</li>
                            <li>Acceso al centro de ayuda</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-light">Contáctenos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container mt-5 border-top">
        <footer class="py-5 px-4">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Sección</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Inicio</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Características</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Precios</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Preguntas
                                frecuentes</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Acerca de</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Sección</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Inicio</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Características</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Precios</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Preguntas
                                frecuentes</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Acerca de</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Sección</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Inicio</a></li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Características</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Precios</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Preguntas
                                frecuentes</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Acerca de</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Suscríbete a nuestro boletín</h5>
                        <p>Resumen mensual de las novedades y emocionantes noticias de nosotros.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Correo electrónico</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Correo electrónico">
                            <button class="btn btn-primary" type="button">Suscribirse</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4">
                <p>© 2023 Compañía, Inc. Todos los derechos reservados.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>


</body>

</html>