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
            
            
            <form action="string.php" method="POST">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control">
                <br>
                
                <label>Rua</label>
                <input type="text" name="endereco[rua]" class="form-control">
                <br>
                
                <label>Número:</label>
                <input type="text" name="endereco[numero]" class="form-control">
                <br>
                
                <label>CEP:</label>
                <input type="text" name="endereco[cep]" class="form-control">
                <br>
                <label>Linguagens: </label>
                
                <select name="linguagem[]" class="form-control" multiple="">
                    <option>Java</option>
                    <option>PHP</option>
                    <option>Python</option>
                </select><br>
                <label>Sabe PHP?</label><br>
                 
                <label>Sim</label>
                <input type="radio" name="conhecimento" value="1" checked>
                <label>Não</label>
                <input type="radio" name="conhecimento" value="0" >
                <br>
                <label>Quais linguagens eu sei</label><br>
                <label>Java</label>
                <input type="checkbox" name="php[]" value="java">  
                
                <label>PHP</label>
                <input type="checkbox" name="php[]" value="php"> 
                
                <label>Python</label>
                <input type="checkbox" name="php[]" value="python"> 
                
                <br>
                
                <br>
                <input type="submit" value="Enviar" class="btn btn-primary">
                
            </form>
            
        </div>
    </body>
</html>
