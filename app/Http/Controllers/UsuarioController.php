<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller{

    function create(Request $informacoes){
        Usuario::create([
            'name' => $informacoes->name,
            'email' => $informacoes->email,
            'senha' => $informacoes->senha
        ]);
        echo "Usuario Cadastrado com sucesso";
        return view('dispositivo');
    }

    function getUser($id){

        $usuario = Usuario::findOrFail($id); //função find sempre vai buscar pelo id  ||

        echo $usuario->name;
        echo "<br/>";
        echo $usuario->email;
        echo "<br/>";
        echo $usuario->senha;
    }

    function editUser($id){

        $usuario = Usuario::findOrFail($id); //função find sempre vai buscar pelo id  ||
        return view('editar', ['usuario' => $usuario]);
    }

    function updateUser(Request $request, $id){

        $usuario = Usuario::findOrFail($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->save();
        echo "usuario atualizado";
    }

    function deleteUser($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        echo "usuario excluido com sucesso";
    }
}
