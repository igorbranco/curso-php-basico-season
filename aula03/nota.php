<?php

$nota = $_GET['nota'] ?? 0;

switch($nota){
    case 10:
        echo 'S';
        break;
    case 9:
        echo 'A';
        break;
    case 8:
        echo 'B';
        break;
    default:
        echo 'F';
        break;
}


//if($nota == 10) {
//    echo 'S';
//} elseif ($nota == 9) {
//    echo 'A';
//} elseif ($nota == 8) {
//    echo 'B';
//} else {
//    echo 'F';
//}

