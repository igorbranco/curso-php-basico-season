<?php 
require_once('../partials/header.php');
?>
<div class="container">
   
    
    <h1>Cadastrar Usuário</h1>
    <br>
    
     <?php include('../partials/errors.php'); ?>
    
    <form method="post" action="usuarios-controller.php?action=store">
        
        <label>Nome:</label>
        <input type="text" class="form-control" name="usuario[nome]">
        
        <br>
        
         <label>Grupo</label>
        <input type="text" class="form-control" name="usuario[grupo]">
        
        <br>
        
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        
    </form>
</div>  
 <?php require_once('../partials/footer.php'); ?>
