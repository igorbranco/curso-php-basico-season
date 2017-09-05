<?php

$nome = $_GET['nome'] ?? '';
// $nome = isset($_GET['nome']) ? $_GET['nome'] : '';
session_start();


if($nome != "Igor"){
    $_SESSION['errors'][] =  "O $nome esta errado ";  
}
if (!isset($_SESSION['errors'])) {
    $_SESSION['success'] = "Validação realizada com sucesso!";
}

 header("location: http://localhost/aula04/");