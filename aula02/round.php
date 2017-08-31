<?php

$float = round(1.3); // 1
$float = round(1.3, 1); // 1.3
$float = round(1.333333, 1); // 1.3
$float = round(1.353333, 1); // 1.4
$float = round(1.333333, 2); // 1.33
$float = round(1.333333, 2, PHP_ROUND_HALF_DOWN); // 1.33
$float = round(1.333333, 2, PHP_ROUND_HALF_UP); // 1.34
echo $float;