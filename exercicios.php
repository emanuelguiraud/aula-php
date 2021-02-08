<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP - Aula</title>
</head>
<body>
    <h1>PHP - Exercicios</h1>
    <form method="POST">
        <fieldset>
        <label> Valor 1</label>
        <input type="text" name="valor1">
        </br></br>
        <label> Fatorial do Valor</label>
        <input type="text" name="valor2">
        </br></br>

        <button type="submit">Enviar</button>
        </fieldset>
    </form>

<?php
    if(isset($_POST["valor1"]) == true)
    $ultimo = $_POST ["valor1"];

    for ($inicial = 1; $inicial <= $ultimo; $inicial = $inicial + 1)
    {
        echo $inicial . "<br>";
    }
?> 

<?php
     $mult = 1;
     if(isset($_POST["valor2"]) == true)
     $inicial = $_POST ["valor2"];
     for ($ultimo = $inicial; $inicial >=1; $inicial = $inicial - 1)
     {
         echo $inicial . " * ";
         $mult = $mult * $inicial;
     }
     echo " = $mult"
?>
    <h2>Resultado</h2>
    <p>Imprima Números</p>
</body>
</html>