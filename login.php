<?php
session_start();
if(isset($_SESSION['usuario'])) {
    header("Location: index.php"); 
    exit();
}
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WebClin</title>
    <meta name="description" content="Knight is a beautiful Bootstrap 4 template for product landing pages." />

    <!-- Bootstrap CSS / Color Scheme -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/form.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">


</head>

<body style="height: 100vh; background-color: #15171a;">

    <section class="h-100 gradient-form">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">

                                        <h4 class="mt-1 mb-5 pb-1">Bienvenido a <a href="index.php"> WebClin</a></h4>
                                    </div>

                                    <form action="php/controlador/verificarUsuario.php" method="POST">


                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Usuario (Correo
                                                electronico)</label>
                                            <input type="email" id="form2Example11" name="usuario" class="form-control"
                                                placeholder="Ingresa tu correo electronico" />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                            <input type="password" placeholder="contraseña" name="password" id="form2Example22"
                                                class="form-control" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1 mt-5">
                                            <button class="btn btn-primary btn-block fa-lg mb-3 col-12" href="crud.php"
                                                type="submit">INICIAR SESION</button>

                                            <a class="text-muted" href="restablecerPassword.php">Olvidaste tu
                                                contraseña?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">No tienes una cuenta?</p>
                                            <a class="text-muted" style="cursor:pointer" href="registro.php">crear
                                                cuenta</a>
                                        </div>



                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Somos mas que una clinica</h4>
                                    <p class="small mb-0">
                                        Nuestra Clínica Rural "Bienestar" es un
                                        refugio de
                                        atención médica dedicado a servir a las comunidades rurales con un enfoque
                                        cálido y personalizado.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (isset($_GET['mensaje'])) {
        $tipoMensaje = $_GET['mensaje'];
        $titulo = "";
        $mensaje = "";
        $backgroundColor = "";
    
        if ($tipoMensaje == 2) {
            $titulo = "Éxito";
            $mensaje = "Usuario registrado correctamente. INICIA SESION";
            $backgroundColor = "#1641a6";
        } elseif ($tipoMensaje == 1) {
            $titulo = "Error";
            $mensaje = "Usuario o contraseña incorrectos.";
            $backgroundColor = "#dc3545";
        } elseif ($tipoMensaje == 3) {
            $titulo = "Error";
            $mensaje = "Durante el método POST.";
            $backgroundColor = "#dc3545";
        } elseif ($tipoMensaje == 0) {
            $titulo = "Error";
            $mensaje = "Por favor, complete todos los campos.";
            $backgroundColor = "#dc3545";
        }
        

        echo '<script>
                iziToast.show({
                    title: "' . $titulo . '",
                    message: "' . $mensaje . '",
                    theme: "dark",
                    position: "bottomRight",
                    closeOnClick: true,
                    close: true,
                    backgroundColor:"'.$backgroundColor.'",
                });
              </script>';
    }
    ?>

</body>

</html>