<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Idade para votação</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <h1>Idade para votação</h1>
        <form action="votacao.php" method="get">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control"><br>
            
            <label>Idade</label>
            <input type="number" name="idade" class="form-control"><br>
            
            <input type="submit" value="Enviar" class="btn">
          </div> 
        </form>
        
    </body>
</html>
