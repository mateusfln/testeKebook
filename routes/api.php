<?php

use App\Http\Controllers\CrudTarefasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Listar todos os produtos
Route::get('/tarefas', [CrudTarefasController::class, 'index']);

// Mostrar um produto específico
Route::get('/tarefas/{id}', [CrudTarefasController::class, 'show']);

// Criar um novo produto
Route::post('/tarefas', [CrudTarefasController::class, 'store']);

// Atualizar um produto
Route::put('/tarefas/{id}', [CrudTarefasController::class, 'update']);

// Excluir um produto
Route::delete('/tarefas/{id}', [CrudTarefasController::class, 'destroy']);