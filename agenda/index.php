<?php

        require "bancodedados.php";

       
        $nome = "";
        $telefone = "";
        $email = "";
        $cidade = "";
        $formValido = true;

        $banco_dados = listaContatos();
        
        if (count($_POST) > 0 )
        {
            $formValido = validaform($_POST);
                if ($formValido == true)
                {
                    $nome = $_POST["nome"];
                    $telefone = $_POST["telefone"];
                    $email = $_POST["email"];
                    $cidade = $_POST["cidade"];

                     $banco_dados = adicionarContato($nome, $telefone, $email, $cidade);
                }

        }

        //var_dump($banco_dados);
    ?>

<html>
    <head>
        <title>Agenda</title>
        <style>
            .msg-erro{
                border: 1px solid red;
                padding: 6px;
                background-color: rosybrown;
                font-weight: bold;
                color: black;
                text-align: center;

            }
        </style>
    </head>

    <body>
        <h1>Agenda de Contatos</h1>
    <?php 
    if($formValido == false)
    {
    ?>
        <div class="msg-erro">
            ATENÇÃO: Preencha todos os campos
        </div>
    <?php
    }
    ?>
        <form method="POST">
            <fieldset>
                <legend>Dados do Contato</legend>

                <label>Nome</label>
                <input type="text" name="nome">
                <br>

                <label>Telefone</label>
                <input type="text" name="telefone">
                <br>

                <label>Email</label>
                <input type="email" name="email">
                <br>

                <label>Cidade</label>
                <input type="text" name="cidade">
                <br>

                <button type="submit">Cadastrar</button>

            </fieldset>
        </form>

<pre>
    
</pre>
        <table>
            <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Cidade</th>
            </tr>
            </thead>

            <tbody>
        <?php 
            foreach($banco_dados as $linha)
            {
        
               echo " <tr>";
               echo "<td>" . $linha["nome"] ." </td>";
               echo "<td>" . $linha["telefone"] ." </td>";
               echo "<td>" . $linha["email"] ." </td>";
               echo "<td>" . $linha["cidade"] ." </td>";
               echo "</tr>";
        
            }
        ?>
            </tbody>

        </table>

    </body>
</html>