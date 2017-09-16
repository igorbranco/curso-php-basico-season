<?php

session_start();

require_once('../usuarios/usuarios-dao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = login($email, $senha);

$_SESSION['auth'] = $usuario;

header("Location: http://localhost/ProjetoFinal/");