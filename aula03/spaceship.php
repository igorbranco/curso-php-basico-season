<?php

$a = 1;
$b = 2;

$resultado = ($a <=> $b);
echo "Spaceship MENOR < $resultado <br>";

$a = '2';
$b = 2;

$resultado = ($a <=> $b);
echo "Spaceship IGUAL == $resultado <BR>";

$a = 3;
$b = 2;

$resultado = ($a <=> $b);
echo "Spaceship MAIOR > $resultado";