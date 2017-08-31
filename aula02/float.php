<?php

// Conversao de integer

$integer = 10;

$float = (float) $integer;
$float = floatval($integer);
echo "A conversão de inteira para float é $float <br>";
    
// conversao de boolean
$boolean = false;
$float = (float) $boolean; 
echo "A conversão de boolean para float é $float <br>";

// conversao de string
$string = 'texto';
$string = '1.2texto';
$string = '1.3e4'; // 1.3 * (10**4)

$float = (float) $string;
echo "A conversão de string para float é $float <br>";