<?php

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once('usuarios-dao.php');
require_once('usuarios-validation.php');

$id = (int) $_GET['id'];

destroy($id);

success("Usuário deletado com sucesso!");

header("Location: http://localhost/ProjetoFinal/usuarios/");



