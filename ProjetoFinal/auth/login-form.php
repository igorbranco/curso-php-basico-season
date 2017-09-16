<?php 


require_once('../partials/header.php');


?>
<div class="container">
    <h1>Login</h1>
    
    <form method="POST" action="login.php">
        <label>E-mail:</label>
        <input type="email" class="form-control" name="email"><br>
        
        <label>Senha:</label>
        <input type="password" class="form-control" name="senha"><br>
        
        <input type="submit" value="Login" class="btn btn-primary">
    </form>     
    
</div>  
 <?php require_once('../partials/footer.php'); ?>
