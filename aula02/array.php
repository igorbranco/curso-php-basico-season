<?php

// $array = array(0 => 1, 1 => 10);
$array = array();
$array[] = 1;
$array[] = 10;

echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

echo "A posição 0 do array é " . $array[0] . "<br>";
echo "A posição 0 do array é " . $array[1] . "<br>";

// atribuição de array na inicializacao

$array = array(1, 10);
$array[5] = 5;

echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

echo "A posição 0 do array é " . $array[0] . "<br>";
echo "A posição 1 do array é " . $array[1] . "<br>";
echo "A posição 5  do array é " . $array[5] . "<br><br>";

// inicializacao do array a partir do indice 6


$array = array();
$array[6] = 6;

echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

// echo "A posição 0 do array é " . $array[0] . "<br>";
// echo "A posição 1 do array é " . $array[1] . "<br>";
// echo "A posição 5  do array é " . $array[5] . "<br>";

// dicionarios 
$array = array('Livro'=>4, 'Autor'=>'Igor');
echo $array["Autor"];

