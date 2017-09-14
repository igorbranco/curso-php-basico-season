<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=projeto_final", "root", "season");
    $conn->exec("set names utf8");
    
} catch (PDOException $ex){
    echo "Erro de conexão: $e";
    exit();
}

$stmt = $conn->prepare("SELECT * FROM grupos");

$stmt->execute();

$usuarios = $stmt->fetchAll();

echo '<pre>';
print_r($usuarios);
echo '</pre>';
       