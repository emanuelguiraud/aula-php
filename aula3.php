<html>
    <head>
        <title>PHP - Aula </title>

    </head>

    <body>
        <h1>PHP - Aula 3</h1>

        <?php
        // vetores - array

        // Criar vetor
        $cidades = array("Curitiba", "Colombo", "Araucaria", "Pinhais");

        var_dump($cidades);

        echo "<br><br>";

        // Alterar
        $cidades[0] = "Curitiba";
        $cidades[1] = "Campo Largo";
        $cidades[] = "Contenda";
        $cidades[] = "Colombo";

        //Remover
        unset($cidades[3]);
        var_dump($cidades);

        ?>
<br><br><br>
        <?php
        //echo $cidades[2];

        //loops
        
        $fim = count($cidades);

        echo "DeCrescente<br><br>";
        for($idx = $fim - 1; $idx > -1; $idx = $idx - 1)
        {
            echo $cidades[$idx] . "<br>";
        }

        echo "<br>Crescente<br><br>";

        sort($cidades);

        for($idx = 0; $idx < $fim; $idx = $idx + 1)
        {
            echo $cidades[$idx] . "<br>";
        }

        ?>

    </body>
</html>
