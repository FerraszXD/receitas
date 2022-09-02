<?php
    include 'conexao.php'; // Faz a conexão com o banco de dados

    $id = $_GET['id'];

    // Criar a consulta
    $sql = "SELECT * FROM receitas WHERE id = $id";

    // Executa a consulta no banco de dados
    $res = $conexao->query($sql);

    // Pega os resultados e guarda na variável
    $receita = $res->fetch();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
        <title>Coktop - as melhores receitas</title>
    </head>
    <body>
        <h1>Coktop - as melhores receitas</h1>
        <hr>

        <h2> TITULO:<?= $receita['titulo'] ?></h2>

        <h2> INGREDIENTES:<?=  $receita['ingredientes'] ?></h2>

        <h2> AUTOR:<?= $receita['autor'] ?></h2>

        <h2> MODO DE PREPARO:<?= $receita['modo_preparo'] ?></h2>

        <h2> EQUIPAMENTOS:<?=$receita['equipamentos'] ?></h2>

        <div class="voltar">
            <a href="index.php">Voltar</a>
        </div>
    </body>
</html>
