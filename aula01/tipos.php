<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // tipos elementares
        // intenger
        $tipoVariavel = 11;
        // float
        $tipoVariavel = 1.1;
        // string
        $tipoVariavel = 'cadeia de caracteres';
        // Boolean
        $tipoVariavel = true;
        
        // tipos compostos
        // array
        $tipoVariavel = array(1,2,3);
        $tipoVariavel = [1,2];
        // object
        $tipoVariavel = new DateTime();
        
        // tipos especiais
        // resource
        $tipoVariavel = fopen("index.php", "r");
        
        $tipoVariavel = NULL;
        
        var_dump($tipoVariavel);
        echo '<br><br>';
        
        $integer = 12;
        echo "A variável $integer é do tipo " . gettype($integer) . "<br>";
        
        $float =12.12;
        echo "A viariável $float é do tipo " . gettype($float) . "<br>";
        
        $string = 'texto';
        echo "A variável $string é do tipo " . gettype($string) . "<br>";
        
        $boolean = false;
        echo "A variável $boolean é do tipo " . gettype($boolean) . "<br>";
        
        $array = array();
        echo "A variável array é do tipo " . gettype($array) . "<br>";
        
        $object = new DateTime();
        echo "A variável object é do tipo " . gettype($object) . "<br>";
        
        $resource = fopen("index.php", "r");
        echo "A variável $resource é do tipo" . gettype($resource) . "<br>";
        
        $null = null;
        echo "A variável $null é do tipo " . gettype($null) . "<br>";
        
        $soma = '1' + '3';
        echo $soma;
        
        // comentário
        # comentaŕio
        /* comentario 
         * comentario
         */
        
        /**
         * @var int
         * @author Igor
         */
        ?>
    </body>
</html>
