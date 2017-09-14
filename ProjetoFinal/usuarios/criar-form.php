<?php 


require_once('../partials/header.php');
require_once('usuarios-dao.php');

$grupos = grupos();
?>
<div class="container">
   
    
    <h1>Cadastrar Usuário</h1>
    <br>
    
     <?php include('../partials/errors.php'); ?>
    
    <form method="post" action="usuarios-controller.php?action=store">
        
        <label>Nome:</label>
        <input type="text" class="form-control" name="usuario[nome]">
        
        <br>
        
        <label>Email</label>
        <input type="email" class="form-control" name="usuario[email]">
        
        <br>
        
         <label>Senha</label>
        <input type="password" class="form-control" name="usuario[senha]">
        
        <br>
        
          <label>Confirmar senha</label>
        <input type="password" class="form-control" name="usuario[senha_senha]">
        
        <br>
        
          <label>Descrição</label>
          <textarea name="usuario[descricao]" class="form-control" rows="3"></textarea>
        <br>
        
         <label>Grupo</label>
        <select name="usuario[grupo_id]" class="form-control">
        <?php foreach($grupos as $grupo): ?>
            <option value="<?= $grupo['id'] ?>"><?= $grupo['NOME'] ?></option>   
        <?php endforeach; ?>
        <br>
        
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        
    </form>
</div>  
 <?php require_once('../partials/footer.php'); ?>
