<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    function create(Request $informacoes){
        Dispositivo::create([
            'nome' => $informacoes->nome,
            'ip' => $informacoes->ip,
        ]);
        echo "dispositivo Cadastrado com sucesso";
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
