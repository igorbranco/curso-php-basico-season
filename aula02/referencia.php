<?php

// atribuicao de variavel padrao
$a = 10;
$b = $a;

$b = 5;
echo "A variável a é $a <br>";
echo "A variável b é $b <br><br>";

// atribuicao de variavel por referencia

$a = 10;
$b = &$a;
$b = 5;

echo "<b>Atribuição por referência</b><br><br>";
echo "A variável a é $a <br>";
echo "A variável b é $b <br><br>";