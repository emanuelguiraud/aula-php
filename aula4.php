<html>
    <head>
        <title>PHP - Aula </title>

    </head>

    <body>
        <h1>PHP - Aula 4</h1>

      <?php

//        require "funcoes.php";

        // E -> P -> S

        // escopo de função
        $n1 = 10;
        $n2 = 5;

        function soma($n1, $n2)
        {
            $soma = $n1 + $n2;
            return $soma;
        }

        
        echo soma($n1, $n2) . "<br>";


      ?>  

    </body>
</html>
