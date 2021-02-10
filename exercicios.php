<html>
    <head>
        <title>PHP - Aula </title>

    </head>

    <body>
        <h1>PHP - Exercicios</h1>

        <form method="post">
            <fieldset>
                <label>Valor 1</label>
                <input type="text" name="valor1">
                <br><br>

                <label>Fatorial do Valor</label>
                <input type="text" name="valor2">
                <br><br>

                <button type="submit">Enviar</button>
            </fieldset>
        </form>
      
    
    <h2>Resultado</h2>

          
<?php

    require "funcoes.php";

  if(isset($_POST["valor2"]) == true)
  {
    echo "Fatorial: ";

    fatorial($_POST["valor2"]);
    
  }

  if(isset($_POST["valor1"]) == true)
  {
    $ult = $_POST["valor1"];

    for ($i = 1; $i <= $ult; $i = $i + 1)
    {
        echo $i . "<br>";
    }    

  }
?>

    </body>
</html>
