<?php

    function listaContatos()
    {
        $banco_dados[0] = array("nome" => "Bruce Waine", "telefone" => "11-2222-3333", "email" => "brtuce@waine.com", "cidade" => "Gothan City");
        $banco_dados[1] = array("nome" => "Lex Luthor", "telefone" => "11-1233-2121", "email" => "lex@lex.com", "cidade" => "Outra City");
        $banco_dados[2] = array("nome" => "Diana", "telefone" => "21-333-1211", "email" => "diana@hotmail.com", "cidade" => "Thmenis");

        return $banco_dados;
    }

    function adicionarContato( $nome, $telefone, $email, $cidade)
    {
        $banco_dados = listaContatos();
        $banco_dados[] = array("nome" => $nome, "telefone" => $telefone, "email" => $email, "cidade" => $cidade);
        return $banco_dados;
    }

?>