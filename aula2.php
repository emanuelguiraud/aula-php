<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>aula 2</title>
    </head>
    <body>
        <h1> PHP - Aula 2</h1>

        <form method="POST">
            <label>Numero 1</label>
            <input type="text" name="campo-nun1"  autocomplete="off"/>

            <label>Numero 2</label>
            <input type="text" name="campo-nun2"  autocomplete="off"/>

            <button>Enviar</button>
        </form>

        <?php
            $n1  = $_POST["campo-nun1"];
            $n2 = $_POST["campo-nun2"];
            $maior = "";
            $soma = ($n1 + $n2);
            if ($n1 == $n2)
            {
                //verdade
                $maior = "Igual";
            } elseif ($n1 > $n2)
            {
                //true
                $maior = $n1;
            } else
            {
                $maior = $n2;
            }
        ?>
        <p>
        SOMA: <?php echo $soma; ?>
        </br>
        MAIOR É: <?php echo $maior; ?>
        </p>
    </body>
</html>