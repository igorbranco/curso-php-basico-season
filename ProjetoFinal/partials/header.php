<?php

session_start();
$url = "http://".$_SERVER['HTTP_HOST'].'/ProjetoFinal';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/ProjetoFinal/public/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">Projeto Final</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    
                    <?php if(isset($_SESSION['auth'])): ?>
                    <?php if($_SESSION['auth']['grupo'] == 'adm'): ?>   
                    <li><a href="<?= $url ?>/usuarios/">Usuários</a></li>
                    <?php endif; ?>
                    <li><a href="#">Conteúdos</a></li>
                    <?php endif; ?>
                  </ul>
                    <ul class="nav navbar-nav navbar-right">
                    
                    <?php if(isset($_SESSION['auth'])): ?>
                    
                    <li><a href="<?= $url ?>/auth/logout.php">Logout</a></li>
                    
                    <?php else: ?>
                    <li><a href="<?= $url ?>/auth/login-form.php">Login</a></li>
                    <?php endif; ?>
                  </ul>
                </div>
            </nav>
        </nav>