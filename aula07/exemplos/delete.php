<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=projeto_final", "root", "season");
    $conn->exec("set names utf8");
    
} catch (PDOException $ex){
    echo "Erro de conexão: $e";
    exit();
}

$id = 10;

$stmt = $conn->prepare("DELETE FROM grupos WHERE id=?");
$stmt->bindParam(1, $id);

if($stmt->execute()) {
    echo "sucesso";
} else {
    echo implode(",", $stmt->errorInfo());
}