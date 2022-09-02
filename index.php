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

        <h1>Receitas Tops</h1>

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

                <h2>    AUTOR: <?= $receita['autor'] ?>  <h2>              

               

                

                <a href="mostra_receita.php?id=<?= $receita['id'] ?>">Ver receita</a>
            </div>
        <?php } ?>
    </body>
</html>
