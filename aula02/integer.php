<?php

// Conversão para Booolean

$true = true;

$integer = (int) $true;
$integer = (integer) $true;
$integer = intval($integer);

echo "O valor boolean onvertido é $integer <br>";
$integer = (int) false;
echo "O valor boolean convertido é $integer <br><br>";

// Conversão de Float

$float = 5.5;
$integer = (int) $float;

echo"O valor float convertido é $integer <br><br>";

// Conversao de string para integer
$string = '1'; // resultado = 1
$string = '2.11'; // resultado = 2
$string = 'texto'; // resultado = 0
$string = 'texto123'; // resultado = 0
$string = '123texto'; // resultado = 123


$integer = (int) $string;
echo "O valor string convertido é $integer <br><br>";

$soma =  12 + 'teste'; // resultado = 12
$soma =  12 + '1teste'; // resultado = 13
echo "O valor da soma é $soma <br><br>";
