<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Validação de dados</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        
        <div class="container">
            <h1>Validação de dados</h1>
            
            <?php include('partials/notice.php'); ?>
            
            
            <form action="exemplos/string.php" method="GET">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control">
                
                <br>
                
                <label>Idade</label>
                <input type="number" name="idade" class="form-control">
                
                <br>
                
                <label>Salário</label>
                <input type="number" step="0.01" name="salario" class="form-control">
                
                <br>
                
                <label>Descrição</label>
                <textarea rows="2" name=descricao" class="form-control"></textarea>
                
                <br>
                
                <input type="submit" value="Enviar" class="btn btn-primary">
                
            </form>
            
        </div>
    </body>
</html>
