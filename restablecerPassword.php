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
                    <h4 class="mt-1 mb-5 pb-1">Recuperar Contraseña de <a href="index">
                        WebClin</a></h4>
                  </div>

                  <form>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="email">Correo Electrónico</label>
                      <input type="email" id="email" class="form-control" placeholder="Ingrese su correo electrónico"
                        required />
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1 mt-5">
                      <button class="btn btn-light btn-block fa-lg mb-3 col-12" type="submit">RECUPERAR</button>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">¿Recuerdas tu contraseña?</p>
                      <a class="text-muted" href="login">Iniciar Sesión</a>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Bienvenido a WebClin</h4>
                  <p class="small mb-0">
                    En WebClin, nos preocupamos por la seguridad de su cuenta. Si olvidó su
                    contraseña,
                    proporciónenos su correo electrónico y le enviaremos un enlace seguro para
                    recuperar
                    su cuenta.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>