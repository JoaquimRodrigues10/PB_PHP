<!DOCTYPE html> 
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tela Editar</title>
</head>
<body>
    <h2>Editar Livros</h2>
    <a href="/PB_PHP/MVCavaliacao/livro/listar">Ir para a tela Listar</a>

    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
        <input type="text" name="id" value="<?=htmlspecialchars($_GET['id'])?>"disabled>
        <input type="text" name="titulo" value="<?=htmlspecialchars($livro['TITULO'])?>"require>
        <input type="text" name="autor" value="<?=htmlspecialchars($livro['AUTOR'])?>"require>
        <input type="date" name="data_publicacao" value="<?=htmlspecialchars($livro['DATA_PUBLICACAO'])?>"require>
        <input type="text" name="editora" value="<?=htmlspecialchars($livro['EDITORA'])?>"require>
        <button type="submit">Editar</button>
</form>
</body>
</html>

