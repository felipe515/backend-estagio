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


    <form action="/cadastrar-dispositivo" method="POST">
        @csrf

        
        <h1>id: {{ auth()->user()->id }}</h1>
        <label for="">Nome</label>
        <input type="text" placeholder="Digite o nome do dispositivo..." name="nome">
        <br> <br>
        <label for="">IP</label>
        <input type="text" placeholder="Digite IP..." name="ip">
        <br> <br>
        <button>Salvar dispositivo</button>
    </form>

</body>

</html>