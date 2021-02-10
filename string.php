<html>
    <head>
        <title>PHP - Aula </title>

    </head>

    <body>
        <h1>PHP - String</h1>

        <form method="post">
            <fieldset>
                <label>Maiuculas</label>
                <input type="text" name="texto1">
                <br><br>

                <label>Texto</label>
                <textarea name="texto2"></textarea>
                <br><br>
                
                <label>Pesquisar</label>
                <input type="text" name="pesquisar">
                <br><br>

                <button type="submit">Enviar</button>
            </fieldset>
        </form>
      
    
    <h2>Resultado</h2>


    <?php 

        $sub = "<b>". $_POST["pesquisar"] . "</b>";
        $novo = str_replace($_POST["pesquisar"], $sub, $_POST["texto2"]);

        echo $novo;


        echo strtoupper($_POST["texto1"]);
   ?>
          

    </body>
</html>
