<?php
session_start();
if (isset($_SESSION['usuario'])) {
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


  <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->


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
                    <h4 class="mt-1 mb-4 pb-1">Registro en <a href="index.php"> WebClin</a></h4>
                  </div>

                  <form method="POST" action="php/controlador/agregarUsuario.php">

                    <div class="form-outline mb-4">
                      <label class="form-label" for="nombre">Nombre Completo</label>
                      <input type="text" id="nombre" name="nombre" class="form-control"
                        placeholder="Ingrese su nombre completo" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="usuario">Usuario (Correo electronico)</label>
                      <input type="email" id="usuario" name="usuario" class="form-control"
                        placeholder="Ingrese su correo electronico" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Contraseña</label>
                      <input type="password" id="password" name="password" class="form-control"
                        placeholder="Ingrese su contraseña" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="confirmPassword">Confirmar Contraseña</label>
                      <input type="password" id="confirmar_password" name="confirmar_password" class="form-control"
                        placeholder="Confirme su contraseña" />
                    </div>

                    <!-- <div class="g-recaptcha" data-sitekey="6LdO0gspAAAAAGgU_G8iq0fE1oEOciLSlsXRxaH8"></div> -->

                    <div class="text-center pt-1 mb-2 pb-1 mt-4">
                      <button class="btn btn-light btn-block fa-lg mb-3 col-12" type="submit">REGISTRARSE</button>
                    </div>

                    <div class="d-flex align-items-center justify-content-center">
                      <p class="mb-0 me-2">¿Ya tienes una cuenta?</p>
                      <a class="text-muted" href="login.php">Iniciar Sesión</a>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Somos más que una clínica</h4>
                  <p class="small mb-0">
                    Nuestra Clínica Rural "Bienestar" es un
                    refugio de atención médica dedicado a servir a las comunidades rurales con un
                    enfoque
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
    $backgroundColor = ""; // Variable para el color de fondo
  
    if ($tipoMensaje == 3) {
      $titulo = "Error";
      $mensaje = "Usuario ya registrado.";
      $backgroundColor = "#dc3545";
    } elseif ($tipoMensaje == 0) {
      $titulo = "Error";
      $mensaje = "Por favor, complete todos los campos.";
      $backgroundColor = "#dc3545";
    } elseif ($tipoMensaje == 1) {
      $titulo = "Error";
      $mensaje = "Las contraseñas no coinciden.";
      $backgroundColor = "#dc3545";
    } elseif ($tipoMensaje == 4) {
      $titulo = "Error";
      $mensaje = "Ocurrió un error al procesar la solicitud.";
      $backgroundColor = "#dc3545";
    }

    echo '<script>
                iziToast.show({

                    theme: "dark",
                    title: "' . $titulo . '",
                    message: "' . $mensaje . '",
                    position: "bottomRight",
                    backgroundColor: "' . $backgroundColor . '",
                });
              </script>';
  }
  ?>


</body>

</html>