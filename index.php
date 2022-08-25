<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
        <title>Coktop - as melhores receitas</title>
    </head>
    <body>
        <h1>Coktop - as melhores receitas</h1>
        <a href="cadastro.php">Cadastrar nova Receita</a>
    </body>

    <h1> 
        <title> todas as receitas</title>
    </h1>

    <?php
    include 'conexao.php'; //faz a conexao com o banco de dados

//cria a consulta
$sql = "SELECT * FROM receitas";

//execulta a consulta no banco de dados
$resposta = $conexao->query($sql);

//guarda os resultados em uma variavel
$receitas = $resposta->fetchAll();
?>

<?php foreach ($receitas as $receita) { ?>
    <div class="ingredientes">
    <h2><?= $receita['titulo'] ?></h2>
    <p>
        
    <?= $receita['ingredientes']?>
    </p>

    <p>Autor: <?= $receita['autor'] ?>

    <p>Modo de preparo: <?= $receita['modo_de_preparo'] ?>
    </p>

    <p>Equipamentos: <?= $receita['equipamentos'] ?>
    </p>

    </p>
    </div>
    <?php }  ?>








</html>
