<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD laravel</title>
</head>

<body>


    @if(session('status'))
        <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
    @endif


    <form action="/cadastrar-usuario" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text" placeholder="Digite seu nome..." name="name">
        <br> <br>
        <label for="">Email</label>
        <input type="text" placeholder="Digite seu Email..." name="email">
        <br> <br>
        <label for="">Senha</label>
        <input type="text" placeholder="Digite sua Senha..." name="senha">
        <br> <br>
        <button>Enviar Cadastro</button>
    </form>

</body>

</html>