<?php

use App\Http\Controllers\ComandoController;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});

//rota de usuarios
Route::post('/cadastrar-usuario', [UsuarioController::class, 'create']);
Route::get('/buscar/{id}', [UsuarioController::class, 'getUser']);
Route::get('/editar/{id}', [UsuarioController::class, 'editUser']);
Route::put('/atualizar/{id}', [UsuarioController::class, 'updateUser']);
Route::get('/delete/{id}', [UsuarioController::class, 'deleteUser']);

//rota de dispositivos
Route::post('/cadastrar-dispositivo', [DispositivoController::class, 'create']);
Route::get('/buscar-dispositivo/{id}', [DispositivoController::class, 'getUser']);
Route::get('/editar-dispositivo/{id}', [DispositivoController::class, 'editDispositivo']);
Route::put('/atualizar-dispositivo/{id}', [DispositivoController::class, 'updateDispositivo']);
Route::get('/delete-dispositivo/{id}', [DispositivoController::class, 'deleteDispositivo']);

Route::post('/img', [ImageController::class, 'salvarImagem']);

//rotas de comando
Route::get('/deviceInfo', [ComandoController::class, 'deviceInfo']);
Route::get('/takepicBack', [ComandoController::class, 'takepicBack']);
Route::get('/takepicFront', [ComandoController::class, 'takepicFront']);
Route::get('/getIP', [ComandoController::class, 'getIP']);
Route::get('/getLocation', [ComandoController::class, 'getLocation']);
Route::get('/teste', [ComandoController::class, 'teste']);