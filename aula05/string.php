<?php
session_start();

require_once('functions.php');
$nome = $_POST['nome'] ?? '';
$linguagem = $_POST['linguagem'] ?? '';
$conhecimento = $_POST['conhecimento'] ?? false;
$php = $_POST['php'] ?? array();
$endereco = $_POST['endereco'] ?? array();

echo '<pre>';
print_r($php);
echo '</pre><br>';

// $nome = isset($_GET['nome']) ? $_GET['nome'] : '';

// var_dump($linguagem);
// var_dump($conhecimento);
var_dump($php);
exit();


validacaoTamanhoNomeUtf8($nome);

validadoComSucesso("Validação realizada com sucesso!");

 header("location: http://localhost/aula05/");