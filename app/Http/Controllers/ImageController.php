<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Storage;

class ImageController extends Controller
{
    public function salvarImagem(Request $request)
    {
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeArquivo = $imagem->getClientOriginalName();

            // Acesse o serviço de armazenamento do Firebase
            $firebaseStorage = app('firebase.storage');

            // Faça upload da imagem para o Firebase Storage
            $imagePath = 'caminho/para/salvar/'.$nomeArquivo;
            $firebaseStorage->getBucket()->upload(
                fopen($imagem->getRealPath(), 'r'),
                ['name' => $imagePath]
            );

            // Aqui você pode salvar o caminho da imagem no banco de dados se desejar
            // Exemplo: $caminhoImagem = $imagePath;
            
            return "Imagem salva com sucesso!";
        }

        return "Nenhuma imagem foi enviada.";
    }
}
