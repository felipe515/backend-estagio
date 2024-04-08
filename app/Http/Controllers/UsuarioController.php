<?php

namespace App\Http\Controllers;

//use App\Models\Usuario;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller{

    function create(Request $informacoes){
        User::create([
            'name' => $informacoes->name,
            'email' => $informacoes->email,
            'password' => $informacoes->password
        ]);
        echo "Usuario Cadastrado com sucesso";
        return view('dispositivo');
    }

    function getUser($id){

        $usuario = User::findOrFail($id); //função find sempre vai buscar pelo id  ||

        echo $usuario->name;
        echo "<br/>";
        echo $usuario->email;
        echo "<br/>";
        echo $usuario->password;
    }

    function editUser($id){

        $usuario = User::findOrFail($id); //função find sempre vai buscar pelo id  ||
        return view('editar', ['usuario' => $usuario]);
    }

    function updateUser(Request $request, $id){

        $usuario = User::findOrFail($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();
        echo "usuario atualizado";
    }

    function deleteUser($id){
        $usuario = User::findOrFail($id);
        $usuario->delete();
        echo "usuario excluido com sucesso";
    }
}
