<?php

namespace App\Http\Controllers;

class ComandoController extends Controller{

    //teste
    public function teste(){
        // Comando que será executado
        $comando = 'laravel --version';
        // Executando o comando no terminal
        exec($comando, $output);
        // Retornando a saída do comando
        return response()->json($output);
    }



    //retorna informações básicas do dispositivo
    public function deviceInfo(){
        // Comando que será executado
        $comando = 'deviceInfo';
        // Executando o comando no terminal
        exec($comando, $output);
        // Retornando a saída do comando
        return response()->json($output);
    }

    //foto da camera traseira
    public function takepicBack(){

        $comando = 'takepic 0';

        exec($comando, $output);
        return response()->json($output);
    }


    //foto da camera frontal
    public function takepicFront(){

        $comando = 'takepic 1';

        exec($comando, $output);
        return response()->json($output);
    }


    //retorna o ip do dispositivo
    public function getIP(){

        $comando = 'getIP';
        exec($comando, $output);

        return response()->json($output);
    }


    //retorna a localização atual do dispositivo
    public function getLocation(){
     
        $comando = 'getLocation';
        exec($comando, $output);
      
        return response()->json($output);
    }


/*
    public function frontal()
    {
        // Executa o comando para a câmera frontal
        $comando = 'takepic 1';
        exec($comando, $output);

        // Processa a saída do comando
        $imagem = $this->processarSaida($output);

        // Retorna a imagem da câmera frontal
        return response()->json($imagem);
    }

    public function traseira()
    {
        // Executa o comando para a câmera traseira
        $comando = 'takepic 0';
        exec($comando, $output);

        // Processa a saída do comando
        $imagem = $this->processarSaida($output);

        // Retorna a imagem da câmera traseira
        return response()->json($imagem);
    }

    private function processarSaida($output)
    {
        // Obtém a base64 da imagem
        $base64 = null;

        foreach ($output as $line) {
            if (preg_match('/^Base64: (.+)$/', $line, $matches)) {
                $base64 = $matches[1];
                break;
            }
        }

        // Retorna a imagem
        return [
            'imagem' => $base64,
        ];
    }
    */

}
