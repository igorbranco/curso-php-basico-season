<?php

$a = 1;
$b = 2;

$resultado = ($a > $b); // false

var_dump($resultado);
echo '<br><br>';

$a = 1;
$b = '1';

$resultado = ($a == $b);
echo "O valor A é igual ao B" . "<br>";
var_dump($resultado);
echo "<br><br>";

$a = 1;
$b = '1';

$resultado = ($a === $b);
echo "O valor A não é idêntico ao B" . "<br>";
var_dump($resultado);

$a = 1;
$b = '1';
echo "<br><br>";

$resultado = ($a != $b);
echo "O valor A não é diferente ao B" . "<br>";
var_dump($resultado);

$a = 1;
$b = '1';
echo "<br><br>";

$resultado = ($a !== $b);
echo "O valor A é igual mas  não é identico ao B" . "<br>";
var_dump($resultado);
echo "<br><br>";

