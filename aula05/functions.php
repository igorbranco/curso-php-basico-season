<?php

function validacaoTamanhoNomeUtf8($nome) 
{
    if(strlen(utf8_decode($nome)) <= 10 ){
        $_SESSION['errors'][] =  "O nome $nome tem que ser maior que 10 ";
    }

}

function validadoComSucesso($mensagem)
{
    if (!isset($_SESSION['errors'])){
            $_SESSION['success'] = $mensagem;
    }
}