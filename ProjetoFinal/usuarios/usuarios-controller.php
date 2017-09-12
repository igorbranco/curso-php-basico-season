<?php

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once('usuarios-dao.php');
require_once('usuarios-validation.php');


$usuario = $_POST['usuario'] ?? array();
$id = (int) ($_GET['id'] ?? 0);
$action = $_GET['action'];

if($action == 'store') {
    validarNome($usuario['nome']);

if(existeErro()) {
   header("location: http://localhost/ProjetoFinal/usuarios/criar-form.php");

} else {
    store($usuario);
    success("O usuário " . $usuario['nome']. " foi cadastrado com sucesso ");
    header("location: http://localhost/ProjetoFinal/usuarios/");
}
} elseif ($action == 'destroy') {
    destroy($id);

    success("Usuário deletado com sucesso!");

    header("Location: http://localhost/ProjetoFinal/usuarios/");
}