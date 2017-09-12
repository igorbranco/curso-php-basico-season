<?php

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

function validarNome(string $nome)
{
    if(strlen(utf8_decode($nome)) < 5) {
        $_SESSION['errors'][] = "O Nome $nome deve possuir mais que 5 caracteres";
    }
}

function existeErro() : bool
{
    return isset($_SESSION['errors']);
}

function success(string $nome)
{
    $_SESSION['success'] = $nome;
}