<?php

$nome = ;
$idade = ;

if(!isset($_GET['nome'])) {
    $nome = $_GET['nome'];
} else {
    $nome = '';
}
if(!isset($_GET['idade'])) {
    $idade = (int) $_GET['idade'];
} else {
    $idade = 0;
}

$idade = isset($_GET['idade']) ? $_GET['idade']
    
// $resultado = ($idade >= 18) && ($idade <= 65) ? "É obrigado a votar" : "Não é obrigado a votar";

if (($idade >= 18) && ($idade <= 65))
{
    echo "É obrigado a votar";
}
else
    {
    if(($idade >= 16 && $idade < 18) || ($idade > 65)) {
        echo "O voto é opcional";
    } else {
    echo "Não é obrigado a votar";
}
    }