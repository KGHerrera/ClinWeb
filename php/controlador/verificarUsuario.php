<?php
include '../modelo/Usuario.php';
include '../conexion/ConexionUsuarios.php';
include '../controlador/UsuarioDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if (empty($usuario) || empty($password)) {
        header('Location: ../../login.php?mensaje=0');
        exit();
    }

    $passwordEncriptada = sha1($password);
    $usuarioEncriptado = sha1($usuario);

    $usuarioDAO = new UsuarioDAO();
    $usuarioExistente = $usuarioDAO->verificarCredenciales($usuarioEncriptado, $passwordEncriptada);

    if ($usuarioExistente) {
        session_start();
        $_SESSION['usuario'] = $usuario; 
        header('Location: ../../crud.php'); 
        exit();
    } else {
        header('Location: ../../login.php?mensaje=1');
        exit();
    }
} else {
    header('Location: ../../login.php?mensaje=3');
    exit();
}
?>