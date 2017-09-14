<?php 
require_once('../partials/header.php');
require_once('usuarios-dao.php');
$usuarios = All();
?>
<div class="container">
    <h1>Usuários</h1>
        
    <br>
    
    <a href="criar-form.php" class="btn btn-primary">Cadastrar Usuário</a>
    
    <br>
    <br>
    <?php include('../partials/success.php'); ?>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Grupo</th>
                <th>Ações</th>
            </tr>
        </thead> 
        
        <tbody>
            <?php foreach($usuarios as $key => $usuario): ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['grupo'] ?></td>
                <td>
                    <a href="" class="btn btn-default">Visualizar</a> 
                    <a href="" class="btn btn-primary">Editar</a>
                    <a href="usuarios-controller.php?id=<?= $key ?>&action=destroy" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </tbody>
        
        <tfoot>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Grupo</th>
                <th>Ações</th>
            </tr>
        </tfoot>
    </table>
            
</div>
        
 <?php require_once('../partials/footer.php'); ?>
