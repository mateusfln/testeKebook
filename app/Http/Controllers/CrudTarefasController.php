<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarefasRequest;
use App\Http\Resources\TarefaResource;
use App\Models\Tarefas;

class CrudTarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarefa = TarefaResource::collection(Tarefas::all());

      

        return response()->json($tarefa);
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(TarefasRequest $request)
    {
        try {
            $tarefa = Tarefas::create($request->all());
            return response()->json(['message' => 'Tarefa '.$tarefa->id. ' adicionada com sucesso'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao adicionar tarefa', 'message' => $e->getMessage()], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tarefa = new TarefaResource(Tarefas::where('id',$id)->first());
        return response()->json($tarefa, 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(TarefasRequest $request, string $id)
    {
        $tarefa = Tarefas::findOrFail($id);
        $tarefa->update($request->all());

       

        return response()->json(['message' => 'Tarefa '.$id. ' atualizada com sucesso'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tarefas::findOrFail($id)->delete();

        

        return response()->json(['message' => 'Tarefa '.$id. ' deletada com sucesso'], 200);
    }
}
