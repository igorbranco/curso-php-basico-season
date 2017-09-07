<?php

$numeros = array();
$numeros[0] = 2;
$numeros[3] = 4;
$numeros[4] = 5;

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';


$numeros = array();
$numeros[] = 2;
$numeros[] = 2;

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$numeros = array(2, 4, 5);

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$numeros = array(
    0 => 2,
    1 => 4,
    2 => 5
);

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$valores[0] = 3;

echo '<pre>';
print_r($valores);
echo '</pre>';
echo '<br><br>';

$usuario = array(
    'nome' => 'Igor',
    'idade' => 30,
    'sobrenome' => 'Branco'
);

$nome = $usuario['nome'];

echo $nome;

echo '<pre>';
print_r($usuario);
echo '</pre>';
echo '<br><br>';

$numeros = array(
    1,
    3,
    'nome' => 'Igor',
);

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$databaseConfig = include('config.php');
echo '<pre>';
print_r($databaseConfig);
echo '</pre>';
echo '<br><br>';

$matriz =  array(
    //
    array(5, 7, 1), // linha 0
    array(8, 2, 3), // linha 1
    array(1, 2, 3), // linha 2
    //    0  1  2
);

// echo $matriz [1][0];
$matriz[0][1] = 11;

echo '<pre>';
print_r($matriz);
echo '</pre>';
echo '<br><br>';

$linguagens = array("PHP", "Java", "C#");
var_dump(array_key_exists(0, $linguagens));
echo '<br><br>';

$usuario = array(
    'nome' => 'Igor',
    'sobrenome' => 'Branco',
    'idade' => 75
);
$usuario['altura'] = 1.70;
var_dump(array_key_exists('altura', $usuario));
echo '<br><br>';

// unset

$usuario = array(
    'nome' => 'Igor',
    'sobrenome' => 'Branco',
    'idade' => 75
);

unset($usuario['idade']);

var_dump(array_key_exists('idade', $usuario));
echo '<br><br>';

// count

$usuario = array(
    'nome' => 'Igor',
    'sobrenome' => 'Branco',
    'idade' => 75
);
// var_dump(count($usuario));
// echo '<br><br>';

// array search

$usuario = array(
    'nome' => 'Igor',
    'sobrenome' => 'Branco',
    'idade' => 75
);

var_dump(array_search("Igor", $usuario));

$numeros = array(1,2,5,7);
// var_dump(array_search(5, $numeros));
// 
// in_array
$numeros = array(1,2,5,7);
var_dump(in_array(11, $numeros));