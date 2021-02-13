<?php

    function listaContatos()
    {

        // 1 passo - conexão
        $dbcon = mysqli_connect('localhost', 'newuser', 'password', 'agenda');       

        // 2 passo - enviar solicitação
        $sql = "SELECT * FROM contatos";

        $retorno = mysqli_query($dbcon, $sql);        

        // 3 passo - tratar o resultado do bd
        $dados = mysqli_fetch_all($retorno, MYSQLI_ASSOC);

        return $dados;
    }

    function adicionarContato( $nome, $telefone, $email, $cidade)
    {

        $linha = "\n$nome, $telefone, $email, $cidade";

        file_put_contents("dados.csv", $linha, FILE_APPEND);

        $banco_dados = listaContatos();        
        return $banco_dados;
    }

    function validaForm($campos)
    {
        
        $msg_erro = "";
        

        // verifica se os campos preenchidos
        foreach($campos as $chave => $valor)
        {
            if ($valor == "")
            {
                $msg_erro = "O campo $chave é obrigatório";
            }
        }

        if (strlen($campos["nome"]) < 3)
        {
            
            $msg_erro = "O campo nome precisa ser Preenchido";
        }

        if(preg_match("/^\([0-9][0-9]\)[0-9]{4,5}-[0-9]{4}/", $campos["telefone"]) == false)
        {
            $msg_erro = "O campo telefone esta com o formato invalido";

        }
        
        if(preg_match("/^[0-9a-zA-Z._]*@[0-9a-zA-Z]*\.[a-z.]*/", $campos["email"]) == false)
        {
            $msg_erro = "O campo email esta com o formato invalido";

        }

        return $msg_erro;
    }

    function existeEmail($email)
    {
        $dados = listaContatos();

        $existe = false;

        foreach($dados as $valor)
        {
            
            if (trim($valor["email"]) == trim($email))
            {
                $existe = true;
            }

        }

        return $existe;
    }

?>