<?php

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

function connection() : PDO
{
    try {
    $conn = new PDO("mysql:host=localhost;dbname=projeto_final", "root", "season");
    $conn->exec("set names utf8");
    
} catch (PDOException $ex){
    echo "Erro de conexão: $e";
    exit();
}
    return $conn;
}

function all() : array
{
    $conn = connection();
    
    $stmt = $conn->prepare("SELECT * FROM usuarios");
    $stmt->execute();
    
    $usuarios = $stmt->fetchAll();
    
    return $usuarios;
}

function grupos() : array
{
    $conn = connection();

    $stmt = $conn->prepare("SELECT * FROM grupos");
    
    $stmt->execute();
    
    $grupos = $stmt->fetchAll();
    
    return $grupos;
}

function store(array $usuario) : bool
{
    $conn = connection();
    
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, descricao, grupo_id)"
            ." VALUES (?,?,?,?,?)");

    $stmt->bindParam(1, $usuario['nome']);
    $stmt->bindParam(2, $usuario['email']);
    $stmt->bindParam(3, $usuario['senha']);
    $stmt->bindParam(4, $usuario['descricao']);
    $stmt->bindParam(5, $usuario['grupo_id']);
    
    if($stmt->execute()) {
        return true;
    }else {
        return false;
    }
}
    
    
function destroy(int $id)
{
    unset($_SESSION['usuarios'][$id]);
}