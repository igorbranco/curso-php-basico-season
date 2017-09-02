<?php

$n1 = (int) $_GET['n1'];
$n2 = (int) $_GET['n2'];

$o = $_GET['o'];

$resultado = ($o == 's') ? ($n1 + $n2) : ($n1 * $n2);
echo "A operação entre $n1 e $n2 é $resultado";
