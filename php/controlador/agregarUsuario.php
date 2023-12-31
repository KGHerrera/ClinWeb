<?php
include '../modelo/Usuario.php';
include '../conexion/ConexionUsuarios.php';
include '../controlador/UsuarioDAO.php';


$secretKey = "6Le8ihopAAAAAGFIT4xu5DWE_6X12GoMK7TVEM_a";
$recaptchaResponse = $_POST['g-recaptcha-response'];

$recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}";
$recaptchaResult = json_decode(file_get_contents($recaptchaUrl));

if (!$recaptchaResult->success) {
    // El reCAPTCHA no se verificó correctamente
    header('Location: ../../registro.php?mensaje=5');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $confirmarPassword = $_POST['confirmar_password'];
    
    

    if (empty($nombre) || empty($usuario) || empty($password) || empty($confirmarPassword)) {
        header('Location: ../../registro.php?mensaje=0');
        exit();
    }

    if ($password !== $confirmarPassword) {
        header('Location: ../../registro.php?mensaje=1');
        exit();
    }

    $passwordEncriptada = sha1($password);
    $usuarioEncriptado = sha1($usuario);

    $ObjUsuario = new Usuario(0, $nombre, $usuarioEncriptado, $passwordEncriptada);
    $usuarioDAO = new UsuarioDAO();
    $resultado = $usuarioDAO->altaUsuario($ObjUsuario);

    if ($resultado) {
        header('Location: ../../login.php?mensaje=2'); 
        exit();
    } else {
        header('Location: ../../registro.php?mensaje=3');
        exit();
    }
} else {
    header('Location: ../../registro.php?mensaje=4');
    exit();
}
?>
