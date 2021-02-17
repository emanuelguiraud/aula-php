<?php

        require "bancodedados.php";

               
        $nome = "";
        $telefone = "";
        $email = "";
        $cidade = "";
        $formValido = "";

        // if (isset($_GET["ord"]))
        // {
        //     $ord = $_GET["ord"];
        // } else {
        //     $ord = "";
        // }

        // if ternario
        $ord = (isset($_GET["ord"])) ? $_GET["ord"] : "nome";

        $banco_dados = listaContatos($ord);
       
        
        if (count($_POST) > 0 )
        {
            $formValido = validaForm($_POST);

            if ( $formValido == "")
            {
                $nome = $_POST["nome"];
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];
                $cidade = $_POST["cidade"];

                if (existeEmail($email) == true)
                {
                    $formValido = "O Email já foi cadastrado";
                } else {
                    $banco_dados = adicionarContato($nome, $telefone, $email, $cidade);
                }
            } 

        }      
    ?>

<html>
    <head>
        <title>Agenda</title>

        <style>
            .msg-erro{
                border: 1px solid red;
                padding: 4px;
                background-color: bisque;
                color: red;
                text-align: center;
            }

            .tabela {
                border: 1px solid black;
                border-collapse: collapse;
            }
            .tabela th, .tabela td{
                border: 1px solid black;
                padding: 4px;
            }
            .tabela thead {
                background-color: silver;
            }
            .form-cadastro label{
                width: 100px;
                display: inline-block;
            }
            .form-cadastro {
                width: 50%;
            }
        </style>
    </head>

    <body>
        <h1>Agenda de Contatos</h1>

<?php 
if($formValido != "")
{
?>
    <div class="msg-erro">
       <?php echo $formValido; ?>
    </div>

<?php 
}
?>
        <form method="POST" class="form-cadastro">
            <fieldset>
                <legend>Dados do Contato</legend>

                <label>Nome</label>
                <input type="text" name="nome">
                <br>

                <label>Telefone</label>
                <input type="text" name="telefone">
                <br>

                <label>Email</label>
                <input type="text" name="email">
                <br>

                <label>Cidade</label>
                <input type="text" name="cidade">
                <br>

                <button type="submit">Cadastrar</button>

            </fieldset>
        </form>

        <table class="tabela">
            <thead>
            <tr>
                <th><a href="?ord=nome"> Nome </a></th>
                <th><a href="?ord=telefone">Telefone</a></th>
                <th><a href="?ord=email">Email</a></th>
                <th><a href="?ord=cidade">Cidade</a></th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>
        <?php 
            foreach($banco_dados as $linha)
            {
        
                $bt_delete = '<a href="delete.php?id='. $linha["id"]. '">[x]</a>';

               echo ' <tr>';
               echo "<td>" . $linha["nome"] ." </td>";
               echo "<td>" . $linha["telefone"] ." </td>";
               echo "<td>" . $linha["email"] ." </td>";
               echo "<td>" . $linha["cidade"] ." </td>";
               echo "<td> $bt_delete </td>";
               echo "</tr>";
        
            }
        ?>
            </tbody>

        </table>

    </body>
</html>
