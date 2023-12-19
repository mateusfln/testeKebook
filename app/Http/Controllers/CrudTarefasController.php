<?php

namespace App\Http\Controllers;

use App\Http\Requests\TarefasRequest;
use App\Http\Resources\TarefaResource;
use App\Models\Tarefas;

class CrudTarefasController extends Controller
{
    /**
     * método para listar todos as tarefas.
     */
    public function index()
    {
        $tarefa = TarefaResource::collection(Tarefas::all());

      

        return response()->json($tarefa, 200);
    }

    
    /**
     * método para criar novas tarefas.
     */
    public function store(TarefasRequest $request)
    {

        //try catch para detectar possiveis erros
        try {
            $tarefa = Tarefas::create($request->all());
            return response()->json(['message' => 'Tarefa '.$tarefa->id. ' adicionada com sucesso'], 201); // status de sucesso
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao adicionar tarefa', 'message' => $e->getMessage()], 404);// status de erro
        }
    }

    /**
     * método para mostrar uma tarefa especifica.
     */
    public function show(string $id)
    {
        
        try {
            $tarefa = new TarefaResource(Tarefas::where('id',$id)->first());//resource para filtrar os dados e facilitar o entendimento das informações fornecidas pela api
            return response()->json($tarefa, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro ao mostrar tarefa', 'message' => $e->getMessage()], 404);
        }
    }


    /**
     * método para alterar a descrição de uma tarefa.
     */
    public function update(TarefasRequest $request, string $id)
    {
        $tarefa = Tarefas::findOrFail($id);
        $tarefa->update($request->all());

       

        return response()->json(['message' => 'Tarefa '.$id. ' atualizada com sucesso'], 200);
    }

    /**
     * método para deletar uma tarefa especifica.
     */
    public function destroy(string $id)
    {
        Tarefas::findOrFail($id)->delete();

        

        return response()->json(['message' => 'Tarefa '.$id. ' deletada com sucesso'], 200); //feedback para o usuario de que a ação ocorreu com sucesso
    }
}
