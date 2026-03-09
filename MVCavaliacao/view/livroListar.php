<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <a href="/PB_PHP/MVCavaliacao/livro/telaCadastro">Voltar a tela de cadastro</a>
    <h2>Livros</h2>
    <table border="1">
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>data_publicacao</th>
            <th>Editora</th>
            <th>Ações</th>
        </tr>
        <?php foreach($livros as $id => $l): ?>
            <tr>
                <td><?= $l['TITULO']?></td>
                <td><?= $l['AUTOR']?></td>
                <td><?= $l['DATA_PUBLICACAO']?></td>
                <td><?= $l['EDITORA']?></td>
        <td>
            <a href="/PB_PHP/MVCavaliacao/livro/telaEditar?id=<?= $l['ID'] ?>">
                Editar
            </a>
            <a href="/PB_PHP/MVCavaliacao/livro/excluir?id=<?= $l['ID'] ?>">
                Excluir
        </td>
</tr>
<?php endforeach; ?>
</body>
</html>