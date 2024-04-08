@if($mensagem = Session::get('erro'))
{{$mensagem}}
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
    {{$error}} <br>
    @endforeach
@endif

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





    <form class="row container" action="{{ route('login.auth')}}" method="POST">
        @csrf
        
            <label for="">Email</label>
            <input type="text" placeholder="Digite seu Email..." name="email"> 
        
        
        <label for="">Senha</label>
        <input type="password" placeholder="Digite sua senha..." name="password">
            <br> <br>       
        <button class="waves-effect waves-light btn">Entrar</button>
    </form>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>