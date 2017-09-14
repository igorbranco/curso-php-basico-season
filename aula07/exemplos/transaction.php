<?php


try {
    $conn = new PDO("mysql:host=localhost;dbname=projeto_final", "root", "season");
    $conn->exec("set names utf8");
    
} catch (PDOException $ex){
    echo "Erro de conexão: $e";
    exit();
}

$conn->beginTransaction();
$nome = "Gerência";
$slug = "ge";
       
$stmt = $conn->prepare("INSERT INTO grupos (nome, slug) VALUES (?, ?)");
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $slug); 

if($stmt->execute()) {
    $conn->commit();
    echo "sucesso";
} else {
    $conn->rollBack();
    echo implode(",", $stmt->errorInfo());
}