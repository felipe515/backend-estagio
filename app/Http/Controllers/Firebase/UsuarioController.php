<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class UsuarioController extends Controller
{

    private $database;
    private $tablename = 'usuarios';

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function create(Request $request)
    {
        $data = $request->all();

        

        $reference = $this->database->getReference($this->tablename);
        $key = $reference->push($data)->getKey();

        return response()->json([
            'success' => true,
            'message' => 'Usuário criado com sucesso!',
            'id' => $key,
        ]);
    }

    //leitura
    public function getAllUsers()
    {

        $reference = $this->database->getReference($this->tablename);
        $data = $reference->getValue();

        if ($data === null) {
            return response()->json([]);
        }

        return response()->json($data);
    }

    public function getUser($id)
    {

        $reference = $this->database->getReference($this->tablename)->getChild($id);
        $data = $reference->getValue();

        if ($data === null) {
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        }

        return response()->json($data);
    }
    //atualizar
    public function updateUser(Request $request, $id)
    {

        $data = $request->all();

      

        $reference = $this->database->getReference($this->tablename)->getChild($id);
        $reference->update($data);

        return response()->json(['success' => true, 'message' => 'Usuário atualizado com sucesso!']);
    }
    //delete
    public function deleteUser($id)
    {

        $reference = $this->database->getReference($this->tablename)->getChild($id);
        $reference->remove();

        return response()->json(['success' => true, 'message' => 'Usuário deletado com sucesso!']);
    }
}

