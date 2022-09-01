<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
        <title>Coktop - as melhores receitas</title>
    </head>
    <body>
        <h1>Coktop - as melhores receitas</h1>

        <a href="cadastro.php">Cadastrar nova receita</a>

        <h1>receitas fodas</h1>

        <?php
            include 'conexao.php'; // Faz a conexão com o banco de dados

            // Criar a consulta
            $sql = "SELECT * FROM receitas";

            // Executa a consulta no banco de dados
            $resposta = $conexao->query($sql);

            // Guarda os resultados em uma variável
            $receitas = $resposta->fetchAll();
        ?>

        <?php foreach ($receitas as $receita) { // Laço de repetição para as receitas que vieram do banco ?>
            <div class="receita">
                <h2> TITULO:<?= $receita['titulo'] ?></h2>

                <p>
                    AUTOR: <?= $receita['autor'] ?>
                </p>

                <h3> INGREDIENTES:<?= $receita['ingredientes'] ?></h3>

                <h3> MODO DE PREPARO:<?= $receita['modo_preparo'] ?></h3>

                <h3> EQUIPAMENTOS:<?= $receita['equipamentos'] ?></h3>

                

                <a href="mostra_receita.php?id=<?= $receita['id'] ?>">Ver receita</a>
            </div>
        <?php } ?>
    </body>
</html>
