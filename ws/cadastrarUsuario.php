<?php

require_once '../dominio/Usuario.php';
require_once '../dao/UsuarioDAO.php';

$usuario = new Usuario();
$usuario->setNome($_GET["nome"]);
$usuario->setEmail($_GET["email"]);
$usuario->setSenha($_GET["senha"]);

$resultado = UsuarioDAO::inserir($usuario);
if ($resultado == 1) {
    header("Location: ../index.php?id=$resultado");
} else {
    header("Location: ../index.php?id=0");
}
            
    

