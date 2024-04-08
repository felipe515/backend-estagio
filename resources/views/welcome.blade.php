<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD laravel</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>


    @if(session('status'))
        <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
    @endif


    <form class="row container" action="/cadastrar-usuario" method="POST">
        @csrf
        <div class="">

            <label for="">Nome</label>
            <input type="text" placeholder="Digite seu nome..." name="name">
        </div>   

            <label for="">Email</label>
            <input type="text" placeholder="Digite seu Email..." name="email">
            <br> <br>       
        <label for="">Senha</label>
        <input type="text" placeholder="Digite sua Senha..." name="password">
        <br> <br>
        <button class="waves-effect waves-light btn">Enviar Cadastro</button>
    </form>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>