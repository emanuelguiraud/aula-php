<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Treina Carnaval</title>
</head>
<body>
    <h1> Treinamento- PHP </h1>
    <form method= "POST">
        <fieldset>
            <label> Nome </label>
            <input type="text" name="nome">
            <label> Idade </label>
            <input type="number" name="idade">
            <label> Sexo </label>
            <input type="radio" name="sexo">Masculino
            <input type="radio" name="sexo">Feminino <br>
            <input type="submit" name="enviar">
        </fieldset>
    </form>
    <?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
        

    ?>
</body>
</html>