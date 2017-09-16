<?php

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

$config = require('../config.php');

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
/**
 * @return Object $usuario
 */
function login(string $email, string $senha) : array
{
    $senha = md5($config['APP'].$senha);
    
    $conn = connection();
$sql = "SELECT usuarios.id, usuarios.nome, grupos.slug as grupo FROM usuarios "
                ."INNER JOIN grupos "
                ."ON usuarios.grupo_id = grupos.id "
                ."WHERE email = ? AND senha = ?";
    
    $rs = $conn->prepare($sql);
    $rs->bindParam(1, $email);
    $rs->bindParam(2, $senha);
    
    if($rs->execute()){
        $usuario = $rs->fetch(PDO::FETCH_OBJ);
        $usuario = get_object_vars($usuario);
 
        
        return $usuario;
    } else {
        var_dump($rs->errorInfo());
        exit();
    }
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
    $usuario['senha'] = md5($config['APP'].$usuario['senha']);
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