<?php
require_once '../dao/UsuarioDAO.php';
$usuario = UsuarioDAO::buscar($_POST["email"], $_POST["senha"]);

if(is_object($usuario)){
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: ../task.php");
}
print_r($usuario);

