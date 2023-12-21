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

// Listar todas as tarefas
Route::get('/tarefas', [CrudTarefasController::class, 'index']);

// Mostrar uma tarefa específica
Route::get('/tarefas/{id}', [CrudTarefasController::class, 'show']);

// Criar uma nova tarefa
Route::post('/tarefas', [CrudTarefasController::class, 'store']);

// Atualizar uma tarefa
Route::put('/tarefas/{id}', [CrudTarefasController::class, 'update']);

// Mudar o status de uma tarefa
Route::put('/tarefas/{id}/changeStatus', [CrudTarefasController::class, 'changeStatus']);

// Excluir uma tarefa
Route::delete('/tarefas/{id}', [CrudTarefasController::class, 'destroy']);