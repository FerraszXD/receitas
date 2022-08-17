<?php
    // Pega os valores que vieram do formulário e guarda em variáveis
    $tituloFormulario = $_POST['titulo'];
    $ingredientesFormulario = $_POST['ingredientes'];
    $autorFormulario = $_POST['autor'];
    $modo_de_preparoFormulario = $_POST['modo_de_preparo'];
    $equipamentosFormulario = $_POST['equipamentos'];

    // Fazer a conexão com o banco de dados
    try{
        $conexao = new PDO("mysql:host=localhost;dbname=fakenews;charset=utf8", "root", "");
    }catch(PDOException $e){
        echo "Não foi possivel conectar ao banco de dados: " . $e->getMessage();
        exit;
    }

    // Cria a consulta
    $sql = "INSERT INTO receitas 
                (titulo, ingredientes, autor, modo_de_preparo, equipamentos) 
            VALUES 
                (:titulo, :ingredientes, :autor, :modo_de_preparo, :equipamentos)";

    // Prepara a consulta para execução
    $consulta = $conexao->prepare($sql);

    // Passa os valores para a consulta e executa no banco
    $consulta = $consulta->execute([
        ':titulo' => $tituloFormulario,
        ':ingredientes' => $ingredientesFormulario,
        ':autor' => $autorFormulario
        ':modo_de_preparo' => $modo_de_preparoFormulario
        ':equipamentos' => $equipamentosFormulario
    ]);

    // Verificar se deu certo
    if($consulta){
        $mensagem = "receita cadastrada com sucesso!";
    }else {
        $mensagem = "Não foi possivel cadastrar a receita";
    }
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

        <div class="mensagem">
            <h1><?= $mensagem ?></h1>
        </div>

        <div class="voltar">
            <a href="index.php">Voltar</a>
        </div>
    </body>
</html>
