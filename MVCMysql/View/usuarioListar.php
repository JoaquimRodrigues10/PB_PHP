<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuaris</title>
</head>
<body>
    <a href="/PB_PHP/MVCMysql/usuario/telaCadastro">Voltar a tela telaCadastro</a>
    <h2>Usuários</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
</tr>
<?php foreach($usuarios as $id => $u): ?>
    <tr>
        <td><?= $u['NOME']?></td>
        <td><?= $u['EMAIL']?></td>
        <td>
            <a href="/PB_PHP/MVCMysql/usuario/telaEditar?id=<?= $u['ID'] ?>">
                Editar
            </a>
            <a href="/PB_PHP/MVCMysql/usuario/excluir?id=<?= $u['ID'] ?>">
                Excluir
        </td>
</tr>
<?php endforeach; ?>

</table>
</body>
</html>