<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD laravel</title>
</head>

<body>

    <form action="/atualizar/{{$usuario->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome</label>
        <input type="text" placeholder="Digite seu nome..." name="name" value="{{$usuario->name}}">
        <br> <br>
        <label for="">Email</label>
        <input type="text" placeholder="Digite seu email..." name="email" value="{{$usuario->email}}">
        <br> <br>
        <label for="">Senha</label>
        <input type="text" placeholder="Digite sua Senha..." name="senha" value="{{$usuario->senha}}">
        <br> <br>
        <button>Enviar Cadastro</button>
    </form>

</body>

</html>