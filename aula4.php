<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP - Aula</title>
</head>
<body>
    <h1>PHP - Aula 4</h1>

<?php
    // E => P => S

    // require "funcoes.php";

    function soma($n1, $n2)
    {
        $soma = $n1 + $n2;
        return $soma;
    }
    // escopo de função 
    $n1 = 10;
    $n2 = 5;
    
    echo soma (2,5) . "<br>";
    echo soma (10,10) . "<br>";

    

?>
    
</body>
</html>