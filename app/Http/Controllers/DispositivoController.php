<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DispositivoController extends Controller{

function create(Request $informacoes){
    $userId = auth()->user()->id;

    $contDispositivo = Dispositivo::where('id_user', $userId)->count();

    if($contDispositivo >= 3){
        echo "Não foi possivel  Você ja tem 3 dispositivo cadastrado!";
        return view('dispositivo');
    }

    Dispositivo::create([
        'id_user' => $userId,
        'nome' => $informacoes->nome,
        'ip' => $informacoes->ip,
    ]);

    echo "Dispositivo cadastrado com sucesso";
    return view('img');
}


    function getDispositivo($id){

        $dispositivo = Dispositivo::findOrFail($id); //função find sempre vai buscar pelo id  ||

        echo $dispositivo->nome;
        echo "<br/>";
        echo $dispositivo->ip;

    }

    function editDispositivo($id){

        $dispositivo = Dispositivo::findOrFail($id); //função find sempre vai buscar pelo id  ||
        return view('editar', ['Dispositivo' => $dispositivo]);
    }

    function updateDispositivo(Request $request, $id){

        $dispositivo = Dispositivo::findOrFail($id);
        $dispositivo->nome = $request->nome;
        $dispositivo->ip = $request->ip;
        $dispositivo->save();
        echo "dispositivo atualizado";
    }

    function deleteDispositivo($id){
        $dispositivo = Dispositivo::findOrFail($id);
        $dispositivo->delete();
        echo "dispositivo excluido com sucesso";
    }
}
