<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Imagem ao Firebase Storage</title>
</head>
<body>
    <h1>Adicionar Imagem</h1>
    <form action="/img" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="imagem" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>