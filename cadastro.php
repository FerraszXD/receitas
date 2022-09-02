<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
        <title>Coktop - as melhores receitas</title>
    </head>
    <body>
        <h1>Coktop - as melhores receitas</h1>
        <h1>Cadastro de receitas</h1>
        <form action="salvar_receita.php" method="POST">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo">
            </div>
            <div>
                <label for="ingredientes">Ingredientes</label>
                <textarea name="ingredientes" id="ingredientes" cols="5"></textarea>
            </div>
            <div>
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor">
            </div>
            <div>
                <label for="modo_preparo">Modo De Preparo</label>
                <input type="text" name="modo_preparo" id="modo_preparo">
            </div>
            <div>
                <label for="equipamentos">Equipamentos</label>
                <input type="text" name="equipamentos" id="equipamentos">
            </div>
            <input type="submit" value="Salvar">
        </form>
    </body>
</html>

