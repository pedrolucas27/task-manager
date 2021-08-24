<?php
require_once '../dominio/Usuario.php';
require_once '../dominio/Quadro.php';
require_once '../dao/QuadroDAO.php';

$q = new Quadro();
$q->setTitulo($_POST["nome"]);
$cor = isset($_POST["cor"])?$_POST["cor"]:"#FFFFFF";
$q->setColor($cor);

session_start();
$u = null;
if (isset($_SESSION["usuario"])) {
    $u = $_SESSION["usuario"];
    $q->setEmail_usuario($u->getEmail());
}

$r = QuadroDAO::inserir($q);
header("Location: ../task.php");

