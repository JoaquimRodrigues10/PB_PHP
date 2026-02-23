<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <a href="/PB_PHP/MVCatividade01/produto/telaCadastro">Voltar a tela telaCadastro</a>
    <h2>Produtos</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Preco</th>
            <th>Quantidade</th>
            <th>Validade</th>
            <th>Ações</th>
</tr>
<?php foreach($produtos as $p): ?>
    <tr>
        <td><?= $p['nome']?></td>
        <td><?= $p['preco']?></td>
        <td><?= $p['quantidade']?></td>
        <td><?= $p['validade']?></td>
        <td>próximo produto</td>
</tr>
<?php endforeach; ?>

</table>
</body>
</html>