<html>
    <head>
        <title>PHP - Aula 2</title>

    </head>

    <body>
        <h1>PHP - Aula 2</h1>

        <form method="POST">
            <label>Numero 1</label>
            <input type="text" name="campo-num1" />

            <label>Numero 2</label>
            <input type="text" name="campo-num2" />

            <button>Enviar</button>
        </form>


        <p>

          <?php
               $n1 = $_POST["campo-num1"];
               $n2 = $_POST["campo-num2"];

                $soma = $n1 + $n2;

                $maior = "";

            if($n1 == $n2)
            {
                //verdade
                $maior = "Igual";

            } elseif($n1 > $n2) 
            {
                //true
                $maior = "Num 1";
            } else 
            {
                $maior = "Num 2";
            }
                
           ?>

            <br>            
            
            Soma: <?php echo $soma; ?>
            <br>
            O maior é: <?php echo $maior; ?>
        </p>

    </body>
</html>
