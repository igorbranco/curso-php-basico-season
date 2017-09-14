<?php


try {
    $conn = new PDO("mysql:host=localhost;dbname=projeto_final", "root", "season");
    $conn->exec("set names utf8");
    
} catch (PDOException $ex){
    echo "Erro de conexão: $e";
    exit();
}

$nome = "Gerência2";
$slug = "ge2";
$id = 10;

$stmt = $conn->prepare("UPDATE grupos SET nome=?, slug=? WHERE id=?");
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $slug); 
$stmt->bindParam(3, $id);

if($stmt->execute()) {
    echo "sucesso";
} else {
    echo implode(",", $stmt->errorInfo());
}