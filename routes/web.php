<?php

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\UsuarioController;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/cadastrar-usuario', [UsuarioController::class, 'create']);
Route::post('/cadastrar-usuario', [UsuarioController::class, 'create']);
Route::get('/listar-usuario/{id}', [UsuarioController::class, 'getUser']);
Route::get('/listar-usuarios', [UsuarioController::class, 'getAllUsers']);
//Route::get('/editar/{id}', [UsuarioController::class, 'updateUser']);
Route::get('/atualizar/{id}', [UsuarioController::class, 'updateUser']);
Route::get('/delete/{id}', [UsuarioController::class, 'deleteUser']);
/*
Route::post('/cadastrar-usuario', function (Request $informacoes) {
    Usuario::create([
        'name' =>$informacoes->name,
        'senha' =>$informacoes->senha
    ]);
    echo "Usuario Cadastrado com sucesso";
});

Route::get('/buscar/{id}', function ($id){

   $usuario = Usuario::findOrFail($id); //função find sempre vai buscar pelo id  ||
    
   echo $usuario->name;
   echo "<br/>";
   echo $usuario->senha;
});

Route::get('/editar/{id}', function ($id){

   $usuario = Usuario::findOrFail($id); //função find sempre vai buscar pelo id  ||
    return view('editar', ['usuario' => $usuario]);
});

Route::put('/atualizar/{id}', function (Request $request ,$id){

   $usuario = Usuario::findOrFail($id);
   $usuario-> name = $request->name;
   $usuario-> senha = $request->senha;
   $usuario->save();
   echo "usuario atualizado";
    
});

Route::get('/delete/{id}', function ($id){
    $usuario = Usuario::findOrFail($id); 
    $usuario->delete();
    echo "usuario excluido com sucesso";
});

*/
