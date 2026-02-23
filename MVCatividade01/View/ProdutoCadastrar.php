<!DOCTYPE html> 
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Produto Cadastro</title>
</head>
<body>
    <a href="/PB_PHP/MVCatividade01/produto/listar">Ir para a tela Listar</a>
    <form method="POST" action="salvar">
        <input type="text" name="nome" placeholder="Nome produto" require>
        <input type="number" name="preco" placeholder="Preco produto" require>
        <input type="number" name="quantidade" placeholder="Quantidade produto" require>
        <input type="date" name="validade" placeholder="Data de validade produto" require>
        <button type="submit">Enviar</button>
</form>
</body>
</html>