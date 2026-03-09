<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
</head>
<body>
    <a href="/PB_PHP/MVCavaliacao/livros/listar">Ir para a tela Listar</a>
    <form method="POST" action="salvar">
        <input type="text" name="titulo" placeholder="Titulo livro" require>
        <input type="text" name="autor" placeholder="Autor livro" require>
        <input type="date" name="data_publicacao" placeholder="Publicação livro" require>
        <input type="text" name="editora" placeholder="Editora livro" require>


        <button type="submit">Enviar</button>
    
</body>
</html>